<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_u", columns={"id_u"}), @ORM\Index(name="id_trasp", columns={"id_trasp"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_res", type="integer", nullable=false)
     * @ORM\Id
     * @Groups ("post:reservation")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRes;

    /**
     * @var \DateTime
     * @Groups ("post:reservation")
     * @ORM\Column(name="date_deb", type="date", nullable=false)
     */
    private $dateDeb;

    /**
     * @var \DateTime
     * @Groups ("post:reservation")
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var int|null
     * @Groups ("post:reservation")
     * @ORM\Column(name="etat_guide", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $etatGuide = NULL;

    /**
     * @var string
     * @Groups ("post:reservation")
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var \Transport
     *
     * @ORM\ManyToOne(targetEntity="Transport")
     * @Groups ("post:reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_trasp", referencedColumnName="id")
     * })
     */
    private $idTrasp;

    /**
     * @var \User
     * @Groups ("post:reservation")
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_u", referencedColumnName="id_c")
     * })
     */
    private $idU;

    public function getIdRes(): ?int
    {
        return $this->idRes;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setDateDeb(\DateTimeInterface $dateDeb): self
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getEtatGuide(): ?int
    {
        return $this->etatGuide;
    }

    public function setEtatGuide(?int $etatGuide): self
    {
        $this->etatGuide = $etatGuide;

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

    public function getIdTrasp(): ?Transport
    {
        return $this->idTrasp;
    }

    public function setIdTrasp(?Transport $idTrasp): self
    {
        $this->idTrasp = $idTrasp;

        return $this;
    }

    public function getIdU(): ?User
    {
        return $this->idU;
    }

    public function setIdU(?User $idU): self
    {
        $this->idU = $idU;

        return $this;
    }


}
