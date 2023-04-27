<?php

namespace App\Entity;

use App\Repository\SousMetierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousMetierRepository::class)]
class SousMetier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    private ?string $domaine = null;

    #[ORM\Column(nullable: true)]
    private ?bool $archive = null;

    #[ORM\ManyToOne(inversedBy: 'sousMetiers')]
    private ?Metier $Metier_id = null;

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

    public function getMetierId(): ?Metier
    {
        return $this->Metier_id;
    }

    public function setMetierId(?Metier $Metier_id): self
    {
        $this->Metier_id = $Metier_id;

        return $this;
    }

}
