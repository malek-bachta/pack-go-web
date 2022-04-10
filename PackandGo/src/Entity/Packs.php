<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var int|null
     *
     * @ORM\Column(name="budget_pack", type="integer", nullable=true)
     */
    private $budgetPack;

    public function getIdPack(): ?int
    {
        return $this->idPack;
    }

    public function getNomPack(): ?string
    {
        return $this->nomPack;
    }

    public function setNomPack(string $nomPack): self
    {
        $this->nomPack = $nomPack;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getGuide(): ?string
    {
        return $this->guide;
    }

    public function setGuide(string $guide): self
    {
        $this->guide = $guide;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getBudgetPack(): ?int
    {
        return $this->budgetPack;
    }

    public function setBudgetPack(?int $budgetPack): self
    {
        $this->budgetPack = $budgetPack;

        return $this;
    }


}
