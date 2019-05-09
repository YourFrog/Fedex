<?php

namespace SoapBundle\Service;

use SoapBundle\Entity;
use SoapBundle\Model\AccessRepository;
use SoapBundle\Resource;
use SoapBundle\Soap\Request\Credentials;

/**
 *  Serwis broniący dostępu do zasobów soap'owych
 */
class AccessGuard
{
    /**
     *  Manager obsługujący encje
     *
     * @var AccessRepository
     */
    private $repository;

    /**
     *  Konstruktor
     *
     * @param AccessRepository $repository
     */
    public function __construct(AccessRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     *  Sprawdzenie czy podane dane autoryzujące zezwalają na dostęp do zasobu
     *
     * @param Credentials $credentials
     * @param Resource $resource
     *
     * @return bool
     */
    public function isAllow(Credentials $credentials, Resource $resource): bool
    {
        try {
            return $this->repository->isAllow($credentials, $resource);
        } catch(\Exception $e) {

            return false;
        }
    }

}