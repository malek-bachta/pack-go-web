<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_of", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOf;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_offre", type="string", length=30, nullable=false)
     */
    private $nomOffre;

    /**
     * @var int
     *
     * @ORM\Column(name="budget", type="integer", nullable=false)
     */
    private $budget;

    public function getIdOf(): ?int
    {
        return $this->idOf;
    }

    public function getNomOffre(): ?string
    {
        return $this->nomOffre;
    }

    public function setNomOffre(string $nomOffre): self
    {
        $this->nomOffre = $nomOffre;

        return $this;
    }

    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(int $budget): self
    {
        $this->budget = $budget;

        return $this;
    }


}
