<?php

namespace AppBundle\Soap\Request\Session;

/**
 *  Request definiujący czy sesja istnieje
 */
class IsActive
{
    /**
     *  Token identyfikujący sesję
     *
     * @var string
     */
    public $token;
}