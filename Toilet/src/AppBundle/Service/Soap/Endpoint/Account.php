<?php

namespace AppBundle\Service\Soap\Endpoint;

use SoapBundle\Soap\AbstractEndpoint;
use Throwable;
use AppBundle;
use AppBundle\Soap;
use AppBundle\Entity;
use AppBundle\Validator;
use Zend\Hydrator;

use SoapBundle;
use SoapBundle\Soap\Request as BaseRequest;
use SoapBundle\Soap\Response as BaseResponse;
use SoapBundle\Repository as BaseRepository;
use SoapBundle\Entity as BaseEntity;
use SoapBundle\Service as BaseService;

/**
 *  Obsługa kont
 */
class Account extends AbstractEndpoint
{
    /**
     * @var AppBundle\Service\Account\RegisterService
     */
    private $registerService;

    /**
     * @var AppBundle\Service\Account\LockService
     */
    private $lockService;

    /**
     * @var AppBundle\Service\Account\UnlockService
     */
    private $unlockService;

    /**
     * @var AppBundle\Service\Account\ChangePasswordService
     */
    private $changePasswordService;

    /**
     *  Konstruktor
     *
     * @param BaseService\AccessGuard $accessGuard
     * @param AppBundle\Service\Account\RegisterService $registerService
     * @param AppBundle\Service\Account\LockService $lockService
     * @param AppBundle\Service\Account\UnlockService $unlockService
     * @param AppBundle\Service\Account\ChangePasswordService $changePasswordService
     */
    public function __construct(
        BaseService\AccessGuard $accessGuard,
        AppBundle\Service\Account\RegisterService $registerService,
        AppBundle\Service\Account\LockService $lockService,
        AppBundle\Service\Account\UnlockService $unlockService,
        AppBundle\Service\Account\ChangePasswordService $changePasswordService
    ) {
        parent::__construct($accessGuard, new Hydrator\ObjectProperty());

        $this->registerService = $registerService;
        $this->lockService = $lockService;
        $this->unlockService = $unlockService;
        $this->changePasswordService = $changePasswordService;
    }

    /**
     *  Zmiana hasła dla osoby zalogowanej
     *
     * @param SoapBundle\Soap\Request\Credentials $credentials
     * @param AppBundle\Soap\Request\Account\ChangePassword $request
     *
     * @return AppBundle\Soap\Response\BooleanResponse
     */
    public function changePassword($credentials, $request)
    {
        if( !$this->isAllow($credentials, __FUNCTION__) ) {
            return new BaseResponse\PermissionDenied();
        }

        /** @var Soap\Request\Account\ChangePassword $request */
        $request = $this->getHydrator()->hydrate((array) $request, new Soap\Request\Account\ChangePassword());

        /** @var BaseRequest\Credentials $credentials */
        $credentials = $this->getHydrator()->hydrate((array) $credentials, new BaseRequest\Credentials());
        $response = new Soap\Response\BooleanResponse();

        try {
            $isActive = $this->changePasswordService->changePassword($credentials, $request);

            $response->setSuccess();
            $response->value = $isActive;
        } catch(Throwable $e) {
            $this->createErrorResponseFromException($response, $e);
        }

        return $response;
    }

    /**
     *  Zarejestrowanie nowego konta
     *
     * @param SoapBundle\Soap\Request\Credentials $credentials
     * @param AppBundle\Soap\Request\Account\RegisterRequest $request
     *
     * @return AppBundle\Soap\Response\TokenResponse
     */
    public function register($credentials, $request)
    {
        if( !$this->isAllow($credentials, __FUNCTION__) ) {
            return new BaseResponse\PermissionDenied();
        }

        /** @var Soap\Request\Account\RegisterRequest $request */
        $request = $this->getHydrator()->hydrate((array) $request, new Soap\Request\Account\RegisterRequest());
        $response = new Soap\Response\TokenResponse();

        try {
            if ($this->registerService->register($request)) {
                $response->setSuccess();
                $response->token = $this->registerService->getToken();
            } else {
                $errors = $this->registerService->getErrors();
                $this->createErrorResponseFromArrayOfError($response, 'ERROR', 'INVALID_DATA', $errors);
            }
        } catch(Throwable $e) {
            $this->createErrorResponseFromException($response, $e);
        }

        return $response;
    }

    /**
     *  Zablokowanie konta
     *
     * @param SoapBundle\Soap\Request\Credentials $credentials
     * @param AppBundle\Soap\Request\Account\AccountBlock $request
     *
     * @return AppBundle\Soap\Response\BooleanResponse
     */
    public function lock($credentials, $request)
    {
        if( !$this->isAllow($credentials, __FUNCTION__) ) {
            return new BaseResponse\PermissionDenied();
        }

        /** @var Soap\Request\Account\AccountBlock $request */
        $request = $this->getHydrator()->hydrate((array) $request, new Soap\Request\Account\AccountBlock());
        $response = new Soap\Response\BooleanResponse();

        try {
            if( $this->lockService->lock($request) ) {
                $response->setSuccess();
                $response->value = true;
            } else {
                $errors = $this->lockService->getErrors();
                $this->createErrorResponseFromArrayOfError($response, 'ERROR', 'INVALID_DATA', $errors);
            }
        } catch(Throwable $e) {
            $this->createErrorResponseFromException($response, $e);
        }

        return $response;
    }

    /**
     *  Odblokowanie konta
     *
     * @param SoapBundle\Soap\Request\Credentials $credentials
     * @param AppBundle\Soap\Request\Account\AccountUnlock $request
     *
     * @return AppBundle\Soap\Response\BooleanResponse
     */
    public function unlock($credentials, $request)
    {
        if( !$this->isAllow($credentials, __FUNCTION__) ) {
            return new BaseResponse\PermissionDenied();
        }

        /** @var Soap\Request\Account\AccountUnlock $request */
        $request = $this->getHydrator()->hydrate((array) $request, new Soap\Request\Account\AccountUnlock());
        $response = new Soap\Response\BooleanResponse();

        try {
            if( $this->unlockService->unlock($request) ) {
                $response->setSuccess();
                $response->value = true;
            } else {
                $errors = $this->unlockService->getErrors();
                $this->createErrorResponseFromArrayOfError($response, 'ERROR', 'INVALID_DATA', $errors);
            }
        } catch(Throwable $e) {
            $this->createErrorResponseFromException($response, $e);
        }

        return $response;
    }
}