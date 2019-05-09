<?php

namespace SoapBundle\Soap;

use SoapBundle;

/**
 *  Domyślna klasa obsługująca odpowiedzi z systemu. UWAGA należy każdorazowo zdefiniować parametr "response" !!
 */
abstract class BaseResponse
{
    /**
     *  Wartość "OK" w przypadku powodzenia bądź "ERROR" w przypadku błędu
     *
     * @var string
     */
    public $status = 'ERROR';

    /**
     *  Struktura zawierająca informacje o błędzie w przypadku niepowodzenia
     *
     * @var SoapBundle\Soap\Response\Error
     */
    public $error;

    /**
     *  Ustawia odpowiedź jako prawidłową
     */
    public function setSuccess()
    {
        $this->status = 'OK';
    }

    /**
     *  Ustawia odpowiedź jako błędną
     *
     * @param SoapBundle\Soap\Response\Error $error
     */
    public function setError(SoapBundle\Soap\Response\Error $error)
    {
        $this->status = 'ERROR';
        $this->error = $error;
    }
}