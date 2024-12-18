<?php
// src/Entity/Application.php

namespace App\Entity;

use App\Repository\ApplicationRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Club;
use App\Entity\User;
use App\Entity\Recruitment;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Doctrine\DBAL\Types\Types;


#[ORM\Entity(repositoryClass: ApplicationRepository::class)]
#[ORM\Table(name: 'application', uniqueConstraints: [
    new ORM\UniqueConstraint(name: 'unique_candidat_recruitment', columns: ['candidat_id', 'recruitment_id'])
])]

class Application
{
     // Définition des constantes pour les statuts
     public const STATUS_PENDING = 'PENDING';
     public const STATUS_VALIDATED = 'VALIDÉE';
     public const STATUS_REJECTED = 'REJETÉE';


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Recruitment::class, inversedBy: "candidatures")]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recruitment $recruitment = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $candidat = null;

    #[ORM\ManyToOne(targetEntity: Club::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Club $club = null;

    

    #[ORM\Column(type: Types::STRING, length: 50)]
    private string $status = self::STATUS_PENDING;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private \DateTimeInterface $dateSoumission;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: true)]
    private ?string $cv = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $motivationLetter = null;

    public function __construct()
    {
        $this->dateSoumission = new \DateTime(); // Initialize with current date
    }

    // Getters et setters pour chaque propriété
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidat(): ?User
    {
        return $this->candidat;
    }

    public function setCandidat(User $candidat): static
    {
        $this->candidat = $candidat;
        return $this;
    }

    public function getClub(): ?Club
    {
        return $this->club;
    }

    public function setClub(Club $club): static
    {
        $this->club = $club;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getRecruitment(): ?Recruitment
    {
        return $this->recruitment;
    }

    public function setRecruitment(?Recruitment $recruitment): static
    {
        $this->recruitment = $recruitment;
        return $this;
    }

    public function getDateSoumission(): \DateTimeInterface
    {
        return $this->dateSoumission;
    }

    public function setDateSoumission(\DateTimeInterface $dateSoumission): static
    {
        $this->dateSoumission = $dateSoumission;
        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(?string $cv): static
    {
        $this->cv = $cv;
        return $this;
    }

    public function getMotivationLetter(): ?string
    {
        return $this->motivationLetter;
    }

    public function setMotivationLetter(?string $motivationLetter): static
    {
        $this->motivationLetter = $motivationLetter;
        return $this;
    }

    public function validate(): void
    {
        $this->status = self::STATUS_VALIDATED;
    }

    public function reject(): void
    {
        $this->status = self::STATUS_REJECTED;
    }

    // Vérifications des statuts
    public function isValidated(): bool
    {
        return $this->status === self::STATUS_VALIDATED;
    }

    public function isRejected(): bool
    {
        return $this->status === self::STATUS_REJECTED;
    }

    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

}
