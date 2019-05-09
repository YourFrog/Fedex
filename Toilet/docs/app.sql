DROP SCHEMA IF EXISTS account, session CASCADE;

CREATE SCHEMA account;
CREATE SCHEMA session;

-------------
-- Struktury danych
-------------
CREATE TABLE account.account
(
  id_account serial NOT NULL,
  email text NOT NULL,
  password character(32) NOT NULL,
  login text NOT NULL,
  salt character(32) NOT NULL,
  id_account_status integer NOT NULL,
  login_attempts integer NOT NULL,
  CONSTRAINT account_pkey PRIMARY KEY (id_account),
  CONSTRAINT account_id_account_status_fkey FOREIGN KEY (id_account_status)
      REFERENCES dictionary.account_status (id_account_status) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT account_email_key UNIQUE (email),
  CONSTRAINT account_login_key UNIQUE (login)
} INHERITS (base.common);

COMMENT ON TABLE account.account IS 'Konta użytkowników';
COMMENT ON COLUMN account.account.email IS 'Adres email';
COMMENT ON COLUMN account.account.password IS 'Zaszyfrowane hasło';
COMMENT ON COLUMN account.account.login IS 'Login';
COMMENT ON COLUMN account.account.salt IS 'Sól do hasła';
COMMENT ON COLUMN account.account.id_account_status IS 'Aktualny status konta';
COMMENT ON COLUMN account.account.login_attempts IS 'Ilość prób logowania';


CREATE TABLE session.active_session
(
  id_active_session serial NOT NULL,
  id_application integer NOT NULL,
  id_account bigint NOT NULL,
  start_time timestamp with time zone NOT NULL,
  token character varying(32) NOT NULL,
  CONSTRAINT active_session_pkey PRIMARY KEY (id_active_session),
  CONSTRAINT active_session_id_account_fkey FOREIGN KEY (id_account)
      REFERENCES account.account (id_account) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT active_session_id_application_fkey FOREIGN KEY (id_application)
      REFERENCES access.application (id_application) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT active_session_id_application_id_account_key UNIQUE (id_application, id_account),
  CONSTRAINT active_session_token_key UNIQUE (token)
} INHERITS (base.common);

COMMENT ON TABLE session.active_session IS 'Aktywne sesje użytkowników';
COMMENT ON COLUMN session.active_session.id_active_session IS 'Identyfikator sesji';
COMMENT ON COLUMN session.active_session.id_application IS 'Identyfikator aplikacji do której należy sesja';
COMMENT ON COLUMN session.active_session.id_account IS 'Identyfikator konta';
COMMENT ON COLUMN session.active_session.start_time IS 'Data rozpoczęcia';
COMMENT ON COLUMN session.active_session.token IS 'Unikalny identyfikator sesji';


-------------
-- Triggery
-------------
CREATE TRIGGER historyNewElement BEFORE INSERT ON account.account EXECUTE PROCEDURE history.newElement();

-------------
-- Dane aplikacji
-------------
-- Aplikacje posiadające dostęp
INSERT INTO access.application(name) VALUES ('idler');
INSERT INTO access.application_hash(hash) VALUES ('unique_hash');

INSERT INTO access.application_method (id_application_hash, class, method) VALUES
(1, 'AppBundle\Service\Soap\Endpoint\Account', 'register'),
(1, 'AppBundle\Service\Soap\Endpoint\Account', 'lock'),
(1, 'AppBundle\Service\Soap\Endpoint\Account', 'unlock'),
(1, 'AppBundle\Service\Soap\Endpoint\Account', 'changePassword'),
(1, 'AppBundle\Service\Soap\Endpoint\Session', 'signIn'),
(1, 'AppBundle\Service\Soap\Endpoint\Session', 'isActive');

-- Stany konta
INSERT INTO dictionary.account_status (id_account_status, name) VALUES(1, 'new'), (2, 'block'), (3, 'active');


-- Konto
INSERT INTO account.account (email, password, login, salt, id_account_status, login_attempts) VALUES
('stedi2@o2.pl', 'a69ecf0cabdbc5627f5b05dc1dfb5973', 'YourFrog', 'aedbf49220b0232b2ec57157ab65fb6d', 1, 0);