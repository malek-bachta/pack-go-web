<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @Groups("post:read")
     * @ORM\Column(name="id_of", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOf;

    /**
     * @var string
     * @Groups("post:read")
     * @ORM\Column(name="nom_offre", type="string", length=30, nullable=false)
     */
    private $nomOffre;

    /**
     * @var int
     * @Groups("post:read")
     * @ORM\Column(name="budget", type="integer", nullable=false)
     */
    private $budget;


    /**
     * @ORM\OneToMany(targetEntity=Packs::class, mappedBy="offre")
     */
    private $packs;

    /**
     * @param $packs
     */
    public function __construct()
    {
        $this->packs = new ArrayCollection();
    }


    public function getIdOf(): ?int
    {
        return $this->idOf;
    }


    public function setIdOf(int $idOf): void
    {
        $this->idOf = $idOf;
    }


    public function getNomOffre(): ?string
    {
        return $this->nomOffre;
    }


    public function setNomOffre(string $nomOffre): void
    {
        $this->nomOffre = $nomOffre;
    }


    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(int $budget): void
    {
        $this->budget = $budget;
    }


    /**
     * @return Collection<int, Packs>
     */

    public function getPacks(): ArrayCollection
    {
        return $this->packs;
    }

    public function addPack(Packs $pack):self
    {
        if(!$this->packs->contains($pack)){
            $this->packs[] =$pack;
            $pack->setOffre($this);
        }
        return $this;
    }

    public function removePak(Packs $pack):self
    {
        if($this->packs->removeElement($pack)){
            if($pack->getOffre()===$this);
            $pack->setOffre(null);
        }
        return $this;
        }

}
