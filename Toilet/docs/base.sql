DROP SCHEMA IF EXISTS access, api, base, dictionary CASCADE;

CREATE SCHEMA IF NOT EXISTS access;
CREATE SCHEMA IF NOT EXISTS api;
CREATE SCHEMA IF NOT EXISTS base;
CREATE SCHEMA IF NOT EXISTS dictionary;
CREATE SCHEMA IF NOT EXISTS history;

------------
-- Funkcje bazodanowe
------------
CREATE OR REPLACE FUNCTION history.create_history_table(table_schema TEXT, table_name TEXT) RETURNS VOID AS $$
DECLARE
    history_tablename TEXT;
    query TEXT;
BEGIN
    history_tablename := 'history.' || table_schema || '_' || table_name;

    -- Utworzenie tabeli historycznej
    query := 'CREATE TABLE IF NOT EXISTS ' || history_tablename || ' (added timestamp with time zone NOT NULL, role TEXT NOT NULL, operation_when TEXT NOT NULL, operation TEXT NOT NULL, LIKE ' || table_schema || '.' || table_schema || ');';
    EXECUTE query;

    -- Podpięcie triggera na isercie
    EXECUTE 'CREATE TRIGGER history_new_element AFTER INSERT ON ' || table_schema || '.' || table_name || ' FOR EACH ROW EXECUTE PROCEDURE history.new_element()';

    -- Podpięcie triggera na update
    EXECUTE 'CREATE TRIGGER history_update_element AFTER UPDATE ON ' || table_schema || '.' || table_name || ' FOR EACH ROW EXECUTE PROCEDURE history.update_element()';

    -- Podpięcie triggera na delete
    EXECUTE 'CREATE TRIGGER history_delete_element AFTER DELETE ON ' || table_schema || '.' || table_name || ' FOR EACH ROW EXECUTE PROCEDURE history.delete_element()';

END; $$ LANGUAGE 'plpgsql' SECURITY DEFINER;

CREATE OR REPLACE FUNCTION history.new_element() RETURNS trigger AS $$
DECLARE
    history_tablename TEXT;
    query TEXT;
BEGIN

    history_tablename := 'history.' || TG_TABLE_SCHEMA || '_' || TG_TABLE_NAME;

    query := 'INSERT INTO ' || history_tablename || ' SELECT NOW(), ''' || current_user || ''', ''' || TG_WHEN || ''' AS operation_when, ''' || TG_OP || ''' AS operation, $1.*';

    EXECUTE QUERY USING NEW;
    RETURN NEW;
END; $$ LANGUAGE 'plpgsql' SECURITY DEFINER;

CREATE OR REPLACE FUNCTION history.update_element() RETURNS trigger AS $$
DECLARE
    history_tablename TEXT;
    query TEXT;
BEGIN

    history_tablename := 'history.' || TG_TABLE_SCHEMA || '_' || TG_TABLE_NAME;

    query := 'INSERT INTO ' || history_tablename || ' SELECT NOW(), ''' || current_user || ''', ''' || TG_WHEN || ''' AS operation_when, ''' || TG_OP || ''' AS operation, $1.*';

    EXECUTE QUERY USING NEW;
    RETURN NEW;
END; $$ LANGUAGE 'plpgsql' SECURITY DEFINER;

CREATE OR REPLACE FUNCTION history.delete_element() RETURNS trigger AS $$
DECLARE
    history_tablename TEXT;
    query TEXT;
BEGIN

    history_tablename := 'history.' || TG_TABLE_SCHEMA || '_' || TG_TABLE_NAME;

    query := 'INSERT INTO ' || history_tablename || ' SELECT NOW(), ''' || current_user || ''', ''' || TG_WHEN || ''' AS operation_when, ''' || TG_OP || ''' AS operation, $1.*';

    EXECUTE QUERY USING OLD;
    RETURN OLD;
END; $$ LANGUAGE 'plpgsql' SECURITY DEFINER;

-------------
-- Struktury danych
-------------
CREATE TABLE base.common
(
	added timestamp with time zone NOT NULL,
	adder TEXT NOT NULL,
	modified timestamp with time zone,
	modifier TEXT,
);

CREATE TABLE access.application
{
	id_application SERIAL NOT NULL,
	name TEXT NOT NULL,

	PRIMARY KEY (id_application)
} INHERITS (base.common);

COMMENT ON TABLE access.application IS 'Aplikacje mające dostęp';
COMMENT ON COLUMN access.application.id_application IS 'Identyfikator aplikacji';
COMMENT ON COLUMN access.application.name IS 'Czytelna nazwa aplikacji';

CREATE TABLE access.application_hash
(
	id_application_hash SERIAL NOT NULL,
	id_application BIGINT NOT NULL,
	hash TEXT NOT NULL,

	PRIMARY KEY (id_application_hash),
	UNIQUE (hash)
} INHERITS (base.common);

COMMENT ON TABLE access.application_hash IS 'Klucze dostępowe';
COMMENT ON COLUMN access.application_hash.id_application_hash IS 'Identyfikator hash''a';
COMMENT ON COLUMN access.application_hash.id_application IS 'Identyfikator aplikacji';
COMMENT ON COLUMN access.application_hash.hash IS 'Unikalny klucz dostępowy aplikacji';

CREATE TABLE access.application_method
(
  id_application_method SERIAL NOT NULL,
  id_application_hash BIGINT NOT NULL,
  class text NOT NULL,
  method text NOT NULL,

  PRIMARY KEY (id_application_method)
} INHERITS (base.common);

COMMENT ON TABLE access.application_method IS 'Metody dostępne dla podanego klucza';
COMMENT ON COLUMN access.application_method.id_application_method IS 'Identyfikator uprawnienia';
COMMENT ON COLUMN access.application_method.id_application_hash IS 'Identyfikator hash''a';
COMMENT ON COLUMN access.application_method.class IS 'Pełna nazwa klasy';
COMMENT ON COLUMN access.application_method.method IS 'Nazwa metody do której dajemy dostęp';

CREATE TABLE api.response
(
	id_response SERIAL,
	content TEXT,
	error_type TEXT,
	error_code TEXT,
	eror_message TEXT,
	error_stacktrace TEXT

	PRIMARY KEY (id_response)
} INHERITS (base.common);
COMMENT ON TABLE api.response IS 'Odpowiedzi z systemu';
COMMENT ON COLUMN api.response.id_response IS 'Identyfikator odpowiedzi';
COMMENT ON COLUMN api.response.added IS 'Czas wygenerowania odpowiedzi';
COMMENT ON COLUMN api.response.error_type IS 'Rodzaj błędu';
COMMENT ON COLUMN api.response.error_code IS 'Numer błędu';
COMMENT ON COLUMN api.response.eror_message IS 'Treść błędu';
COMMENT ON COLUMN api.response.error_stacktrace IS 'Scieżka aplikacji w której wystąpił błąd';

CREATE TABLE api.request
(
	id_request SERIAL NOT NULL,
	content TEXT NOT NULL,
	id_response BIGINT

	PRIMARY KEY (id_request)
} INHERITS (base.common);
COMMENT ON TABLE api.request IS 'Wywołania systemu';
COMMENT ON COLUMN api.request.id_request IS 'Identyfikator żądania';
COMMENT ON COLUMN api.request.content IS 'Pełna treść żądania';
COMMENT ON COLUMN api.request.added IS 'Czas odpytania';
COMMENT ON COLUMN api.request.id_response IS 'Identyfikator odpowiedzi jeżeli nastąpiła';

CREATE OR REPLACE VIEW api.v_request AS
 SELECT response.id_request,
    response.id_response,
    request.added,
    response.added - request.added AS request_time,
    request.content AS request,
    response.content AS response,
    response.error_type,
    response.error_code,
    response.error_message,
    response.error_stacktrace
   FROM api.request
     JOIN api.response USING (id_request);

