<?php

namespace AppBundle\Soap\Response;

use SoapBundle\Soap\BaseResponse;

/**
 *  Struktura odpowiedzi true / false
 *
 * @package AppBundle\Soap\Response
 */
class BooleanResponse extends BaseResponse
{
    /**
     *  Zwracana wartość
     *
     * @var boolean
     */
    public $value;
}