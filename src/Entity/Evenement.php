<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
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
    #[Assert\Length(min: 5, max: 300, minMessage: "Le titre doit comporter au moins {{ limit }} caractères",    maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères")]
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


    #[ManyToOne(targetEntity: Categorie::class, inversedBy: 'evenements')]
    #[JoinColumn(name: 'categorie_id', referencedColumnName: 'id', onDelete: "CASCADE")]
    private ?Categorie $categorie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $archive = null;

    #[ORM\OneToMany(mappedBy: 'evenement', targetEntity: Raiting::class)]
    private Collection $ratings;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    public function __construct()
    {
        $this->ratings = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Raiting>
     */
    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function addRating(Raiting $rating): self
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings->add($rating);
            $rating->setEvenement($this);
        }

        return $this;
    }

    public function removeRating(Raiting $rating): self
    {
        if ($this->ratings->removeElement($rating)) {
            // set the owning side to null (unless already changed)
            if ($rating->getEvenement() === $this) {
                $rating->setEvenement(null);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
