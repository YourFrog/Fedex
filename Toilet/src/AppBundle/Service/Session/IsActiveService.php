<?php

namespace AppBundle\Service\Session;

use DateTime;
use SoapBundle\Soap\Request as BaseRequest;
use SoapBundle\Repository as BaseRepository;
use SoapBundle\Entity as BaseEntity;
use AppBundle\Entity;
use AppBundle\Repository;
use AppBundle\Soap\Request;

/**
 *  Serwis służący do weryfikacji istnienia sesji
 */
class IsActiveService
{
    /**
     * @var BaseRepository\Access\ApplicationHashRepository
     */
    private $applicationRepository;

    /**
     * @var Repository\Session\ActiveSessionRepository
     */
    private $sessionRepository;

    /**
     *  Konstruktor
     *
     * @param BaseRepository\Access\ApplicationHashRepository $applicationRepository
     * @param Repository\Session\ActiveSessionRepository $sessionRepository
     */
    public function __construct(
        BaseRepository\Access\ApplicationHashRepository $applicationRepository,
        Repository\Session\ActiveSessionRepository $sessionRepository
    ) {
        $this->applicationRepository = $applicationRepository;
        $this->sessionRepository = $sessionRepository;
    }

    /**
     *  Weryfikacja czy sesja istnieje
     *
     * @param BaseRequest\Credentials $credentials
     * @param Request\Session\IsActive $data
     *
     * @return bool
     */
    public function isActive(BaseRequest\Credentials $credentials, Request\Session\IsActive $data): bool
    {
        /** @var Entity\Session\ActiveSession $sessionEntity */
        $sessionEntity = $this->sessionRepository->findOneBy(['token' => $data->token]);

        if( $sessionEntity === null ) {
            return false;
        }

        /** @var BaseEntity\Access\Application $applicationEntity */
        $applicationEntity = $this->applicationRepository->getApplicationByCredentials($credentials);

        if( $sessionEntity->getApplication()->getId() != $applicationEntity->getId() ) {
            return false;
        }

        $now = new \DateTime();
        $now->sub(new \DateInterval('PT15M'));

        if( $sessionEntity->getStartTime() <= $now ) {
            return false;
        }

        return true;
    }
}