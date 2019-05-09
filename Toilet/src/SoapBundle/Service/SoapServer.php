<?php

namespace SoapBundle\Service;

use SoapBundle\Soap;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 *  Obsługa serwera soap'owego
 *
 * @package SoapBundle\Service
 */
class SoapServer
{
    /**
     *  Obiekt obsługujący żądania
     *
     * @var Soap\EndpointInterface[]
     */
    private $endpoints;

    /**
     * @var Request
     */
    private $request;

    /**
     *  Wersja o którą należy uruchomić
     *
     * @var int
     */
    private $version;

    /**
     * @var RequestLoggerService
     */
    private $logger;

    /**
     *  Konstruktor
     *
     * @param Soap\EndpointInterface[] $endpoints
     * @param RequestLoggerService $logger
     */
    public function __construct(array $endpoints, RequestLoggerService $logger)
    {
        $this->logger = $logger;
        $this->endpoints = $endpoints;
    }

    /**
     * @param int $version
     * @param Request $request
     *
     * @return Response
     */
    public function handle($version, Request $request): Response
    {
        $this->request = $request;
        $this->version = $version;

        if( array_key_exists($this->version, $this->endpoints) == false ) {
            $response = new Response();
            $response->setContent('Unsupported version');

            return $response;
        }

        if( $request->get('wsdl') === null ) {
            return $this->handleRequest();
        }

        return $this->generateWSDL();
    }

    /**
     *  Przechwycenie request'u
     *
     * @return Response
     */
    private function handleRequest()
    {
        $response = $this->getResponse();
        $uri = $this->generateUri();

        try {
            $soapServer = new \Zend\Soap\Server(null, [
                'soap_version' => SOAP_1_2,
                'cache_wsdl' => WSDL_CACHE_NONE,
                'location' => $uri,
                'uri' => $uri,
                'trace' => 1,
                'actor' => $uri
            ]);
            $soapServer->setClass($this->getEndpoint());

            ob_start();

            $soapServer->handle();
            $this->logger->setResponse($soapServer->getResponse());

            $response->setContent(ob_get_clean());
        } catch(\Throwable $e) {
            $this->logger->responseWithError($e);
        } finally {
            $this->logger->setRequest($soapServer->getLastRequest());
            $this->logger->flush();
        }

        return $response;
    }

    /**
     *  Wygenerowanie pliku WSDL
     */
    private function generateWSDL()
    {
        $response = $this->getResponse();
        $response->setContent($this->generateXML());

        return $response;
    }

    /**
     *  Wygenerowanie pliku XML
     *
     * @return string
     */
    private function generateXML(): string
    {
        $discover = new \Zend\Soap\AutoDiscover();
        $discover->setComplexTypeStrategy(new \Zend\Soap\Wsdl\ComplexTypeStrategy\ArrayOfTypeComplex());
        $discover->setClass($this->getEndpoint())
            ->setUri($this->generateUri());

        return $discover->generate()->toXML();
    }

    /**
     *  Utworzenie obiektu odpowiedzi
     *
     * @return Response
     */
    private function getResponse()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=utf8');

        return $response;
    }

    /**
     *  Wygenerowanie adresu url pod którym dostępna jest wsdl'ka
     *
     * @return string
     */
    private function generateUri(): string
    {
        $schema = $this->request->server->get('REQUEST_SCHEME');
        $host = $this->request->server->get('HTTP_HOST');
        $path = $this->request->getRequestUri();
        $path = str_replace('?wsdl', '', $path);

        return $schema . '://' . $host . $path;
    }

    /**
     *  Pobranie aktualnego endpoint'a
     *
     * @return Soap\EndpointInterface
     */
    private function getEndpoint(): Soap\EndpointInterface
    {
        return $this->endpoints[$this->version];
    }
}