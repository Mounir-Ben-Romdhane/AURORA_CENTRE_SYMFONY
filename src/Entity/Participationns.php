<?php

namespace App\Entity;

use App\Repository\ParticipationnsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as assert;

//use App\Entity\Evenement;



#[ORM\Entity(repositoryClass: ParticipationnsRepository::class)]
class Participationns
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptionPn = null;

    #[ORM\ManyToOne(inversedBy: 'participationns')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Evenement $Evenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[assert\NotBlank(message:"le champ est obligatoire, veuillez saisir!")]
    private ?string $usernameev = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:"Email est obligatoire")]
    #[Assert\Email(message:"L email '{{ value }}' n est pas un valid email ")]
    #[Assert\Length([
        'min' => 5,
        'max' => 40,
        'minMessage' => "Votre email doit être au moins {{ limit }} characters long",
        'maxMessage' => "Votre email ne peut pas dépasser {{ limit }} characters"
    ])]
    private ?string $emailev = null;

    /*#[ORM\Column(length: 255, nullable: true)]
    private ?string $telephoneev = null;*/

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message:"Telephone est obligatoire")]
    #[Assert\Length([
              'min' => 8,
              'max' => 8,
              'minMessage' => "Votre Numero de telephone doit être {{ limit }} characters long",
              'maxMessage' => "Votre Numero de telephone doit être {{ limit }} characters"
    ])]
    private ?int $numtelev = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionPn(): ?string
    {
        return $this->descriptionPn;
    }

    public function setDescriptionPn(?string $descriptionPn): self
    {
        $this->descriptionPn = $descriptionPn;

        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->Evenement;
    }

    public function setEvenement(?Evenement $Evenement): self
    {
        $this->Evenement = $Evenement;

        return $this;
    }

    public function getUsernameev(): ?string
    {
        return $this->usernameev;
    }

    public function setUsernameev(?string $usernameev): self
    {
        $this->usernameev = $usernameev;

        return $this;
    }

    public function getEmailev(): ?string
    {
        return $this->emailev;
    }

    public function setEmailev(?string $emailev): self
    {
        $this->emailev = $emailev;

        return $this;
    }

    /*public function getTelephoneev(): ?string
    {
        return $this->telephoneev;
    }

    public function setTelephoneev(?string $telephoneev): self
    {
        $this->telephoneev = $telephoneev;

        return $this;
    }*/

    public function getNumtelev(): ?int
    {
        return $this->numtelev;
    }

    public function setNumtelev(?int $numtelev): self
    {
        $this->numtelev = $numtelev;

        return $this;
    }
}
