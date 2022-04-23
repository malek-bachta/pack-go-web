<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * Packs
 *
 * @ORM\Table(name="packs")
 * @ORM\Entity
 */
class Packs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pack", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPack;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pack", type="string", length=100, nullable=false)
     */
    private $nomPack;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=500, nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string", length=100, nullable=false)
     */
    private $service;

    /**
     * @var string
     *
     * @ORM\Column(name="guide", type="string", length=100, nullable=false)
     */
    private $guide;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=100, nullable=false)
     */
    private $destination;

    /**
     * @var int
     *
     * @ORM\Column(name="budget_pack", type="integer", nullable=false)
     */
    private $budgetPack;
    /**
     * @ORM\ManyToOne(targetEntity=Offre::class, inversedBy="packs")
     *   * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="offre", referencedColumnName="id_of", nullable=false)
     * })
     */
    private $offre;


    public function getIdPack(): ?int
    {
        return $this->idPack;
    }

    public function setIdPack(int $idPack): void
    {
        $this->idPack = $idPack;
    }


    public function getNomPack(): ?string
    {
        return $this->nomPack;
    }


    public function setNomPack(string $nomPack): void
    {
        $this->nomPack = $nomPack;
    }


    public function getTexte(): ?string
    {
        return $this->texte;
    }


    public function setTexte(string $texte): void
    {
        $this->texte = $texte;
    }

    public function getService(): ?string
    {
        return $this->service;
    }


    public function setService(string $service): void
    {
        $this->service = $service;
    }


    public function getGuide(): ?string
    {
        return $this->guide;
    }


    public function setGuide(string $guide): void
    {
        $this->guide = $guide;
    }


    public function getDestination(): ?string
    {
        return $this->destination;
    }


    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }


    public function getBudgetPack(): ?int
    {
        return $this->budgetPack;
    }


    public function setBudgetPack(int $budgetPack): void
    {
        $this->budgetPack = $budgetPack;
    }


    public function getOffre(): ?Offre
    {
        return $this->offre;
    }


    public function setOffre(?Offre  $offre): self
    {
        $this->offre = $offre;
        return $this;
    }


}
