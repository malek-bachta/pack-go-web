<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RatingRepository::class)
 */
class Rating
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $rate;

    /**
     * @ORM\ManyToOne(targetEntity=Hotels::class, inversedBy="ratings")
     * @ORM\JoinColumn(nullable=true, name="hotel", referencedColumnName="idH")
     */
    private $hotel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getHotel(): ?hotels
    {
        return $this->hotel;
    }

    public function setHotel(?hotels $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }
}
