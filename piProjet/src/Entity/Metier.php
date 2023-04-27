<?php

namespace App\Entity;

use App\Repository\MetierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MetierRepository::class)]
class Metier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(nullable: true)]
    private ?bool $archive = null;

    #[ORM\OneToMany(mappedBy: 'Metier_id', targetEntity: SousMetier::class)]
    private Collection $sousMetiers;

    #[ORM\ManyToOne(inversedBy: 'metiers')]
    private ?Freelancer $freelancer = null;

    public function __construct()
    {
        $this->sousMetiers = new ArrayCollection();
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function isArchive(): ?bool
    {
        return $this->archive;
    }

    public function setArchive(?bool $archive): self
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * @return Collection<int, SousMetier>
     */
    public function getSousMetiers(): Collection
    {
        return $this->sousMetiers;
    }

    public function addSousMetier(SousMetier $sousMetier): self
    {
        if (!$this->sousMetiers->contains($sousMetier)) {
            $this->sousMetiers->add($sousMetier);
            $sousMetier->setMetierId($this);
        }

        return $this;
    }

    public function removeSousMetier(SousMetier $sousMetier): self
    {
        if ($this->sousMetiers->removeElement($sousMetier)) {
            // set the owning side to null (unless already changed)
            if ($sousMetier->getMetierId() === $this) {
                $sousMetier->setMetierId(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nom;
    }

    public function getFreelancer(): ?Freelancer
    {
        return $this->freelancer;
    }

    public function setFreelancer(?Freelancer $freelancer): self
    {
        $this->freelancer = $freelancer;

        return $this;
    }
}
