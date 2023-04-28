<?php

namespace App\Entity;

use App\Repository\RaitingRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;


#[ORM\Entity(repositoryClass: RaitingRepository::class)]
class Raiting
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\ManyToOne(targetEntity: Evenement::class, inversedBy: 'ratings')]
    #[JoinColumn(name: 'id_evenement', referencedColumnName: 'id', onDelete: "CASCADE")]
    private ?Evenement $id_evenement = null;

    #[ORM\Column]
    private ?int $raiting = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEvenement(): ?Evenement
    {
        return $this->id_evenement;
    }

    public function setIdEvenement(?Evenement $id_evenement): self
    {
        $this->id_evenement = $id_evenement;

        return $this;
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

   
    
    

}
