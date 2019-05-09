<?php

namespace AppBundle\Soap\Request\Account;

/**
 *  Dane konta które będzie utworzone
 *
 * @package AppBundle
 */
class RegisterRequest
{
    /**
     *  Adres e-mail
     *
     * @var string
     */
    public $email = '';

    /**
     *  Hasło
     *
     * @var string
     */
    public $password = '';

    /**
     *  Login
     *
     * @var string
     */
    public $login = '';
}