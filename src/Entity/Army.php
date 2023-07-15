<?php

namespace App\Entity;

use App\Repository\ArmyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArmyRepository::class)]
class Army
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(nullable: true)]
    private ?int $T1Infantry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T2Infantry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T3Infantry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T4Infantry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T5Infantry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T1Cavalry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T2Cavalry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T3Cavalry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T4Cavalry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T5Cavalry = null;

    #[ORM\Column(nullable: true)]
    private ?int $T1Mage = null;

    #[ORM\Column(nullable: true)]
    private ?int $T2Mage = null;

    #[ORM\Column(nullable: true)]
    private ?int $T3Mage = null;

    #[ORM\Column(nullable: true)]
    private ?int $T4Mage = null;

    #[ORM\Column(nullable: true)]
    private ?int $T5Mage = null;

    #[ORM\Column(nullable: true)]
    private ?int $T1Fly = null;

    #[ORM\Column(nullable: true)]
    private ?int $T2Fly = null;

    #[ORM\Column(nullable: true)]
    private ?int $T3Fly = null;

    #[ORM\Column(nullable: true)]
    private ?int $T4Fly = null;

    #[ORM\Column(nullable: true)]
    private ?int $T5Fly = null;

    #[ORM\Column(nullable: true)]
    private ?int $T1Marksmen = null;

    #[ORM\Column(nullable: true)]
    private ?int $T2Marksmen = null;

    #[ORM\Column(nullable: true)]
    private ?int $T3Marksmen = null;

    #[ORM\Column(nullable: true)]
    private ?int $T4Marksmen = null;

    #[ORM\Column(nullable: true)]
    private ?int $T5Marksmen = null;

    public function __construct()
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getT1Infantry(): ?int
    {
        return $this->T1Infantry;
    }

    public function setT1Infantry(?int $T1Infantry): static
    {
        $this->T1Infantry = $T1Infantry;

        return $this;
    }

    public function getT2Infantry(): ?int
    {
        return $this->T2Infantry;
    }

    public function setT2Infantry(?int $T2Infantry): static
    {
        $this->T2Infantry = $T2Infantry;

        return $this;
    }

    public function getT3Infantry(): ?int
    {
        return $this->T3Infantry;
    }

    public function setT3Infantry(?int $T3Infantry): static
    {
        $this->T3Infantry = $T3Infantry;

        return $this;
    }

    public function getT4Infantry(): ?int
    {
        return $this->T4Infantry;
    }

    public function setT4Infantry(?int $T4Infantry): static
    {
        $this->T4Infantry = $T4Infantry;

        return $this;
    }

    public function getT5Infantry(): ?int
    {
        return $this->T5Infantry;
    }

    public function setT5Infantry(?int $T5Infantry): static
    {
        $this->T5Infantry = $T5Infantry;

        return $this;
    }

    public function getT1Cavalry(): ?int
    {
        return $this->T1Cavalry;
    }

    public function setT1Cavalry(?int $T1Cavalry): static
    {
        $this->T1Cavalry = $T1Cavalry;

        return $this;
    }

    public function getT2Cavalry(): ?int
    {
        return $this->T2Cavalry;
    }

    public function setT2Cavalry(?int $T2Cavalry): static
    {
        $this->T2Cavalry = $T2Cavalry;

        return $this;
    }

    public function getT3Cavalry(): ?int
    {
        return $this->T3Cavalry;
    }

    public function setT3Cavalry(?int $T3Cavalry): static
    {
        $this->T3Cavalry = $T3Cavalry;

        return $this;
    }

    public function getT4Cavalry(): ?int
    {
        return $this->T4Cavalry;
    }

    public function setT4Cavalry(?int $T4Cavalry): static
    {
        $this->T4Cavalry = $T4Cavalry;

        return $this;
    }

    public function getT5Cavalry(): ?int
    {
        return $this->T5Cavalry;
    }

    public function setT5Cavalry(?int $T5Cavalry): static
    {
        $this->T5Cavalry = $T5Cavalry;

        return $this;
    }

    public function getT1Mage(): ?int
    {
        return $this->T1Mage;
    }

    public function setT1Mage(?int $T1Mage): static
    {
        $this->T1Mage = $T1Mage;

        return $this;
    }

    public function getT2Mage(): ?int
    {
        return $this->T2Mage;
    }

    public function setT2Mage(?int $T2Mage): static
    {
        $this->T2Mage = $T2Mage;

        return $this;
    }

    public function getT3Mage(): ?int
    {
        return $this->T3Mage;
    }

    public function setT3Mage(?int $T3Mage): static
    {
        $this->T3Mage = $T3Mage;

        return $this;
    }

    public function getT4Mage(): ?int
    {
        return $this->T4Mage;
    }

    public function setT4Mage(?int $T4Mage): static
    {
        $this->T4Mage = $T4Mage;

        return $this;
    }

    public function getT5Mage(): ?int
    {
        return $this->T5Mage;
    }

    public function setT5Mage(?int $T5Mage): static
    {
        $this->T5Mage = $T5Mage;

        return $this;
    }

    public function getT1Fly(): ?int
    {
        return $this->T1Fly;
    }

    public function setT1Fly(?int $T1Fly): static
    {
        $this->T1Fly = $T1Fly;

        return $this;
    }

    public function getT2Fly(): ?int
    {
        return $this->T2Fly;
    }

    public function setT2Fly(?int $T2Fly): static
    {
        $this->T2Fly = $T2Fly;

        return $this;
    }

    public function getT3Fly(): ?int
    {
        return $this->T3Fly;
    }

    public function setT3Fly(?int $T3Fly): static
    {
        $this->T3Fly = $T3Fly;

        return $this;
    }

    public function getT4Fly(): ?int
    {
        return $this->T4Fly;
    }

    public function setT4Fly(?int $T4Fly): static
    {
        $this->T4Fly = $T4Fly;

        return $this;
    }

    public function getT5Fly(): ?int
    {
        return $this->T5Fly;
    }

    public function setT5Fly(?int $T5Fly): static
    {
        $this->T5Fly = $T5Fly;

        return $this;
    }

    public function getT1Marksmen(): ?int
    {
        return $this->T1Marksmen;
    }

    public function setT1Marksmen(?int $T1Marksmen): static
    {
        $this->T1Marksmen = $T1Marksmen;

        return $this;
    }

    public function getT2Marksmen(): ?int
    {
        return $this->T2Marksmen;
    }

    public function setT2Marksmen(?int $T2Marksmen): static
    {
        $this->T2Marksmen = $T2Marksmen;

        return $this;
    }

    public function getT3Marksmen(): ?int
    {
        return $this->T3Marksmen;
    }

    public function setT3Marksmen(?int $T3Marksmen): static
    {
        $this->T3Marksmen = $T3Marksmen;

        return $this;
    }

    public function getT4Marksmen(): ?int
    {
        return $this->T4Marksmen;
    }

    public function setT4Marksmen(?int $T4Marksmen): static
    {
        $this->T4Marksmen = $T4Marksmen;

        return $this;
    }

    public function getT5Marksmen(): ?int
    {
        return $this->T5Marksmen;
    }

    public function setT5Marksmen(?int $T5Marksmen): static
    {
        $this->T5Marksmen = $T5Marksmen;

        return $this;
    }

}
