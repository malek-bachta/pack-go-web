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
     * @ORM\Column(name="idPack", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPack;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPack", type="string", length=100, nullable=false)
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
     * @return int
     */
    public function getIdPack(): ?int
    {
        return $this->idPack;
    }

    /**
     * @param int $idPack
     */
    public function setIdPack(int $idPack): void
    {
        $this->idPack = $idPack;
    }

    /**
     * @return string
     */
    public function getNomPack(): ?string
    {
        return $this->nomPack;
    }

    /**
     * @param string $nomPack
     */
    public function setNomPack(string $nomPack): void
    {
        $this->nomPack = $nomPack;
    }

    /**
     * @return string
     */
    public function getTexte(): ?string
    {
        return $this->texte;
    }

    /**
     * @param string $texte
     */
    public function setTexte(string $texte): void
    {
        $this->texte = $texte;
    }

    /**
     * @return string
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * @param string $service
     */
    public function setService(string $service): void
    {
        $this->service = $service;
    }

    /**
     * @return string
     */
    public function getGuide(): ?string
    {
        return $this->guide;
    }

    /**
     * @param string $guide
     */
    public function setGuide(string $guide): void
    {
        $this->guide = $guide;
    }

    /**
     * @return string
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @return int
     */
    public function getBudgetPack(): ?int
    {
        return $this->budgetPack;
    }

    /**
     * @param int $budgetPack
     */
    public function setBudgetPack(int $budgetPack): void
    {
        $this->budgetPack = $budgetPack;
    }


}
