<?php
namespace App\Entity;
use App\Repository\RatingRepository;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RatingRepository::class)]
class Rating
{
#[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column]
private ?int $id = null;

#[ORM\Column(type: "float")]
private $value;

#[ORM\ManyToOne(targetEntity: User::class)]
#[ORM\JoinColumn(nullable: false)] // The user cannot be null
private User $user;

#[ORM\ManyToOne(targetEntity: Club::class)]
#[ORM\JoinColumn(nullable: false)] // The club cannot be null
private Club $club;

// Getter for User
public function getUser(): User
{
return $this->user;
}

// Setter for User
public function setUser(User $user): self
{
$this->user = $user;
return $this;
}

// Getter for Club
public function getClub(): Club
{
return $this->club;
}

// Setter for Club
public function setClub(Club $club): self
{
$this->club = $club;
return $this;
}

// Getter and Setter for Rating Value
public function getValue(): float
{
return $this->value;
}

public function setValue(float $value): self
{
$this->value = $value;
return $this;
}
}