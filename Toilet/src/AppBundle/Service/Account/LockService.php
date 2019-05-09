<?php

namespace AppBundle\Service\Account;

use AppBundle\Entity;
use AppBundle\Validator;
use AppBundle\Repository;
use AppBundle\Soap\Request;
use Doctrine\ORM\EntityManagerInterface;

/**
 *  Serwis służący do blokowania kont
 *
 * @package AppBundle\Service\Account
 */
class LockService
{
    /**
     * @var Repository\Account\AccountRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     *  Treść błędu
     *
     * @var string[]
     */
    private $errorMessage;

    /**
     *  Konstruktor
     *
     * @param Repository\Account\AccountRepository $repository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        Repository\Account\AccountRepository $repository,
        EntityManagerInterface $entityManager
    ) {
        $this->repository = $repository;
        $this->entityManager = $entityManager;
    }

    /**
     *  Zablokowanie konta
     *
     * @param Request\Account\AccountBlock $data
     *
     * @return bool
     */
    public function lock(Request\Account\AccountBlock $data): bool
    {
        $this->errorMessage = [];

        if( !empty($data->email) ) {
            return $this->lockByEmail($data->email);
        }

        if( !empty($data->login) ) {
            return $this->lockByLogin($data->login);
        }

        $this->errorMessage['reason'] = 'Nie podano adresu email ani loginu';
        return false;
    }

    /**
     *  Blokowanie konta poprzez adres e-mail
     *
     * @param string $email
     *
     * @return bool
     */
    private function lockByEmail(string $email): bool
    {
        /** @var Entity\Account\Account $account */
        $account = $this->repository->findOneBy(['email' => $email]);

        if( $account === null ) {
            $this->errorMessage['email'] = 'Podane konto nie istnieje';
            return false;
        }

        return $this->lockEntity($account);
    }

    /**
     *  Blokowanie konta poprzez login
     *
     * @param string $login
     *
     * @return bool
     */
    private function lockByLogin(string $login): bool
    {
        /** @var Entity\Account\Account $account */
        $account = $this->repository->findOneBy(['login' => $login]);

        if( $account === null ) {
            $this->errorMessage['login'] = 'Podane konto nie istnieje';
            return false;
        }

        return $this->lockEntity($account);
    }

    /**
     *  Zablokowanie konkretnej encji
     *
     * @param Entity\Account\Account $account
     *
     * @return bool
     */
    private function lockEntity(Entity\Account\Account $account): bool
    {
        if( $account->getStatus() === Entity\Account\Account::STATUS_LOCK ) {
            $this->errorMessage['reason'] = 'Konto jest już zablokowane';
            return false;
        }

        $account->setStatus(Entity\Account\Account::STATUS_LOCK);

        $this->entityManager->persist($account);
        $this->entityManager->flush();

        return true;
    }

    /**
     *  Pobranie błędów z blokowania konta
     *
     * @return string[]
     */
    public function getErrors(): array
    {
        return $this->errorMessage;
    }
}