<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use App\Repository\RaitingRepository;


#[ORM\Entity(repositoryClass: RaitingRepository::class)]
class Raiting
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $raiting = null;

    #[ManyToOne(targetEntity: User::class, inversedBy: 'raitings')]
    #[JoinColumn(name: 'user_id', referencedColumnName: 'id', onDelete: "CASCADE")]
    private ?User $user = null;

    #[ManyToOne(targetEntity: Evenement::class, inversedBy: 'raitings')]
    #[JoinColumn(name: 'evenement_id', referencedColumnName: 'id', onDelete: "CASCADE")]
    private ?Evenement $evenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->getRaiting();
    }

    public function getRaiting(): ?int
    {
        return $this->raiting;
    }

    public function setRaiting(int $raiting): self
    {
        $this->raiting = $raiting;

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

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }

   
    
    

}
