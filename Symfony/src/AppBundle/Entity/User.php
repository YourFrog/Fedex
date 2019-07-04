<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\UserInterface;
use FOS\MessageBundle\Model\ParticipantInterface;

/**
 *  Encja opisująca użytkownika
 *
 * @ORM\Entity
 * @ORM\Table(schema="security", name="app_user")
 */
class User extends BaseUser implements ParticipantInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *  Konstruktor
     */
    public function __construct()
    {
        parent::__construct();

        $this->roles = [UserInterface::ROLE_DEFAULT];
    }
}
