<?php

namespace AppBundle\Soap\Request\Account;

/**
 *  Zablokowanie konta
 *
 * @package AppBundle
 */
class AccountBlock
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