<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as assert;


#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[assert\NotBlank()]
    private ?string $titreev = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[assert\NotBlank()]
    private ?string $descriptionev = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageev = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateev = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeev = null;

    #[ORM\OneToMany(mappedBy: 'Evenement', targetEntity: Participationns::class)]
    private Collection $participationns;

    public function __construct()
    {
        $this->participationns = new ArrayCollection();
    }

  

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreev(): ?string
    {
        return $this->titreev;
    }

    public function setTitreev(?string $titreev): self
    {
        $this->titreev = $titreev;

        return $this;
    }

    public function getDescriptionev(): ?string
    {
        return $this->descriptionev;
    }

    public function setDescriptionev(?string $descriptionev): self
    {
        $this->descriptionev = $descriptionev;

        return $this;
    }

    public function getImageev(): ?string
    {
        return $this->imageev;
    }

    public function setImageev(?string $imageev): self
    {
        $this->imageev = $imageev;

        return $this;
    }

    public function getDateev(): ?\DateTimeInterface
    {
        return $this->dateev;
    }

    public function setDateev(?\DateTimeInterface $dateev): self
    {
        $this->dateev = $dateev;

        return $this;
    }

    public function getTypeev(): ?string
    {
        return $this->typeev;
    }

    public function setTypeev(?string $typeev): self
    {
        $this->typeev = $typeev;

        return $this;
    }

    /**
     * @return Collection<int, Participationns>
     */
    public function getParticipationns(): Collection
    {
        return $this->participationns;
    }

    public function addParticipationn(Participationns $participationn): self
    {
        if (!$this->participationns->contains($participationn)) {
            $this->participationns->add($participationn);
            $participationn->setEvenement($this);
        }

        return $this;
    }

    public function removeParticipationn(Participationns $participationn): self
    {
        if ($this->participationns->removeElement($participationn)) {
            // set the owning side to null (unless already changed)
            if ($participationn->getEvenement() === $this) {
                $participationn->setEvenement(null);
            }
        }

        return $this;
    }

    
}
