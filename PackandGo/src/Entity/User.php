<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 * @ORM\Entity
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_c", type="integer", nullable=false)
     */
    private $telC;

    /**
     * @var int
     *
     * @ORM\Column(name="age_c", type="integer", nullable=false)
     */
    private $ageC;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_c", type="string", length=30, nullable=false)
     */
    private $nomC;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_c", type="string", length=30, nullable=false)
     */
    private $prenomC;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_c", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_c", type="string", length=30, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="num_pass", type="integer", nullable=false)
     */
    private $numPass;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    public function getIdC(): ?int
    {
        return $this->idC;
    }

    public function getTelC(): ?int
    {
        return $this->telC;
    }

    public function setTelC(int $telC): self
    {
        $this->telC = $telC;

        return $this;
    }

    public function getAgeC(): ?int
    {
        return $this->ageC;
    }

    public function setAgeC(int $ageC): self
    {
        $this->ageC = $ageC;

        return $this;
    }

    public function getNomC(): ?string
    {
        return $this->nomC;
    }

    public function setNomC(string $nomC): self
    {
        $this->nomC = $nomC;

        return $this;
    }

    public function getPrenomC(): ?string
    {
        return $this->prenomC;
    }

    public function setPrenomC(string $prenomC): self
    {
        $this->prenomC = $prenomC;

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

    public function getMailC(): ?string
    {
        return $this->mailC;
    }

    public function setMailC(string $mailC): self
    {
        $this->mailC = $mailC;

        return $this;
    }

    public function getNumPass(): ?int
    {
        return $this->numPass;
    }

    public function setNumPass(int $numPass): self
    {
        $this->numPass = $numPass;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }


    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }



    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }
    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

}
