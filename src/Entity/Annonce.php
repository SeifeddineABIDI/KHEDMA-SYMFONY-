<?php

namespace App\Entity;

use App\Entity\Classification;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use App\Repository\AnnonceRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: AnnonceRepository::class)]
class Annonce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("annonces")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups("annonces")]
    #[Assert\NotBlank(message: '*Champ Obligatoire')]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    private ?string $titre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    //#[Groups("annonces")]
    private ?bool $archive = null;

    #[ORM\ManyToOne(inversedBy: 'annonces')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups("annonces")]
    private ?Classification $classification = null;

    #[ManyToOne(targetEntity: User::class, inversedBy: 'annonces')]
    #[JoinColumn(name: 'user_id', referencedColumnName: 'id', onDelete: "CASCADE")]
    #[Groups("annonces")]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function isArchive(): ?bool
    {
        return $this->archive;
    }

    public function setArchive(bool $archive): self
    {
        $this->archive = $archive;

        return $this;
    }

    public function getClassification(): ?classification
    {
        return $this->classification;
    }

    public function setClassification(?classification $classification): self
    {
        $this->classification = $classification;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


    public function __toString()
    {
        return $this->getTitre();
    }
  

}
