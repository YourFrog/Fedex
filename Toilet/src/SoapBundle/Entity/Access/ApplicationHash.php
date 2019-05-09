<?php

namespace SoapBundle\Entity\Access;

use SoapBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *  Encja opisująca hashe dostępowe dla aplikacji
 *
 * @ORM\Entity(repositoryClass="SoapBundle\Repository\Access\ApplicationHashRepository")
 * @ORM\Table(schema="access", name="application_hash")
 */
class ApplicationHash
{
    /**
     *  Identyfikator aplikacji
     *
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_application", type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     *  Hash aplikacji
     *
     * @var string
     *
     * @ORM\Column(name="hash", type="string", nullable=false)
     */
    private $hash;

    /**
     *  Aplikacja do której należy hash
     *
     * @var Entity\Access\Application
     *
     * @ORM\ManyToOne(targetEntity="SoapBundle\Entity\Access\Application", inversedBy="hashes")
     * @ORM\JoinColumn(name="id_application", referencedColumnName="id_application")
     */
    private $application;

    /**
     *  Metody do których posiada dostęp hash
     *
     * @var Entity\Access\ApplicationMethod
     *
     * @ORM\OneToMany(targetEntity="SoapBundle\Entity\Access\ApplicationMethod", mappedBy="hash")
     */
    private $methods;

    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @return ApplicationMethod
     */
    public function getMethods()
    {
        return $this->methods;
    }
}