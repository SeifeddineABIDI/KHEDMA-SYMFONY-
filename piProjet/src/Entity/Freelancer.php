<?php

namespace App\Entity;

use App\Repository\FreelancerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FreelancerRepository::class)]
class Freelancer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column(length: 255)]
    private ?string $sous_metier = null;

    #[ORM\Column(length: 255)]
    private ?string $metier = null;

    #[ORM\OneToMany(mappedBy: 'freelancer', targetEntity: Metier::class)]
    private Collection $metiers;

    public function __construct()
    {
        $this->metiers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getSousMetier(): ?string
    {
        return $this->sous_metier;
    }

    public function setSousMetier(string $sous_metier): self
    {
        $this->sous_metier = $sous_metier;

        return $this;
    }

    public function getMetier(): ?string
    {
        return $this->metier;
    }

    public function setMetier(string $metier): self
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * @return Collection<int, Metier>
     */
    public function getMetiers(): Collection
    {
        return $this->metiers;
    }

    public function addMetier(Metier $metier): self
    {
        if (!$this->metiers->contains($metier)) {
            $this->metiers->add($metier);
            $metier->setFreelancer($this);
        }

        return $this;
    }

    public function removeMetier(Metier $metier): self
    {
        if ($this->metiers->removeElement($metier)) {
            // set the owning side to null (unless already changed)
            if ($metier->getFreelancer() === $this) {
                $metier->setFreelancer(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->localisation;
    }
}
