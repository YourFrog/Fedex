<?php

namespace SoapBundle\Entity\Access;

use SoapBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *  Encja opisująca metode do której jest dostęp z podanego hash'a
 *
 * @ORM\Entity
 * @ORM\Table(schema="access", name="application_method")
 */
class ApplicationMethod
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
     *  Hash który jest właścicielem metody
     *
     * @var Entity\Access\ApplicationHash
     *
     * @ORM\ManyToOne(targetEntity="SoapBundle\Entity\Access\ApplicationHash", inversedBy="methods")
     * @ORM\JoinColumn(name="id_application_hash", referencedColumnName="id_application_hash")
     */
    private $hash;

    /**
     *  Pełna scieżka do klasy
     *
     * @var string
     *
     * @ORM\Column(name="class", type="string", nullable=false)
     */
    private $class;

    /**
     *  Nazwa metody
     *
     * @var string
     *
     * @ORM\Column(name="method", type="string", nullable=false)
     */
    private $method;
}