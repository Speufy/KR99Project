<?php

namespace App\Entity;

use App\Repository\PlayTimeScheduleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayTimeScheduleRepository::class)]
class PlayTimeSchedule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $hour1 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour2 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour3 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour4 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour5 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour6 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour7 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour8 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour9 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour10 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour11 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour12 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour13 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour14 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour15 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour16 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour17 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour18 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour19 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour20 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour21 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour22 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour23 = null;
    #[ORM\Column(nullable: true)]
    private ?bool $hour24 = null;

    #[ORM\OneToOne(mappedBy: 'PlayTimeSchedule', cascade: ['persist', 'remove'])]
    private ?User $user = null;


    public function getId(): ?bool
    {
        return $this->id;
    }

    public function isHour1(): ?bool
    {
        return $this->hour1;
    }

    public function setHour1(?bool $hour1): static
    {
        $this->hour1 = $hour1;

        return $this;
    }
    public function isHour2(): ?bool
    {
        return $this->hour2;
    }

    public function setHour2(?bool $hour2): static
    {
        $this->hour2 = $hour2;

        return $this;
    }
    public function isHour3(): ?bool
    {
        return $this->hour3;
    }

    public function setHour3(?bool $hour3): static
    {
        $this->hour3 = $hour3;

        return $this;
    }
    public function isHour4(): ?bool
    {
        return $this->hour4;
    }

    public function setHour4(?bool $hour4): static
    {
        $this->hour4 = $hour4;

        return $this;
    }
    public function isHour5(): ?bool
    {
        return $this->hour5;
    }

    public function setHour5(?bool $hour5): static
    {
        $this->hour5 = $hour5;

        return $this;
    }
    public function isHour6(): ?bool
    {
        return $this->hour6;
    }

    public function setHour6(?bool $hour6): static
    {
        $this->hour6 = $hour6;

        return $this;
    }
    public function isHour7(): ?bool
    {
        return $this->hour7;
    }

    public function setHour7(?bool $hour7): static
    {
        $this->hour7 = $hour7;

        return $this;
    }
    public function isHour8(): ?bool
    {
        return $this->hour8;
    }

    public function setHour8(?bool $hour8): static
    {
        $this->hour8 = $hour8;

        return $this;
    }
    public function isHour9(): ?bool
    {
        return $this->hour9;
    }

    public function setHour9(?bool $hour9): static
    {
        $this->hour9 = $hour9;

        return $this;
    }
    public function isHour10(): ?bool
    {
        return $this->hour10;
    }

    public function setHour10(?bool $hour10): static
    {
        $this->hour10 = $hour10;

        return $this;
    }
    public function isHour11(): ?bool
    {
        return $this->hour11;
    }

    public function setHour11(?bool $hour11): static
    {
        $this->hour11 = $hour11;

        return $this;
    }
    public function isHour12(): ?bool
    {
        return $this->hour12;
    }

    public function setHour12(?bool $hour12): static
    {
        $this->hour12 = $hour12;

        return $this;
    }
    public function isHour13(): ?bool
    {
        return $this->hour13;
    }

    public function setHour13(?bool $hour13): static
    {
        $this->hour13 = $hour13;

        return $this;
    }
    public function isHour14(): ?bool
    {
        return $this->hour14;
    }

    public function setHour14(?bool $hour14): static
    {
        $this->hour14 = $hour14;

        return $this;
    }
    public function isHour15(): ?bool
    {
        return $this->hour15;
    }

    public function setHour15(?bool $hour15): static
    {
        $this->hour15 = $hour15;

        return $this;
    }
    public function isHour16(): ?bool
    {
        return $this->hour16;
    }

    public function setHour16(?bool $hour16): static
    {
        $this->hour16 = $hour16;

        return $this;
    }
    public function isHour17(): ?bool
    {
        return $this->hour17;
    }

    public function setHour17(?bool $hour17): static
    {
        $this->hour17 = $hour17;

        return $this;
    }
    public function isHour18(): ?bool
    {
        return $this->hour18;
    }

    public function setHour18(?bool $hour18): static
    {
        $this->hour18 = $hour18;

        return $this;
    }
    public function isHour19(): ?bool
    {
        return $this->hour19;
    }

    public function setHour19(?bool $hour19): static
    {
        $this->hour19 = $hour19;

        return $this;
    }
    public function isHour20(): ?bool
    {
        return $this->hour20;
    }

    public function setHour20(?bool $hour20): static
    {
        $this->hour20 = $hour20;

        return $this;
    }
    public function isHour21(): ?bool
    {
        return $this->hour21;
    }

    public function setHour21(?bool $hour21): static
    {
        $this->hour21 = $hour21;

        return $this;
    }
    public function isHour22(): ?bool
    {
        return $this->hour22;
    }

    public function setHour22(?bool $hour22): static
    {
        $this->hour22 = $hour22;

        return $this;
    }
    public function isHour23(): ?bool
    {
        return $this->hour23;
    }

    public function setHour23(?bool $hour23): static
    {
        $this->hour23 = $hour23;

        return $this;
    }
    public function isHour24(): ?bool
    {
        return $this->hour24;
    }

    public function setHour24(?bool $hour24): static
    {
        $this->hour24 = $hour24;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setPlayTimeSchedule(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getPlayTimeSchedule() !== $this) {
            $user->setPlayTimeSchedule($this);
        }

        $this->user = $user;

        return $this;
    }

}
