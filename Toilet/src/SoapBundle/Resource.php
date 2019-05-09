<?php

namespace SoapBundle;

/**
 *  Struktura zasobu
 *
 * @package SoapBundle
 */
class Resource
{
    /**
     *  Klasa w której znajduje się metoda
     *
     * @var string
     */
    public $class;

    /**
     *  Wywoływana metoda
     *
     * @var string
     */
    public $method;

    /**
     *  Konstruktor
     *
     * @param string $class
     * @param string $method
     */
    public function __construct(string $class, string $method)
    {
        $this->class = $class;
        $this->method = $method;
    }


}