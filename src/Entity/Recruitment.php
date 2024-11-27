<?php

namespace App\Entity;

use App\Repository\RecruitmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecruitmentRepository::class)]
class Recruitment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: 'text')]
    private ?string $description = null;

    #[ORM\Column(type: 'string', length: 50)]
    private ?string $status = 'open';

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $deadline = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $requirements = null;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $dateCreated = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $dateUpdated = null;

    #[ORM\ManyToOne(targetEntity: Club::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Club $club = null;

    #[ORM\OneToMany(targetEntity: Application::class, mappedBy: 'recruitment', cascade: ['persist', 'remove'])]
    private Collection $candidatures;

    private ?Recruitment $recruitment = null;


    public function __construct()
    {
        $this->candidatures = new ArrayCollection();
        $this->dateCreated = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getDeadline(): ?\DateTimeInterface
    {
        return $this->deadline;
    }

    public function setDeadline(\DateTimeInterface $deadline): static
    {
        $this->deadline = $deadline;

        return $this;
    }

    public function getRequirements(): ?string
    {
        return $this->requirements;
    }

    public function setRequirements(?string $requirements): static
    {
        $this->requirements = $requirements;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): static
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateUpdated(): ?\DateTimeInterface
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(?\DateTimeInterface $dateUpdated): static
    {
        $this->dateUpdated = $dateUpdated;

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

    /**
     * @return Collection<int, Application>
     */
    public function getCandidatures(): Collection
    {
        return $this->candidatures;
    }

    public function getRecruitment(): ?Recruitment
    {
        return $this->recruitment;
    }

    public function setRecruitment(?Recruitment $recruitment): self
    {
        $this->recruitment = $recruitment;

        return $this;
    }

    public function addCandidature(Application $candidature): static
    {
        if (!$this->candidatures->contains($candidature)) {
            $this->candidatures[] = $candidature;
            $candidature->setRecruitment($this);
        }

        return $this;
    }

    public function removeCandidature(Application $candidature): static
    {
        if ($this->candidatures->removeElement($candidature)) {
            // set the owning side to null (unless already changed)
            if ($candidature->getRecruitment() === $this) {
                $candidature->setRecruitment(null);
            }
        }

        return $this;
    }
}
