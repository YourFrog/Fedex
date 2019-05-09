<?php

namespace SoapBundle\Soap;

use Throwable;
use SoapBundle;
use SoapBundle\Soap;
use Zend\Hydrator;

/**
 *  Podstawa serwisów
 *
 * @package SoapBundle\Service\Soap\Endpoint
 */
abstract class AbstractEndpoint implements EndpointInterface
{
    /**
     *  Obiekt sprawdzający możliwość dostępu do wywoływanej funkcji
     *
     * @var SoapBundle\Service\AccessGuard
     */
    private $accessGuard;

    /**
     * @var Hydrator\ObjectProperty
     */
    private $hydrator;

    /**
     *  Konstruktor
     *
     * @param SoapBundle\Service\AccessGuard $accessGuard
     * @param Hydrator\ObjectProperty $hydrator
     */
    public function __construct(
        SoapBundle\Service\AccessGuard $accessGuard,
        Hydrator\ObjectProperty $hydrator
    ) {
        $this->accessGuard = $accessGuard;
        $this->hydrator = $hydrator;
    }

    /**
     * @return Hydrator\ObjectProperty
     */
    protected function getHydrator()
    {
        return $this->hydrator;
    }

    /**
     *  Sprawdzenie czypodane dane dostępowe posiadają uprawnienie do metody
     *
     * @param object $credentials
     * @param string $functionName
     *
     * @return bool
     */
    protected function isAllow($credentials, string $functionName): bool
    {
        /** @var Soap\Request\Credentials $credentials */
        $credentials = $this->hydrator->hydrate((array) $credentials, new Soap\Request\Credentials());

        $className = get_class($this);

        $resource = new SoapBundle\Resource($className, $functionName);

        return $this->accessGuard->isAllow($credentials, $resource);
    }

    /**
     *  Stworzenie odpowidzi z tablicy błędów
     *
     * @param BaseResponse $response
     * @param string $code
     * @param string $message
     * @param array $errors
     */
    protected function createErrorResponseFromArrayOfError(BaseResponse $response, string $code, string $message, array $errors): void
    {
        $error = new Soap\Response\Error();
        $error->code = $code;
        $error->message = $message;
        $error->details = [];

        foreach($errors as $key => $errorMessage) {
            $errorValue = new Soap\PairValue();
            $errorValue->key = $key;
            $errorValue->value = $errorMessage;

            $error->details[] = $errorValue;
        }

        $response->setError($error);
    }

    /**
     *  Stworzenie odpowiedzi z błędu
     *
     * @param BaseResponse $response
     * @param Throwable $e
     */
    protected function createErrorResponseFromException(BaseResponse $response, Throwable $e): void
    {
        $reason = new Soap\PairValue();
        $reason->key = $e->getCode();
        $reason->value = $e->getMessage();

        $error = new Soap\Response\Error();
        $error->code = 'ERROR';
        $error->message = 'INTERNAL_SERVER_ERROR';
        $error->details = [];
        $error->details[] = $reason;

        $response->setError($error);
    }
}