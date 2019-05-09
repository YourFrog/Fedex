<?php

namespace SoapBundle\Entity\Api;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 *  Struktura odpowiedzi
 *
 * @ORM\Entity
 * @ORM\Table(schema="api", name="response")
 */
class Response
{
    /**
     *  Identyfikator żądania
     *
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_response", type="integer")
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
     *  Żądanie do którego przypisana jest odpowiedź
     *
     * @var Request
     *
     * @ORM\OneToOne(targetEntity="SoapBundle\Entity\Api\Request", inversedBy="response")
     * @ORM\JoinColumn(name="id_request", referencedColumnName="id_request")
     */
    private $request;

    /**
     *  Typ błędu
     *
     * @var string
     *
     * @ORM\Column(name="error_type", type="string", nullable=true)
     */
    private $errorType;

    /**
     *  Kod błędu
     *
     * @var string
     *
     * @ORM\Column(name="error_code", type="string", nullable=true)

     */
    private $errorCode;

    /**
     *  Wiadomość niesiona z błędem
     *
     * @var string
     *
     * @ORM\Column(name="error_message", type="string", nullable=true)

     */
    private $errorMessage;

    /**
     *  Trace z błędu
     *
     * @var string
     *
     * @ORM\Column(name="error_stacktrace", type="string", nullable=true)

     */
    private $errorStacktrace;

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
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param Request $request
     */
    public function setRequest($request)
    {
        if( $this->request == $request ) {
            return;
        }

        $this->request = $request;
        $request->setResponse($this);
    }

    /**
     * @param string $errorType
     */
    public function setErrorType($errorType)
    {
        $this->errorType = $errorType;
    }

    /**
     * @param string $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @param string $errorStacktrace
     */
    public function setErrorStacktrace($errorStacktrace)
    {
        $this->errorStacktrace = $errorStacktrace;
    }
}