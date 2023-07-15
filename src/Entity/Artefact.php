<?php

namespace App\Entity;

use App\Repository\ArtefactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtefactRepository::class)]
class Artefact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $level = null;

    #[ORM\Column]
    private ?int $star = null;

    #[ORM\Column]
    private ?int $skill_lvl = null;

    #[ORM\ManyToOne(inversedBy: 'artefacts')]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSkillLvl(): ?int
    {
        return $this->skill_lvl;
    }

    public function setSkillLvl(int $skill_lvl): static
    {
        $this->skill_lvl = $skill_lvl;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
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
}
