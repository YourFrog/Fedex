<?php

namespace AppBundle\Service\Account;

use AppBundle\Service;
use AppBundle\Entity;
use AppBundle\Repository;
use AppBundle\Soap\Request;
use Doctrine\ORM\EntityManagerInterface;
use SoapBundle\Soap\Request as BaseRequest;

/**
 *  Serwis obsługujący zmianę hasła
 *
 * @package AppBundle\Service\Account
 */
class ChangePasswordService
{
    /**
     * @var Repository\Session\ActiveSessionRepository
     */
    private $sessionRepository;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var Service\Session\IsActiveService
     */
    private $sessionIsExists;

    /**
     *  Konstruktor
     *
     * @param Repository\Session\ActiveSessionRepository $sessionRepository
     * @param EntityManagerInterface $entityManager
     * @param Service\Session\IsActiveService $sessionIsExists
     */
    public function __construct(
        Repository\Session\ActiveSessionRepository $sessionRepository,
        EntityManagerInterface $entityManager,
        Service\Session\IsActiveService $sessionIsExists
    ) {
        $this->sessionRepository = $sessionRepository;
        $this->entityManager = $entityManager;
        $this->sessionIsExists = $sessionIsExists;
    }

    /**
     *  Zmiana hasła będąc zalogowanym
     *
     * @param BaseRequest\Credentials $credentials
     * @param Request\Account\ChangePassword $data
     *
     * @return bool
     */
    public function changePassword(BaseRequest\Credentials $credentials, Request\Account\ChangePassword $data): bool
    {
        /** @var Entity\Session\ActiveSession $sessionEntity */
        $sessionEntity = $this->sessionRepository->findOneBy(['token' => $data->token]);

        if( $sessionEntity === false ) {
            return false;
        }

        $requestIsActive = new Request\Session\IsActive();
        $requestIsActive->token = $data->token;

        if( $this->sessionIsExists->isActive($credentials, $requestIsActive) == false ) {
            return false;
        }

        $accountEntity = $sessionEntity->getAccount();
        $encodedPassword = md5($accountEntity->getSalt() . $data->oldPassword);

        if( strcmp($accountEntity->getPassword(), $encodedPassword) != 0 ) {
            return false;
        }

        $accountEntity->setPassword(md5($accountEntity->getSalt() . $data->newPassword));

        $this->entityManager->persist($accountEntity);
        $this->entityManager->flush();

        return true;
    }
}