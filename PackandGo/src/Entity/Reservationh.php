<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservationh
 *
 * @ORM\Table(name="reservationh", indexes={@ORM\Index(name="idu", columns={"idu"}), @ORM\Index(name="idhotel", columns={"idhotel"})})
 * @ORM\Entity
 */
class Reservationh
{
    /**
     * @var int
     *
     * @ORM\Column(name="idreh", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dated", type="date", nullable=false)
     */
    private $dated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datef", type="date", nullable=false)
     */
    private $datef;

    /**
     * @var int
     *
     * @ORM\Column(name="etat_service", type="integer", nullable=false)
     */
    private $etatService;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idu", referencedColumnName="id_c")
     * })
     */
    private $idu;

    /**
     * @var \Hotels
     *
     * @ORM\ManyToOne(targetEntity="Hotels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idhotel", referencedColumnName="idH")
     * })
     */
    private $idhotel;


}
