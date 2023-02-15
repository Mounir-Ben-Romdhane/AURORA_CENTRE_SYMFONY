<?php

namespace App\Entity;

use App\Repository\ParticipationsRepository;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Collection;
use Doctrine\Common\Collections\Collection as CollectionsCollection;
use Symfony\Component\Validator\Constraints\Collection as ConstraintsCollection;

#[ORM\Entity(repositoryClass: ParticipationsRepository::class)]
class Participations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptionP = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionP(): ?string
    {
        return $this->descriptionP;
    }

    public function setDescriptionP(?string $descriptionP): self
    {
        $this->descriptionP = $descriptionP;

        return $this;
    }

    



    





}
