<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HotelsRepository")
 */
class Hotels
{
    /**
     * @var int
     *
     * @ORM\Column(name="idH", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idh;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contactH", type="integer", nullable=true)
     */
    private $idContacth;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="nomH", type="string", length=255, nullable=false)
     */
    private $nomh;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="categorie", type="string", length=24, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="adresse", type="string", length=34, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int

     *
     * @ORM\Column(name="telH", type="integer", nullable=false)
     */
    private $telh;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="equipement", type="string", length=255, nullable=false)
     */
    private $equipement;

    /**
     * @var string|null
     * @Assert\NotBlank
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;




    public function getIdh(): ?int
    {
        return $this->idh;
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




}
