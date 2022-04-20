<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_c", type="integer", nullable=false)
     */
    private $telC;

    /**
     * @var int
     *
     * @ORM\Column(name="age_c", type="integer", nullable=false)
     */
    private $ageC;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_c", type="string", length=30, nullable=false)
     */
    private $nomC;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_c", type="string", length=30, nullable=false)
     */
    private $prenomC;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_c", type="string", length=255, nullable=false)
     */
    private $mdpC;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_c", type="string", length=30, nullable=false)
     */
    private $mailC;

    /**
     * @var int
     *
     * @ORM\Column(name="num_pass", type="integer", nullable=false)
     */
    private $numPass;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="json", nullable=false)
     */
    private $roles;


}
