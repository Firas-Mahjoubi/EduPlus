<?php

namespace App\Entity;

use App\Repository\RessourceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RessourceRepository::class)]
class Ressource
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    #[ORM\Column(length: 255)]
    private ?string $nomRessource = null;

    #[ORM\Column(nullable: true)]
    private ?int $montant = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantite = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionRessource = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateCreationRessource = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image;
    

    // Getters et setters

    public function __construct()
{
    $this->dateCreationRessource = new \DateTime(); // Set the default value to the current date/time
}

// Getter and setter
public function getDateCreationRessource(): ?\DateTimeInterface
{
    return $this->dateCreationRessource;
}

public function setDateCreationRessource(\DateTimeInterface $dateCreationRessource): static
{
    $this->dateCreationRessource = $dateCreationRessource;
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function getNomRessource(): ?string
    {
        return $this->nomRessource;
    }

    public function setNomRessource(string $nomRessource): static
    {
        $this->nomRessource = $nomRessource;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(?int $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDescriptionRessource(): ?string
    {
        return $this->descriptionRessource;
    }

    public function setDescriptionRessource(string $descriptionRessource): static
    {
        $this->descriptionRessource = $descriptionRessource;

        return $this;
    }


}
