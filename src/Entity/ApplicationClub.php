<?php

namespace App\Entity;

use App\Repository\ApplicationClubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApplicationClubRepository::class)]
class ApplicationClub
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Club::class, inversedBy: 'applications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Club $club = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'applications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $candidat = null;

    #[ORM\Column(type: 'string', length: 20)]
    private string $status = 'PENDING';

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $submittedAt = null;

    public function __construct()
    {
        $this->submittedAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClub(): ?Club
    {
        return $this->club;
    }

    public function setClub(?Club $club): self
    {
        $this->club = $club;

        return $this;
    }

    public function getCandidat(): ?User
    {
        return $this->candidat;
    }

    public function setCandidat(?User $candidat): self
    {
        $this->candidat = $candidat;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSubmittedAt(): ?\DateTimeInterface
    {
        return $this->submittedAt;
    }

    public function setSubmittedAt(?\DateTimeInterface $submittedAt): self
    {
        $this->submittedAt = $submittedAt;

        return $this;
    }
}
