<?php

namespace AppBundle\Soap\Request\Account;

/**
 *  Struktura opisująca logowanie się
 */
class SignIn
{
    /**
     *  Login użytkownika
     *
     * @var string
     */
    public $login = '';

    /**
     *  Hasło do konta
     *
     * @var string
     */
    public $password = '';
}