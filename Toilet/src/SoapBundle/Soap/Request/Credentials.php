<?php

namespace SoapBundle\Soap\Request;

/**
 *  Dane uwierzytelniające klienta
 *
 * @package SoapBundle
 */
class Credentials
{
    /**
     *  Hash udostępniony aplikacji w celu jej autoryzacji
     *
     * @var string
     */
    public $hash;
}