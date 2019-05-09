<?php

namespace AppBundle\Validator\Account;

use AppBundle\Repository;
use AppBundle\Soap\Request\AccountRegister;
use AppBundle\ValidatorInterface;

/**
 *  Sprawdzenie czy adres e-mail istnieje w bazie danych
 */
class EmailExists implements ValidatorInterface
{
    /**
     *  Repozytorium kont
     *
     * @var Repository\Account\AccountRepository
     */
    private $repository;

    /**
     *  Konstruktor
     *
     * @param Repository\Account\AccountRepository $repository
     */
    public function __construct(Repository\Account\AccountRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @inheritdoc
     */
    public function isValid($data): bool
    {
        /** @var AccountRegister $data  */
        return !$this->repository->emailExists($data->email);
    }

    /**
     * @inheritDoc
     */
    public function getErrorField(): string
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function getErrorMessage(): string
    {
        return 'Adres e-mail istnieje w bazie danych';
    }
}