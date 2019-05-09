<?php

namespace AppBundle\Repository\Account;

use Doctrine\ORM\EntityRepository;

/**
 *  Repozytorium obsługujące konta
 */
class AccountRepository extends EntityRepository
{
    /**
     *  Sprawdzenie czy istnieje email
     *
     * @param string $email
     *
     * @return bool
     */
    public function emailExists(string $email): bool
    {
        return $this->findOneBy(['email' => $email]) !== null;
    }

    /**
     *  Sprawdzenie czy istnieje login
     *
     * @param string $login
     *
     * @return bool
     */
    public function loginExists(string $login): bool
    {
        return $this->findOneBy(['login' => $login]) !== null;
    }
}