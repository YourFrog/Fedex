<?php

namespace SoapBundle\Entity\Api;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 *  Struktura request'u
 *
 * @ORM\Entity
 * @ORM\Table(schema="api", name="request")
 */
class Request
{
    /**
     *  Identyfikator żądania
     *
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_request", type="integer")
     * @ORM\GeneratedValue
     */
    public $id;

    /**
     *  Pełna treść żądania
     *
     * @var string
     *
     * @ORM\Column(name="content", type="string", nullable=false)
     */
    public $content;

    /**
     *  Data dodania
     *
     * @var string
     *
     * @ORM\Column(name="added", type="datetime_immutable", nullable=false)
     */
    public $added;

    /**
     *  Odpowiedź z systemu
     *
     * @var Response
     *
     * @ORM\OneToOne(targetEntity="SoapBundle\Entity\Api\Response", mappedBy="request")
     */
    public $response;

    /**
     *  Konstruktor
     */
    public function __construct()
    {
        $microtime = microtime(true);
        $microtime = number_format($microtime, 4, '.', '');

        $this->added = DateTime::createFromFormat('U.u', $microtime);
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param Response $response
     */
    public function setResponse($response)
    {
        if( $this->response == $response ) {
            return;
        }

        $this->response = $response;
        $response->setRequest($this);
    }
}