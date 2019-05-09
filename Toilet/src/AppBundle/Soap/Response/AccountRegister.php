<?php

namespace AppBundle\Soap\Response;

use SoapBundle\Soap\BaseResponse;

/**
 *  Struktura odpowiedzi dla metody rejestrującej klienta
 *
 * @package AppBundle\Soap\Response
 */
class AccountRegister extends BaseResponse
{
    /**
     *  Struktura zawierająca odpowiedź w przypadku powodzenia
     *
     * @var string
     */
    public $response;
}