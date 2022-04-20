<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 *
 * @ORM\Table(name="services", indexes={@ORM\Index(name="IDX_7332E169EDD61FE9", columns={"id_hotel"})})
 * @ORM\Entity
 */
class Services
{
    /**
     * @var int
     *
     * @ORM\Column(name="idS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ids;

    /**
     * @var string
     *
     * @ORM\Column(name="formule", type="string", length=50, nullable=false)
     */
    private $formule;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sejours", type="string", length=50, nullable=true)
     */
    private $sejours;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=50, nullable=false)
     */
    private $activite;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    /**
     * @var \Hotels
     *
     * @ORM\ManyToOne(targetEntity="Hotels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hotel", referencedColumnName="idH")
     * })
     */
    private $idHotel;


}
