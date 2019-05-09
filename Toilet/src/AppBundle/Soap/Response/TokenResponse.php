<?php

namespace AppBundle\Soap\Response;

use SoapBundle\Soap\BaseResponse;

/**
 *  Struktura odpowiedzi zwracająca token
 *
 * @package AppBundle\Soap\Response
 */
class TokenResponse extends BaseResponse
{
    /**
     *  Token
     *
     * @var string
     */
    public $token;
}