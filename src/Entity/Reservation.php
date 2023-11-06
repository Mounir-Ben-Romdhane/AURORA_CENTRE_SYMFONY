<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as assert;


#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[assert\NotBlank(message:"Le numéro ne peut pas être vide")]
    #[assert\Positive(message:"Le numéro ne doit pas être négatif")]

    private ?int $numero = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[assert\NotBlank()]
    #[assert\Range(min: 'now',)]
    private ?\DateTimeInterface $dateR = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Email ne peut pas être vide")]
    #[Assert\Email(message:"Email '{{ value }}' est non valide ")]
    #[Assert\Length([
        'min' => 5,
        'max' => 40,
        'minMessage' => "Votre email doit être au moins {{ limit }} characters long",
        'maxMessage' => "Votre email ne peut pas dépasser {{ limit }} characters"
    ])]
    private ?string $email = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Le numéro du téléphone ne peut pas être vide")]
    #[Assert\Length([
              'min' => 8,
              'max' => 8,
              'minMessage' => "Votre Numéro de télephone doit être {{ limit }} characters long",
              'maxMessage' => "Votre Numéro de télephone doit être {{ limit }} characters"
    ])]
    private ?int $numeroTel = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le nom utilisateur ne peut pas être vide")]

    private ?string $userName = null;

    #[ORM\Column(length: 255)]
    private ?string $email_connect = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDateR(): ?\DateTimeInterface
    {
        return $this->dateR;
    }

    public function setDateR(\DateTimeInterface $dateR): self
    {
        $this->dateR = $dateR;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumeroTel(): ?int
    {
        return $this->numeroTel;
    }

    public function setNumeroTel(int $numeroTel): self
    {
        $this->numeroTel = $numeroTel;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getEmailConnect(): ?string
    {
        return $this->email_connect;
    }

    public function setEmailConnect(string $email_connect): self
    {
        $this->email_connect = $email_connect;

        return $this;
    }
}
