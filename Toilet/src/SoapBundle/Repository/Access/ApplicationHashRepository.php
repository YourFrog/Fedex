<?php

namespace SoapBundle\Repository\Access;

use SoapBundle\Exception;
use SoapBundle\Entity;
use SoapBundle\Soap\Request\Credentials;
use Doctrine\ORM\EntityRepository;

/**
 *  Repozytorium obsługujące hashe aplikacji
 */
class ApplicationHashRepository extends EntityRepository
{
    /**
     *  Pobranie aplikacji pasującej do uprawnień
     *
     * @param Credentials $credentials
     *
     * @return Entity\Access\Application
     *
     * @throws Exception\Repository\Access\ApplicationNotFoundException
     * @throws Exception\Repository\Access\ApplicationHashNotFoundException
     */
    public function getApplicationByCredentials(Credentials $credentials): Entity\Access\Application
    {
        /** @var Entity\Access\ApplicationHash $applicationHash */
        $applicationHash = $this->findOneBy(['hash' => $credentials->hash]);

        if( $applicationHash === null ) {
            throw new Exception\Repository\Access\ApplicationHashNotFoundException('Brak aplikacji o podanym hashu');
        }

        $application = $applicationHash->getApplication();

        if( $application === null ) {
            throw new Exception\Repository\Access\ApplicationNotFoundException('Aplikacja nie odnaleziona');
        }

        return $application;
    }
}