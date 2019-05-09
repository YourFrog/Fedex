<?php

namespace AppBundle\Soap\Request\Account;

/**
 *  Odblokowanie konta
 *
 * @package AppBundle
 */
class AccountUnlock
{
    /**
     *  Adres e-mail
     *
     * @var string
     */
    public $email = null;

    /**
     *  Login
     *
     * @var string
     */
    public $login = null;
}