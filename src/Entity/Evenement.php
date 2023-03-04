<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as assert;
use Symfony\Component\Serializer\Annotation\Groups;


//use App\Entity\Participationns;


#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("evenement:read")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[assert\NotBlank(message:"le champ est obligatoire, veuillez saisir!")]
    #[assert\Length(
       // min:7,
        max:50,
        minMessage: "doit etre superieur a 3",
        maxMessage:"doit etre inferieur a 20",
        
    )]
    #[Groups("evenement:read")]
    private ?string $titreev = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[assert\NotBlank(message:"le champ est obligatoire, veuillez saisir!")]
    #[Groups("evenement:read")]
    private ?string $descriptionev = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("evenement:read")]
    private ?string $imageev = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[assert\Range(
        min: 'now',
       
    )]
    #[Groups("evenement:read")]
    private ?\DateTimeInterface $dateev = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[assert\NotBlank(message:"le champ est obligatoire, veuillez entrer votre choix!")]
    #[Groups("evenement:read")]
    private ?string $typeev = null;

    #[ORM\OneToMany(mappedBy: 'Evenement', targetEntity: Participationns::class)]
    private Collection $participationns;

    #[ORM\Column(length: 7, nullable: true)]
    private ?string $Color = null;

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

    public function getColor(): ?string
    {
        return $this->Color;
    }

    public function setColor(?string $Color): self
    {
        $this->Color = $Color;

        return $this;
    }

    
}
