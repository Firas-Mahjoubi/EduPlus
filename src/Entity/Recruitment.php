<?php

namespace App\Entity;

use App\Repository\RecruitmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecruitmentRepository::class)]
class Recruitment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'text')]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: Club::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Club $club = null;

    #[ORM\OneToOne(targetEntity: Application::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'application_id', referencedColumnName: 'id', nullable: true)]
    private ?Application $candidature = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getClub(): ?Club
    {
        return $this->club;
    }

    public function setClub(?Club $club): static
    {
        $this->club = $club;

        return $this;
    }

    public function getCandidature(): ?Application
    {
        return $this->candidature;
    }

    public function setCandidature(?Application $candidature): static
    {
        $this->candidature = $candidature;

        return $this;
    }
}
