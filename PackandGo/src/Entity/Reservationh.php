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
     * @var \Hotels
     *
     * @ORM\ManyToOne(targetEntity="Hotels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idhotel", referencedColumnName="idH")
     * })
     */
    private $idhotel;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idu", referencedColumnName="id_c")
     * })
     */
    private $idu;

    public function getIdreh(): ?int
    {
        return $this->idreh;
    }

    public function getDated(): ?\DateTimeInterface
    {
        return $this->dated;
    }

    public function setDated(\DateTimeInterface $dated): self
    {
        $this->dated = $dated;

        return $this;
    }

    public function getDatef(): ?\DateTimeInterface
    {
        return $this->datef;
    }

    public function setDatef(\DateTimeInterface $datef): self
    {
        $this->datef = $datef;

        return $this;
    }

    public function getEtatService(): ?int
    {
        return $this->etatService;
    }

    public function setEtatService(int $etatService): self
    {
        $this->etatService = $etatService;

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

    public function getIdhotel(): ?Hotels
    {
        return $this->idhotel;
    }

    public function setIdhotel(?Hotels $idhotel): self
    {
        $this->idhotel = $idhotel;

        return $this;
    }

    public function getIdu(): ?User
    {
        return $this->idu;
    }

    public function setIdu(?User $idu): self
    {
        $this->idu = $idu;

        return $this;
    }


}
