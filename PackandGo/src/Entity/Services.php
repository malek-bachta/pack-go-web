<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ServicesRepository")
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
     * @Assert\NotBlank
     * @ORM\Column(name="formule", type="string", length=50, nullable=false)
     */
    private $formule;

    /**
     * @var float
     * @Assert\NotBlank
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string|null
     * @Assert\NotBlank
     * @ORM\Column(name="sejours", type="string", length=50, nullable=true)
     */
    private $sejours;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="activite", type="string", length=50, nullable=false)
     */
    private $activite;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity=Hotels::class, mappedBy="service")
     */
    private $hotels;

    public function __construct()
    {
        $this->hotels = new ArrayCollection();
    }




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

    /**
     * @return Collection<int, Hotels>
     */
    public function getHotels(): Collection
    {
        return $this->hotels;
    }

    public function addHotel(Hotels $hotel): self
    {
        if (!$this->hotels->contains($hotel)) {
            $this->hotels[] = $hotel;
            $hotel->setService($this);
        }

        return $this;
    }

    public function removeHotel(Hotels $hotel): self
    {
        if ($this->hotels->removeElement($hotel)) {
            // set the owning side to null (unless already changed)
            if ($hotel->getService() === $this) {
                $hotel->setService(null);
            }
        }

        return $this;
    }








}

