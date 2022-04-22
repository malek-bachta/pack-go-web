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

    /**
     * @return int
     */
    public function getIdOf(): int
    {
        return $this->idOf;
    }

    /**
     * @param int $idOf
     */
    public function setIdOf(int $idOf): void
    {
        $this->idOf = $idOf;
    }

    /**
     * @return string
     */
    public function getNomOffre(): ?string
    {
        return $this->nomOffre;
    }

    /**
     * @param string $nomOffre
     */
    public function setNomOffre(string $nomOffre): void
    {
        $this->nomOffre = $nomOffre;
    }

    /**
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * @param int $budget
     */
    public function setBudget(int $budget): void
    {
        $this->budget = $budget;
    }


}
