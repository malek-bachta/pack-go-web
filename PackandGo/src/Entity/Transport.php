<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\TransportRepository")
 */
class Transport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="nomagence", type="string", length=255, nullable=false)
     */
    private $nomagence;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="duree", type="string", length=255, nullable=false)
     */
    private $duree;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="destination", type="string", length=255, nullable=false)
     */
    private $destination;

    /**
     * @ORM\ManyToOne(targetEntity=Guide::class, inversedBy="transports")
     * @ORM\JoinColumn(nullable=false, name="Guide", referencedColumnName="id")
     */
    private $guide;




    public function getId(): ?int
    {
        return $this->id;
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

    public function getNomagence(): ?string
    {
        return $this->nomagence;
    }

    public function setNomagence(string $nomagence): self
    {
        $this->nomagence = $nomagence;

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

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

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

    public function getGuide(): ?guide
    {
        return $this->guide;
    }

    public function setGuide(?guide $guide): self
    {
        $this->guide = $guide;

        return $this;
    }



}
