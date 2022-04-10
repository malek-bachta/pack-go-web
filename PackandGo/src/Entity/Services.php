<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 *
 * @ORM\Table(name="services", indexes={@ORM\Index(name="fk_contact", columns={"id_hotel"})})
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
     * @var int|null
     *
     * @ORM\Column(name="id_hotel", type="integer", nullable=true)
     */
    private $idHotel;

    /**
     * @ORM\ManyToOne(targetEntity=hotels::class, inversedBy="services")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idhotel;

    public function getIds(): ?int
    {
        return $this->ids;
    }

    public function getFormule(): ?string
    {
        return $this->formule;
    }

    public function setFormule(string $formule): self
    {
        $this->formule = $formule;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getSejours(): ?string
    {
        return $this->sejours;
    }

    public function setSejours(?string $sejours): self
    {
        $this->sejours = $sejours;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdHotel(): ?int
    {
        return $this->idHotel;
    }

    public function setIdHotel(?int $idHotel): self
    {
        $this->idHotel = $idHotel;

        return $this;
    }


}
