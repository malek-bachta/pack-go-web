<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass="App\Repository\HotelsRepository")
 * @UniqueEntity(
 *     fields={"email"},
 *     message="cette adresse email est déja prise")
 */
class Hotels
{
    /**
     * @var int
     *
     * @ORM\Column(name="idH", type="integer", nullable=false)
     * @ORM\Id
     * @Groups("post:hotel")

     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idH;

    /**
     * @var int|null
     * @Groups("post:hotel")
     * @ORM\Column(name="id_contactH", type="integer", nullable=true)
     */
    private $idContacth;

    /**
     * @var string
     * @Groups("post:hotel")
     * @Assert\NotBlank(message="Hotel nom est obligatoire")
     * @ORM\Column(name="nomH", type="string", length=255, nullable=false)
     */
    private $nomh;

    /**
     * @var string
     * @Groups("post:hotel")
     * @Assert\NotBlank(message="categorie est obligatoire")
     * @ORM\Column(name="categorie", type="string", length=24, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     * @Groups("post:hotel")
     * @Assert\NotBlank(message="adresse est obligatoire")
     * @ORM\Column(name="adresse", type="string", length=34, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     * @Groups("post:hotel")
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\Email(message="Type invalide")
     * @Assert\NotBlank(message="Email est obligatoire")
     */
    private $email;

    /**
     * @var int

     * @Groups("post:hotel")
     * @ORM\Column(name="telH", type="integer", nullable=false)
     */
    private $telh;

    /**
     * @var string
     * @Groups("post:hotel")
     * @Assert\NotBlank
     * @ORM\Column(name="equipement", type="string", length=255, nullable=false)
     */
    private $equipement;

    /**
     * @var string|null
     * @Groups("post:hotel")
     * @Assert\NotBlank
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=Services::class, inversedBy="hotels")

     * @ORM\JoinColumn(nullable=false, name="Service", referencedColumnName="idS")
     */
    private $service;

    /**
     * @ORM\OneToMany(targetEntity=Rating::class, mappedBy="hotel")
     */
    private $ratings;

    public function __construct()
    {
    }







    public function getIdH(): ?int
    {
        return $this->idH;
    }

    public function getIdContacth(): ?int
    {
        return $this->idContacth;
    }

    public function setIdContacth(?int $idContacth): self
    {
        $this->idContacth = $idContacth;

        return $this;
    }

    public function getNomh(): ?string
    {
        return $this->nomh;
    }

    public function setNomh(string $nomh): self
    {
        $this->nomh = $nomh;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelh(): ?int
    {
        return $this->telh;
    }

    public function setTelh(int $telh): self
    {
        $this->telh = $telh;

        return $this;
    }

    public function getEquipement(): ?string
    {
        return $this->equipement;
    }

    public function setEquipement(string $equipement): self
    {
        $this->equipement = $equipement;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getService(): ?Services
    {
        return $this->service;
    }

    public function setService(?Services $service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return Collection<int, Rating>
     */
  /* public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function addRating(Rating $rating): self
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings[] = $rating;
            $rating->setHotel($this);
        }

        return $this;
    }

    public function removeRating(Rating $rating): self
    {
        if ($this->ratings->removeElement($rating)) {
            // set the owning side to null (unless already changed)
            if ($rating->getHotel() === $this) {
                $rating->setHotel(null);
            }
        }

        return $this;
    }



*/




}

