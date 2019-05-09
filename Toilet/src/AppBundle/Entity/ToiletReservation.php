<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="toilet_reservation")
 */
class ToiletReservation
{
    /**
     *  Toaleta
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Toilet", inversedBy="features")
     * @ORM\JoinColumn(name="id_toilet", referencedColumnName="id")
     */
    private $toilet;

    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="client_hash", type="string", nullable=false)
     */
    private $client_hash;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_of_give", type="datetime", nullable=false)
     */
    private $dateOfGive;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_of_accept", type="datetime", nullable=false)
     */
    private $dateOfAccept;

    /**
     * @param DateTime $dateOfAccept
     */
    public function setDateOfAccept($dateOfAccept)
    {
        $this->dateOfAccept = $dateOfAccept;
    }

    /**
     * @param mixed $toilet
     */
    public function setToilet($toilet)
    {
        $this->toilet = $toilet;
    }

    /**
     * @param string $client_hash
     */
    public function setClientHash($client_hash)
    {
        $this->client_hash = $client_hash;
    }

    /**
     * @param DateTime $added
     */
    public function setAdded($added)
    {
        $this->added = $added;
    }

    /**
     * @return mixed
     */
    public function getToilet()
    {
        return $this->toilet;
    }

    /**
     * @return string
     */
    public function getClientHash()
    {
        return $this->client_hash;
    }

    /**
     * @return DateTime
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @return DateTime
     */
    public function getDateOfGive()
    {
        return $this->dateOfGive;
    }

    /**
     * @param DateTime $dateOfGive
     */
    public function setDateOfGive($dateOfGive)
    {
        $this->dateOfGive = $dateOfGive;
    }

    /**
     * @return DateTime
     */
    public function getDateOfAccept()
    {
        return $this->dateOfAccept;
    }
}