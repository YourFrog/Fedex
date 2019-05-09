<?php

namespace AppBundle\Validator\Account;

use AppBundle\Soap\Request\AccountRegister;
use AppBundle\ValidatorInterface;

/**
 *  Sprawdzenie poprawności długości hasła
 *
 * @package AppBundle\Validator\Account
 */
class PasswordLength implements ValidatorInterface
{
    /**
     *  Minimalna długość
     *
     * @var int
     */
    private $min;

    /**
     *  Maksymalna długość
     *
     * @var int
     */
    private $max;

    /**
     *  Konstruktor
     *
     * @param int $min
     * @param $max
     */
    public function __construct($min, $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * @inheritDoc
     */
    public function isValid($data): bool
    {
        /** @var AccountRegister $data */
        $password = $data->password;
        $length = strlen($password);

        return ($length >= $this->min && $length <= $this->max);
    }

    /**
     * @inheritDoc
     */
    public function getErrorField(): string
    {
        return 'password';
    }

    /**
     * @inheritDoc
     */
    public function getErrorMessage(): string
    {
        return 'Hasło powinno mieć od ' . $this->min . ' do ' . $this->max . ' znaków';
    }
}