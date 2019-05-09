<?php

namespace SoapBundle\Soap;

/**
 *  Struktura opisująca wartości typu "klucz => wartość"
 *
 * @package SoapBundle\Soap
 */
class PairValue
{
    /**
     *  Klucz
     *
     * @var string
     */
    public $key;

    /**
     *  Wartość
     *
     * @var string
     */
    public $value;
}