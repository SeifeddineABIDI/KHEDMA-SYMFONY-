<?php

namespace App\Entity;

use App\Repository\MetierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MetierRepository::class)]
class Metier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer nom metier')]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    #[Assert\Regex("/^[a-zA-Z]/")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer type metier')]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    #[Assert\Regex("/^[a-zA-Z]/")]
    private ?string $type = null;

    #[ORM\Column(type: Types::TEXT,unique:true)]
    #[Assert\NotBlank(message: 'Entrer description metier')]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    #[Assert\Regex("/^[a-zA-Z]/")]

    private ?string $description = null;

    #[ORM\Column(length: 255,nullable: true)]
    private ?string $image = null;

    #[ORM\Column(nullable: true)]
    private ?bool $archive = null;

    #[ORM\OneToMany(mappedBy: 'Metier', targetEntity: SousMetier::class)]
    private Collection $sousMetiers;

   

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
            $sousMetier->setMetier($this);
        }

        return $this;
    }

    public function removeSousMetier(SousMetier $sousMetier): self
    {
        if ($this->sousMetiers->removeElement($sousMetier)) {
            // set the owning side to null (unless already changed)
            if ($sousMetier->getMetier() === $this) {
                $sousMetier->setMetier(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nom;
    }

  
}
