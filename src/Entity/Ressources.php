<?php

namespace App\Entity;

use App\Repository\RessourcesRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Club; // Import the Club entity

#[ORM\Entity(repositoryClass: RessourcesRepository::class)]
class Ressources
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $estReserve = null;

    #[ORM\ManyToOne(targetEntity: Club::class)] 
    #[ORM\JoinColumn(nullable: false)] 
    private ?Club $club = null; 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function isEstReserve(): ?bool
    {
        return $this->estReserve;
    }

    public function setEstReserve(bool $estReserve): static
    {
        $this->estReserve = $estReserve;

        return $this;
    }

    // Getter and setter for the Club property
    public function getClub(): ?Club
    {
        return $this->club;
    }

    public function setClub(Club $club): static
    {
        $this->club = $club;

        return $this;
    }
}
