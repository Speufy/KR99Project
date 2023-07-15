<?php

namespace App\Entity;

use App\Repository\HeroeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HeroeRepository::class)]
class Heroe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $level = null;

    #[ORM\Column]
    private ?int $star = null;

    #[ORM\Column]
    private ?int $premier_skill = null;

    #[ORM\Column]
    private ?int $second_skill = null;

    #[ORM\Column]
    private ?int $troisieme_skill = null;

    #[ORM\Column]
    private ?int $quatrieme_skill = null;

    #[ORM\Column]
    private ?bool $awake = null;

    #[ORM\ManyToOne(inversedBy: 'heroes')]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getStar(): ?int
    {
        return $this->star;
    }

    public function setStar(int $star): static
    {
        $this->star = $star;

        return $this;
    }

    public function getPremierSkill(): ?int
    {
        return $this->premier_skill;
    }

    public function setPremierSkill(int $premier_skill): static
    {
        $this->premier_skill = $premier_skill;

        return $this;
    }

    public function getSecondSkill(): ?int
    {
        return $this->second_skill;
    }

    public function setSecondSkill(int $second_skill): static
    {
        $this->second_skill = $second_skill;

        return $this;
    }

    public function getTroisiemeSkill(): ?int
    {
        return $this->troisieme_skill;
    }

    public function setTroisiemeSkill(int $troisieme_skill): static
    {
        $this->troisieme_skill = $troisieme_skill;

        return $this;
    }

    public function getQuatriemeSkill(): ?int
    {
        return $this->quatrieme_skill;
    }

    public function setQuatriemeSkill(int $quatrieme_skill): static
    {
        $this->quatrieme_skill = $quatrieme_skill;

        return $this;
    }

    public function isAwake(): ?bool
    {
        return $this->awake;
    }

    public function setAwake(bool $awake): static
    {
        $this->awake = $awake;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setPlayer(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
