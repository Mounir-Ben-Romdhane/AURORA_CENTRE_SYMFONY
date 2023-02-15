<?php

namespace App\Entity;

use App\Repository\ParticipationnsRepository;
use Doctrine\ORM\Mapping as ORM;

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
}
