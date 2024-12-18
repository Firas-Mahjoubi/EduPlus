<?php
namespace App\Entity;

use App\Repository\CommentaryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaryRepository::class)]
class Commentary
{
#[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column]
private ?int $id = null;

#[ORM\Column(type: 'text')]
private ?string $content = null;

#[ORM\ManyToOne(targetEntity: Club::class, inversedBy: 'commentaries')]
#[ORM\JoinColumn(nullable: false)]
private ?Club $club = null;

#[ORM\ManyToOne(targetEntity: User::class)]
#[ORM\JoinColumn(nullable: false)]
private ?User $user = null;

#[ORM\Column(type: 'datetime')]
private ?\DateTimeInterface $date = null;

// Self-referencing relationship for replies
#[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'replies')]
private ?self $parent = null;

#[ORM\OneToMany(mappedBy: 'parent', targetEntity: self::class, cascade: ['persist', 'remove'])]
private Collection $replies;

public function __construct()
{
$this->replies = new ArrayCollection();
}

public function getId(): ?int
{
return $this->id;
}

public function getContent(): ?string
{
return $this->content;
}

public function setContent(string $content): self
{
$this->content = $content;

return $this;
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

public function getUser(): ?User
{
return $this->user;
}

public function setUser(?User $user): self
{
$this->user = $user;

return $this;
}

public function getDate(): ?\DateTimeInterface
{
return $this->date;
}

public function setDate(\DateTimeInterface $date): self
{
$this->date = $date;

return $this;
}

public function getParent(): ?self
{
return $this->parent;
}

public function setParent(?self $parent): self
{
$this->parent = $parent;

return $this;
}

/**
* @return Collection<int, Commentary>
    */
    public function getReplies(): Collection
    {
    return $this->replies;
    }

    public function addReply(self $reply): self
    {
    if (!$this->replies->contains($reply)) {
    $this->replies->add($reply);
    $reply->setParent($this);
    }

    return $this;
    }

    public function removeReply(self $reply): self
    {
    if ($this->replies->removeElement($reply)) {
    // Set the owning side to null (unless already changed)
    if ($reply->getParent() === $this) {
    $reply->setParent(null);
    }
    }

    return $this;
    }
    }