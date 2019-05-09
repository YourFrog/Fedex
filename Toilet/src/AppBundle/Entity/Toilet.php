<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="toilet")
 */
class Toilet
{
    /**
     *  Identyfikator aplikacji
     *
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="stan", type="string", nullable=false)
     */
    private $stan;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_of_light", type="datetime", nullable=false)
     */
    private $dateOfLight;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="android_hash", type="string", nullable=false)
     */
    private $androidHash;

    /**
     *  Lista rezerwacji
     *
     * @var ToiletReservation
     *
     * @ORM\OneToMany(targetEntity="ToiletReservation", mappedBy="toilet")
     * @ORM\OrderBy({"added" = "ASC"})
     */
    private $reservation;

    /**
     * Toilet constructor.
     */
    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return ToiletReservation
     */
    public function getReservations()
    {
        return $this->reservation;
    }

    /**
     * @return string
     */
    public function getStan()
    {
        return $this->stan;
    }

    /**
     * @param string $stan
     */
    public function setStan($stan)
    {
        $this->stan = $stan;
    }

    /**
     * @return DateTime
     */
    public function getDateOfLight()
    {
        return $this->dateOfLight;
    }

    /**
     * @param DateTime $dateOfLight
     */
    public function setDateOfLight($dateOfLight)
    {
        $this->dateOfLight = $dateOfLight;
    }

    /**
     * @return DateTime
     */
    public function getAndroidHash()
    {
        return $this->androidHash;
    }
}