<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use App\Repository\SousMetierRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: SousMetierRepository::class)]
class SousMetier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer libelle sous metier')]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    #[Assert\Regex("/^[a-zA-Z]/")]
    private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Entrer domaine sous metier')]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'The name must be at least {{ limit }} characters',
        maxMessage: 'The name cannot exceed {{ limit }} characters'
    )]
    #[Assert\Regex("/^[a-zA-Z]/")]
    private ?string $domaine = null;

    #[ORM\Column(nullable: true)]
    private ?bool $archive = null;

    #[ManyToOne(targetEntity: Metier::class, inversedBy: 'sousMetiers')]
    #[JoinColumn(name: 'metier_id', referencedColumnName: 'id', onDelete: "CASCADE")]
    private ?Metier $Metier = null;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'sousMetiers')]
    private Collection $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(string $domaine): self
    {
        $this->domaine = $domaine;

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

    public function getMetier(): ?Metier
    {
        return $this->Metier;
    }

    public function setMetier(?Metier $Metier): self
    {
        $this->Metier = $Metier;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addSousMetier($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeSousMetier($this);
        }

        return $this;
    }

}
