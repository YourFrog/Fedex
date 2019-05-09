<?php

namespace SoapBundle\Soap\Response;

use SoapBundle\Soap\BaseResponse;

/**
 *  Błąd informujący o braku dostępu do żądanego zasobu
 *
 * @package SoapBundle\Soap\Response
 */
class PermissionDenied extends BaseResponse
{
    /**
     *  Konstruktor
     */
    public function __construct()
    {
        $error = new Error();
        $error->code = 'ERROR_403';
        $error->message = 'Permission denied';

        $this->status = 'ERROR';
        $this->error = $error;
    }
}