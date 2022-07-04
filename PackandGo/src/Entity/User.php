<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
* @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     * @ORM\Id
     * @Groups ("post:users","post:reservationh","post:reservation")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var int
     * @Assert\NotBlank
     * @Groups ("post:users")
     * @ORM\Column(name="tel_c", type="integer", nullable=false)
     */
    private $telC;

    /**
     * @var int
     *
     * @Assert\Range(
     *      min = 18,
     *      notInRangeMessage = "You must be older then {{ min }}",
     * )
     * @Groups ("post:users")
     * @ORM\Column(name="age_c", type="integer", nullable=false)
     */
    private $ageC;

    /**
     * @var string
     * @Assert\NotBlank
     * @Groups ("post:users")
     * @ORM\Column(name="nom_c", type="string", length=30, nullable=false)
     */
    private $nomC;

    /**
     * @var string
     * @Assert\NotBlank
     * @Groups ("post:users")
     * @ORM\Column(name="prenom_c", type="string", length=30, nullable=false)
     */
    private $prenomC;

    /**
     * @var string
     * @Groups ("post:users")
     * @ORM\Column(name="mdp_c", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     * @Assert\NotBlank
     * @Groups ("post:users")
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     *
     * @ORM\Column(name="mail_c", type="string", length=30, nullable=false)
     */
    private $email;

    /**
     * @var int
     *@Assert\NotBlank
     * @Groups ("post:users")
     * @ORM\Column(name="num_pass", type="integer", nullable=false)
     */
    private $numPass;

    /**
     * @Groups ("post:users")
     * @ORM\Column(type="json")
     */
    private $roles = [];

    public function getIdC(): ?int
    {
        return $this->idC;
    }

    /**
     * @Groups ("post:users")
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->isActive;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
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
