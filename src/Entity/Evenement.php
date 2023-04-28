<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please enter a title.")]
    #[Assert\Length(min: 5, max: 30, minMessage: "Le titre doit comporter au moins {{ limit }} caractères",    maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères")]
    private ?string $titre = null;


    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Please enter a Content")]
    #[Assert\Length(min: 5, max: 100, minMessage: "La discription doit comporter au moins {{ limit }} caractères",    maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères")]

    private ?string $description = null;

    #[ORM\Column(length: 30)]
    private ?string $Lieu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Please enter a Content")]
    #[Assert\Length(min: 2, max: 100, minMessage: "Le prix doit comporter au moins {{ limit }} caractères",    maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères")]

    private ?int $prix = null;


    #[ORM\ManyToOne(inversedBy: 'evenements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $categorie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $archive = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->Lieu;
    }

    public function setLieu(string $Lieu): self
    {
        $this->Lieu = $Lieu;

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

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
    public function __toString() {
        return $this->getId();
    }
 
    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

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
}
