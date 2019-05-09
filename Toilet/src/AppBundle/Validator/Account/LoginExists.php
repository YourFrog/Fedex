<?php

namespace AppBundle\Validator\Account;

use AppBundle\Repository;
use AppBundle\Soap\Request\AccountRegister;
use AppBundle\ValidatorInterface;

/**
 *  Sprawdzenie czy adres login istnieje w bazie danych
 */
class LoginExists implements ValidatorInterface
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
        /** @var AccountRegister $data */
        return !$this->repository->loginExists($data->login);
    }

    /**
     * @inheritDoc
     */
    public function getErrorField(): string
    {
        return 'login';
    }

    /**
     * @inheritdoc
     */
    public function getErrorMessage(): string
    {
        return 'Login istnieje w bazie danych';
    }
}