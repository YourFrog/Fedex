<?php

namespace SoapBundle\Service;

use Throwable;
use SoapBundle\Entity;
use Doctrine\ORM\EntityManagerInterface;

/**
 *  Serwis obsługujący logowanie wywołań usługi
 */
class RequestLoggerService
{
    /**
     * @var Entity\Api\Request
     */
    private $requestEntity;

    /**
     * @var Entity\Api\Response
     */
    private $responseEntity;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     *  Konstruktor
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->requestEntity = new Entity\Api\Request();
        $this->entityManager = $entityManager;
    }

    /**
     *  Ustawienie treści zapytania
     *
     * @param string $content
     */
    public function setRequest(string $content)
    {
        $this->requestEntity->setContent($content);
    }

    /**
     *  Odnotowanie błędu w requeście którego nie udało się zrealizować
     *
     * @param Throwable $e
     */
    public function responseWithError(Throwable $e)
    {
        $this->responseEntity = new Entity\Api\Response;
        $this->responseEntity->setErrorType(get_class($e));
        $this->responseEntity->setErrorCode($e->getCode());
        $this->responseEntity->setErrorMessage($e->getMessage());
        $this->responseEntity->setErrorStacktrace($e->getTraceAsString());
    }

    /**
     *  Odnotowanie prawidłowej odpowiedzi
     *
     * @param string $content
     */
    public function setResponse(string $content)
    {
        $this->responseEntity = new Entity\Api\Response();
        $this->responseEntity->setContent($content);
    }

    /**
     *  Rzucenie danych do bazy danych
     */
    public function flush()
    {
        $this->responseEntity->setRequest($this->requestEntity);

        $this->entityManager->persist($this->requestEntity);
        $this->entityManager->persist($this->responseEntity);
        $this->entityManager->flush();
    }
}