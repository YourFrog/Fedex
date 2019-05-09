<?php

namespace AppBundle;

/**
 *  Manager walidatorów
 *
 * @package AppBundle
 */
class ValidationManager
{
    /**
     *  Tablica walidatorów
     *
     * @var ValidatorInterface[]
     */
    private $validators;

    /**
     *  Tablica z błędami
     *
     * @var string[]
     */
    private $errors;

    /**
     *  Konstruktor
     *
     * @param ValidatorInterface[] $validators
     */
    public function __construct(array $validators)
    {
        $this->validators = $validators;
    }

    /**
     *  Sprawdzenie poprawności danych
     *
     * @return bool
     */
    public function isValid($data): bool
    {
        $this->errors = [];

        foreach($this->validators as $validator) {
            if( $validator->isValid($data) === false ) {
                $key = $validator->getErrorField();
                $this->errors[$key] = $validator->getErrorMessage();
            }
        }

        return count($this->errors) == 0;
    }

    /**
     *  Zwraca tablice z błędami
     *
     * @return array
     */
    public function getErrorMessages(): array
    {
        return $this->errors;
    }
}