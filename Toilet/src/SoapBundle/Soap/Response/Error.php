<?php

namespace SoapBundle\Soap\Response;

/**
 *  Struktura opisująca błąd
 */
class Error
{
    /**
     *  Kod błędu
     *
     * @var string
     */
    public $code = 0;

    /**
     *  Czytelny opis błędu
     *
     * @var string
     */
    public $message = '';

    /**
     *  Szczegóły błędu
     *
     * @var \SoapBundle\Soap\PairValue[]
     */
    public $details;
}