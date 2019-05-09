<?php

namespace SoapBundle\Model;

use SoapBundle\Resource;
use SoapBundle\Soap\Request\Credentials;
use Doctrine\DBAL\Driver\Connection;

/**
 *  Repozytorium obsługujące dostępy
 */
class AccessRepository
{
    /**
     *  Połączenie do bazy danych
     *
     * @var Connection
     */
    protected $conn;

    /**
     *  Konstruktor
     *
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    /**
     *  Sprawdzenie dostępu
     *
     * @param Credentials $credentials
     * @param Resource $resource
     *
     * @return boolean
     */
    public function isAllow(Credentials $credentials, Resource $resource): bool
    {

        $query = $this->conn->prepare('
            SELECT
                *
            FROM
                access.application
                JOIN access.application_hash USING (id_application)
                JOIN access.application_method USING (id_application_hash)
            WHERE
                hash = :hash
                AND class = :class
                AND method = :method
            LIMIT 1
        ');

        $query->bindValue('hash', $credentials->hash);
        $query->bindValue('class', $resource->class);
        $query->bindValue('method', $resource->method);

        $query->execute();

        return ($query->rowCount() > 0);
    }
}