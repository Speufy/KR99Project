<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255,unique: true)]
    private ?string $email = null;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

    #[ORM\Column(nullable: true)]
    private ?int $ingame_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $power = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grade = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ally = null;

    #[ORM\Column(nullable: true)]
    private ?int $merit = null;

    #[ORM\Column(nullable: true)]
    private ?int $timezone = null;

    #[ORM\Column(nullable: true)]
    private ?\DateInterval $prime_time = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $country = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $username = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Army $army = null;

    #[ORM\OneToOne(inversedBy: 'user', cascade: ['persist', 'remove'])]
    private ?PlayTimeSchedule $PlayTimeSchedule = null;


    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }



    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?String
    {
        return $this->username;
    }

    public function addUsername(Player $username): static
    {
        if (!$this->username->contains($username)) {
            $this->username->add($username);
            $username->setUser($this);
        }

        return $this;
    }

    public function removeUsername(Player $username): static
    {
        if ($this->username->removeElement($username)) {
            // set the owning side to null (unless already changed)
            if ($username->getUser() === $this) {
                $username->setUser(null);
            }
        }

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getIngameId(): ?int
    {
        return $this->ingame_id;
    }

    public function setIngameId(int $ingame_id): static
    {
        $this->ingame_id = $ingame_id;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(int $power): static
    {
        $this->power = $power;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(?string $grade): static
    {
        $this->grade = $grade;

        return $this;
    }

    public function getAlly(): ?string
    {
        return $this->ally;
    }

    public function setAlly(?string $ally): static
    {
        $this->ally = $ally;

        return $this;
    }

    public function getMerite(): ?int
    {
        return $this->merite;
    }

    public function setMerite(?int $merite): static
    {
        $this->merite = $merite;

        return $this;
    }

    public function getTimezone(): ?int
    {
        return $this->timezone;
    }

    public function setTimezone(?int $timezone): static
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getPrimeTime(): ?string
    {
        return $this->prime_time;
    }

    public function setPrimeTime(?string $prime_time): static
    {
        $this->prime_time = $prime_time;

        return $this;
    }


    public function getMerit(): ?int
    {
        return $this->merit;
    }

    public function setMerit(?int $merit): static
    {
        $this->merit = $merit;

        return $this;
    }

    public function setUsername(?string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getArmy(): ?Army
    {
        return $this->army;
    }

    public function setArmy(?Army $army): static
    {
        $this->army = $army;

        return $this;
    }

    public function getPlayTimeSchedule(): ?PlayTimeSchedule
    {
        return $this->PlayTimeSchedule;
    }

    public function setPlayTimeSchedule(?PlayTimeSchedule $PlayTimeSchedule): static
    {
        $this->PlayTimeSchedule = $PlayTimeSchedule;

        return $this;
    }


}
