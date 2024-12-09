<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $responsable = null;

    #[ORM\ManyToMany(targetEntity: Member::class, mappedBy: 'clubs')]
    private Collection $members;

    #[ORM\OneToMany(mappedBy: 'club', targetEntity: Event::class)]
    private Collection $events;

    #[ORM\OneToMany(mappedBy: 'club', targetEntity: Ressource::class)]
    private Collection $resources;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $logo = null;

    #[ORM\OneToMany(mappedBy: 'club', targetEntity: Commentary::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $commentaries;

    #[ORM\OneToMany(mappedBy: 'club', targetEntity: Rating::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $rating;

    public function __construct()
    {
        $this->members = new ArrayCollection();
        $this->events = new ArrayCollection();
        $this->resources = new ArrayCollection();
        $this->commentaries = new ArrayCollection();
        $this->rating = new ArrayCollection();
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

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getResponsable(): ?User
    {
        return $this->responsable;
    }

    public function setResponsable(User $responsable): static
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getMembers(): Collection
    {
        return $this->members;
    }

    public function addMember(Member $member): static
    {
        if (!$this->members->contains($member)) {
            $this->members[] = $member;
            $member->setClub($this);
        }

        return $this;
    }

    public function removeMember(Member $member): static
    {
        $this->members->removeElement($member);

        return $this;
    }

    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events[] = $event;
            $event->setClub($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): static
    {
        $this->events->removeElement($event);

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getCommentaries(): Collection
    {
        return $this->commentaries;
    }

    public function addCommentary(Commentary $commentary): static
    {
        if (!$this->commentaries->contains($commentary)) {
            $this->commentaries[] = $commentary;
            $commentary->setClub($this);
        }

        return $this;
    }

    public function removeCommentary(Commentary $commentary): static
    {
        $this->commentaries->removeElement($commentary);

        return $this;
    }

    public function getRating(): Collection
    {
        return $this->rating;
    }

    public function setRating(Collection $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function addRating(Rating $rating): static
    {
        if (!$this->rating->contains($rating)) {
            $this->rating[] = $rating;
            $rating->setClub($this);
        }

        return $this;
    }

    public function removeRating(Rating $rating): static
    {
        $this->rating->removeElement($rating);

        return $this;
    }
}
