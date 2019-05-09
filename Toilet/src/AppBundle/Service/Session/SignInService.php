<?php

namespace AppBundle\Service\Session;

use DateTime;
use SoapBundle\Soap\Request as BaseRequest;
use SoapBundle\Repository as BaseRepository;
use SoapBundle\Entity as BaseEntity;
use AppBundle\Entity;
use AppBundle\Repository;
use AppBundle\Soap\Request;
use Doctrine\ORM\EntityManagerInterface;

/**
 *  Obsluga logowania się do systemu
 *
 * @package AppBundle\Service\Account
 */
class SignInService
{
    /**
     * @var Repository\Account\AccountRepository
     */
    private $repository;

    /**
     *  Repozytorium obsługujące aplikacje
     *
     * @var BaseRepository\Access\ApplicationHashRepository
     */
    private $applicationRepository;

    /**
     * @var Repository\Session\ActiveSessionRepository
     */
    private $sessionRepository;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     *  Treść błędu
     *
     * @var string[]
     */
    private $errorMessage = [];

    /**
     * @var Entity\Session\ActiveSession
     */
    private $sessionEntity;

    /**
     *  Konstruktor
     *
     * @param Repository\Account\AccountRepository $repository
     * @param BaseRepository\Access\ApplicationHashRepository $applicationRepository
     * @param Repository\Session\ActiveSessionRepository $sessionRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        Repository\Account\AccountRepository $repository,
        BaseRepository\Access\ApplicationHashRepository $applicationRepository,
        Repository\Session\ActiveSessionRepository $sessionRepository,
        EntityManagerInterface $entityManager
    ) {
        $this->repository = $repository;
        $this->applicationRepository = $applicationRepository;
        $this->sessionRepository = $sessionRepository;

        $this->entityManager = $entityManager;
    }

    /**
     *  Obsługa logowania konta
     *
     * @param BaseRequest\Credentials $credentials
     * @param Request\Account\SignIn $data
     *
     * @return bool
     */
    public function signIn(BaseRequest\Credentials $credentials, Request\Account\SignIn $data): bool
    {
        /** @var Entity\Account\Account $accountEntity */
        $accountEntity = $this->repository->findOneBy(['login' => $data->login]);

        if( $accountEntity === null ) {
            $this->errorMessage['reason'] = 'Błędny login';
            return false;
        }

        if( $accountEntity->getStatus() === Entity\Account\Account::STATUS_LOCK ) {
            $this->errorMessage['reason'] = 'Konto zablokowane';
            return false;
        }

        $encodePassword = md5($accountEntity->getSalt() . $data->password);
        if( strcmp($accountEntity->getPassword(), $encodePassword) !== 0 ) {
            $this->errorMessage['reason'] = 'Niepoprawne hasło';

            // Znamy login i hasło podbijmy więc ilość błędnych logowań
            $accountEntity->setLoginAttempts($accountEntity->getLoginAttempts() + 1);

            // Jeżeli przekroczono 3 błędne próby logowania to zablokujmy konto
            if( $accountEntity->getLoginAttempts() >= 3 ) {
                $accountEntity->setStatus(Entity\Account\Account::STATUS_LOCK);
            }

            $this->entityManager->persist($accountEntity);
            $this->entityManager->flush();
            return false;
        }

        $applicationEntity = $this->applicationRepository->getApplicationByCredentials($credentials);
        $this->sessionEntity = $this->getActiveSession($applicationEntity, $accountEntity);
        $this->sessionEntity->setToken(md5(uniqid()));
        $this->sessionEntity->setStartTime(new DateTime());

        $this->entityManager->persist($this->sessionEntity);
        $this->entityManager->flush();

        return true;
    }

    /**
     *  Pobranie aktywnej sesji z bazy danych
     *
     * @param BaseEntity\Access\Application $application
     * @param Entity\Account\Account $account
     *
     * @return Entity\Session\ActiveSession
     */
    private function getActiveSession(BaseEntity\Access\Application $application, Entity\Account\Account $account): Entity\Session\ActiveSession
    {
        $session = $this->sessionRepository->findOneBy(['application' => $application, 'account' => $account]);

        if( $session === null ) {
            $session = new Entity\Session\ActiveSession();
            $session->setAccount($account);
            $session->setApplication($application);
        }

        return $session;
    }

    /**
     *  Pobranie tokenu służącego do identyfikacji sesji użytkownika
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->sessionEntity->getToken();
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