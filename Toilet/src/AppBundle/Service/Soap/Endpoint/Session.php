<?php

namespace AppBundle\Service\Soap\Endpoint;

use SoapBundle\Soap\AbstractEndpoint;
use Throwable;
use AppBundle;
use SoapBundle;
use AppBundle\Soap;
use AppBundle\Service;
use Zend\Hydrator;

/**
 *  Obsługa końcówek związanych z sesjami
 *
 * @package AppBundle\Service\Soap\Endpoint
 */
class Session extends AbstractEndpoint
{
    /**
     * @var Service\Session\SignInService
     */
    private $signInService;

    /**
     * @var Service\Session\IsActiveService
     */
    private $sessionIsActiveService;

    /**
     *  Konstruktor
     *
     * @param SoapBundle\Service\AccessGuard $accessGuard
     * @param Service\Session\SignInService $signInService
     * @param Service\Session\IsActiveService $sessionIsActiveService
     */
    public function __construct(
        SoapBundle\Service\AccessGuard $accessGuard,
        Service\Session\SignInService $signInService,
        Service\Session\IsActiveService $sessionIsActiveService
    ) {
        parent::__construct($accessGuard, new Hydrator\ObjectProperty());

        $this->signInService = $signInService;
        $this->sessionIsActiveService = $sessionIsActiveService;
    }

    /**
     *  Logowanie osoby
     *
     * @param SoapBundle\Soap\Request\Credentials $credentials
     * @param AppBundle\Soap\Request\Account\SignIn $request
     *
     * @return AppBundle\Soap\Response\BooleanResponse
     */
    public function signIn($credentials, $request)
    {
        if( !$this->isAllow($credentials, __FUNCTION__) ) {
            return new SoapBundle\Soap\Response\PermissionDenied();
        }

        /** @var Soap\Request\Account\SignIn $request */
        $request = $this->getHydrator()->hydrate((array) $request, new Soap\Request\Account\SignIn());

        /** @var SoapBundle\Soap\Request\Credentials $credentials */
        $credentials = $this->getHydrator()->hydrate((array) $credentials, new SoapBundle\Soap\Request\Credentials());
        $response = new Soap\Response\BooleanResponse();

        try {
            if ($this->signInService->signIn($credentials, $request)) {
                $response->setSuccess();
                $response->response = $this->signInService->getToken();
            } else {
                $errors = $this->signInService->getErrors();
                $this->createErrorResponseFromArrayOfError($response, 'ERROR', 'INVALID_DATA', $errors);
            }
        } catch(Throwable $e) {
             $this->createErrorResponseFromException($response, $e);
        }

        return $response;
    }

    /**
     *  Sprawdzenie czy sesja istnieje
     *
     * @param SoapBundle\Soap\Request\Credentials $credentials
     * @param AppBundle\Soap\Request\Session\IsActive $request
     *
     * @return AppBundle\Soap\Response\BooleanResponse
     */
    public function isActive($credentials, $request)
    {
        if( !$this->isAllow($credentials, __FUNCTION__) ) {
            return new SoapBundle\Soap\Response\PermissionDenied();
        }

        /** @var Soap\Request\Session\IsActive $request */
        $request = $this->getHydrator()->hydrate((array) $request, new Soap\Request\Session\IsActive());

        /** @var SoapBundle\Soap\Request\Credentials $credentials */
        $credentials = $this->getHydrator()->hydrate((array) $credentials, new SoapBundle\Soap\Request\Credentials());
        $response = new Soap\Response\BooleanResponse();

        try {
            $isActive = $this->sessionIsActiveService->isActive($credentials, $request);

            $response->setSuccess();
            $response->value = $isActive;
        } catch(Throwable $e) {
            $this->createErrorResponseFromException($response, $e);
        }

        return $response;
    }
}