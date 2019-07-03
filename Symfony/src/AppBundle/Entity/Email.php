<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WhiteOctober\SwiftMailerDBBundle\EmailInterface;

/**
 *  Encja opisująca wiadomość e-mail na kolejce
 *
 * @ORM\Entity
 * @ORM\Table(schema="email", name="queue")
 */
class Email implements EmailInterface
{
    /**
     * @var int
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="environment", type="string", nullable=false)
     */
    private $environment;
    
    public function getEnvironment(): string 
    {
        return $this->environment;
    }

    public function getMessage(): string 
    {
        return json_decode($this->message);   
    }

    public function getStatus(): string 
    {
        return $this->status;
    }

    public function setEnvironment($environment) 
    {
        $this->environment = $environment;
    }

    public function setMessage($message) 
    {
        $this->message = json_encode($message);
    }

    public function setStatus($status) 
    {
        $this->status = $status;
    }
}
