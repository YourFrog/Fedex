<?php

namespace SoapBundle\Entity\Access;

use SoapBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 *  Encja opisująca aplikację
 *
 * @ORM\Entity
 * @ORM\Table(schema="access", name="application")
 */
class Application
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
     *  Nazwa aplikacji
     *
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     *  Hashe dostępowe dla aplikacji
     *
     * @var Entity\Access\ApplicationHash
     *
     * @ORM\OneToMany(targetEntity="SoapBundle\Entity\Access\ApplicationHash", mappedBy="product")
     */
    private $hashes;

    /**
     *  Konstruktor
     */
    public function __construct()
    {
        $this->hashes = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}