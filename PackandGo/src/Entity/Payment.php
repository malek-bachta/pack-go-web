<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity
 */
class Payment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_p", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idP;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="somme", type="float", precision=10, scale=0, nullable=false)
     */
    private $somme;

    /**
     * @var \Reservationh
     *
     * @ORM\ManyToOne(targetEntity="Reservationh")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reserv", referencedColumnName="idreh")
     * })
     */
    private $idReservation;



    public function getIdP(): ?int
    {
        return $this->idP;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSomme(): ?float
    {
        return $this->somme;
    }

    public function setSomme(float $somme): self
    {
        $this->somme = $somme;

        return $this;
    }


    public function getIdReservation(): ?Reservationh
    {
        return $this->idReservation;
    }


    public function setIdReservation(?Reservationh $idReservation): void
    {
        $this->idReservation = $idReservation;
    }









}
