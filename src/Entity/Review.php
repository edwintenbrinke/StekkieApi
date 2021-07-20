<?php

namespace App\Entity;

use App\Entity\Traits\TimestampableTrait;
use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReviewRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Review
{
    use TimestampableTrait;
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="guid")
     */
    private $uuid;

    /**
     * @ORM\Column(type="float")
     */
    private $rating;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_reviews;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $fish_cought = [];

    /**
     * @ORM\ManyToOne(targetEntity=LatLng::class, inversedBy="reviews")
     * @ORM\JoinColumn(nullable=false)
     */
    private $latlng;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getTotalReviews(): ?int
    {
        return $this->total_reviews;
    }

    public function setTotalReviews(int $total_reviews): self
    {
        $this->total_reviews = $total_reviews;

        return $this;
    }

    public function getFishCought(): ?array
    {
        return $this->fish_cought;
    }

    public function setFishCought(?array $fish_cought): self
    {
        $this->fish_cought = $fish_cought;

        return $this;
    }

    public function getLatlng(): ?LatLng
    {
        return $this->latlng;
    }

    public function setLatlng(?LatLng $latlng): self
    {
        $this->latlng = $latlng;

        return $this;
    }
}
