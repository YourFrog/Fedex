<?php

namespace AppBundle\Service\Account;

use AppBundle\Entity;
use AppBundle\Validator;
use AppBundle\Repository;
use AppBundle\Soap\Request;
use Doctrine\ORM\EntityManagerInterface;

/**
 *  Serwis służący do odblokowywania kont
 *
 * @package AppBundle\Service\Account
 */
class UnlockService
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
     * @param Request\Account\AccountUnlock $data
     *
     * @return bool
     */
    public function unlock(Request\Account\AccountUnlock $data): bool
    {
        $this->errorMessage = [];

        if( !empty($data->email) ) {
            return $this->unlockByEmail($data->email);
        }

        if( !empty($data->login) ) {
            return $this->unlockByLogin($data->login);
        }

        $this->errorMessage['reason'] = 'Nie podano adresu email ani loginu';
        return false;
    }

    /**
     *  Odblokowanie konta poprzez adres e-mail
     *
     * @param string $email
     *
     * @return bool
     */
    private function unlockByEmail(string $email): bool
    {
        /** @var Entity\Account\Account $account */
        $account = $this->repository->findOneBy(['email' => $email]);

        if( $account === null ) {
            $this->errorMessage['email'] = 'Podane konto nie istnieje';
            return false;
        }

        return $this->unlockEntity($account);
    }

    /**
     *  Odblokowanie konta poprzez login
     *
     * @param string $login
     *
     * @return bool
     */
    private function unlockByLogin(string $login): bool
    {
        /** @var Entity\Account\Account $account */
        $account = $this->repository->findOneBy(['login' => $login]);

        if( $account === null ) {
            $this->errorMessage['login'] = 'Podane konto nie istnieje';
            return false;
        }

        return $this->unlockEntity($account);
    }

    /**
     *  Odblokowanie konkretnej encji
     *
     * @param Entity\Account\Account $account
     *
     * @return bool
     */
    private function unlockEntity(Entity\Account\Account $account): bool
    {
        if( $account->getStatus() !== Entity\Account\Account::STATUS_LOCK ) {
            $this->errorMessage['reason'] = 'Konto nie jest zablokowane';
            return false;
        }

        $account->setStatus(Entity\Account\Account::STATUS_ACTIVE);
        $account->setLoginAttempts(0);

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