<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotels
 *
 * @ORM\Table(name="hotels")
 * @ORM\Entity
 */
class Hotels
{
    /**
     * @var int
     *
     * @ORM\Column(name="idH", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idh;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contactH", type="integer", nullable=true)
     */
    private $idContacth;

    /**
     * @var string
     *
     * @ORM\Column(name="nomH", type="string", length=255, nullable=false)
     */
    private $nomh;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=24, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=34, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="telH", type="integer", nullable=false)
     */
    private $telh;

    /**
     * @var string
     *
     * @ORM\Column(name="equipement", type="string", length=255, nullable=false)
     */
    private $equipement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;


}
