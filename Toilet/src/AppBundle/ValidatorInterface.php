<?php

namespace AppBundle;

/**
 *  Opis walidatora
 *
 * @package AppBundle
 */
interface ValidatorInterface
{
    /**
     *  Sprawdzenie poprawności danych
     *
     * @return bool
     */
    public function isValid($data): bool;

    /**
     *  Pole które nie pasowało walidatorowi
     *
     * @return string
     */
    public function getErrorField(): string;

    /**
     *  Zwraca tablice z błędami
     *
     * @return string
     */
    public function getErrorMessage(): string;
}