<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CinemaRepository")
 */
class Cinema
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="cinemas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $city;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CinemaPicture", mappedBy="cinema", orphanRemoval=true)
     */
    private $cinemaPictures;

    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->cinemaPictures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Collection|CinemaPicture[]
     */
    public function getCinemaPictures(): Collection
    {
        return $this->cinemaPictures;
    }

    public function addCinemaPicture(CinemaPicture $cinemaPicture): self
    {
        if (!$this->cinemaPictures->contains($cinemaPicture)) {
            $this->cinemaPictures[] = $cinemaPicture;
            $cinemaPicture->setCinema($this);
        }

        return $this;
    }

    public function removeCinemaPicture(CinemaPicture $cinemaPicture): self
    {
        if ($this->cinemaPictures->contains($cinemaPicture)) {
            $this->cinemaPictures->removeElement($cinemaPicture);
            // set the owning side to null (unless already changed)
            if ($cinemaPicture->getCinema() === $this) {
                $cinemaPicture->setCinema(null);
            }
        }

        return $this;
    }
}
