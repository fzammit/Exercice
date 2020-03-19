<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City
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
     * @ORM\Column(type="string", length=15)
     */
    private $zipcode;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cinema", mappedBy="city", orphanRemoval=true)
     */
    private $cinemas;

    public function __construct()
    {
        $this->cinemas = new ArrayCollection();
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

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return Collection|Cinema[]
     */
    public function getCinemas(): Collection
    {
        return $this->cinemas;
    }

    public function addCinema(Cinema $cinema): self
    {
        if (!$this->cinemas->contains($cinema)) {
            $this->cinemas[] = $cinema;
            $cinema->setCity($this);
        }

        return $this;
    }

    public function removeCinema(Cinema $cinema): self
    {
        if ($this->cinemas->contains($cinema)) {
            $this->cinemas->removeElement($cinema);
            // set the owning side to null (unless already changed)
            if ($cinema->getCity() === $this) {
                $cinema->setCity(null);
            }
        }

        return $this;
    }
}
