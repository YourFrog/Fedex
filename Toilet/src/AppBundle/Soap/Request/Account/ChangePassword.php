<?php

namespace AppBundle\Soap\Request\Account;

/**
 *  Struktura zmiany hasła
 *
 * @package AppBundle\Soap\Request\Account
 */
class ChangePassword
{
    /**
     *  Token sesyjny wymagany do identyfikacji sesji użytkownika
     *
     * @var string
     */
    public $token = '';

    /**
     *  Stare hasło
     *
     * @var string
     */
    public $oldPassword = '';

    /**
     *  Nowe hasło
     *
     * @var string
     */
    public $newPassword = '';
}