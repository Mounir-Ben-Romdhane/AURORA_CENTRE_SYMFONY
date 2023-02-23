<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
<<<<<<< Updated upstream
=======
use Doctrine\Common\Collections\ArrayAccess;
>>>>>>> Stashed changes
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as assert;

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[assert\NotBlank(message:"Le titre ne peut pas être vide")]
    private ?string $titreS = null;

    #[ORM\Column(length: 255)]
    #[assert\NotBlank(message:"La description ne peut pas être vide")]
    private ?string $descriptionS = null;

    #[ORM\Column(length: 255)]
    #[assert\NotBlank(message:"Le type ne peut pas être vide")]
    private ?string $typeS = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[assert\NotBlank()]
<<<<<<< Updated upstream
=======
    #[assert\Range(min: 'now',)]

>>>>>>> Stashed changes
    private ?\DateTimeInterface $dateS = null;

    #[ORM\OneToMany(mappedBy: 'service', targetEntity: Reservation::class)]
    private Collection $reservations;

<<<<<<< Updated upstream
    #[ORM\Column(length: 255)]
=======
    #[ORM\Column(length: 255, nullable: true)]
>>>>>>> Stashed changes
    private ?string $image = null;



<<<<<<< Updated upstream
=======
    private $flashBag;

>>>>>>> Stashed changes
    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreS(): ?string
    {
<<<<<<< Updated upstream
        return $this->titreS;
=======
        
        return $this->titreS;
        
>>>>>>> Stashed changes
    }

    public function setTitreS(string $titreS): self
    {
        $this->titreS = $titreS;

        return $this;
    }

    public function getDescriptionS(): ?string
    {
        return $this->descriptionS;
    }

    public function setDescriptionS(string $descriptionS): self
    {
        $this->descriptionS = $descriptionS;

        return $this;
    }

    public function getTypeS(): ?string
    {
        return $this->typeS;
    }

    public function setTypeS(string $typeS): self
    {
        $this->typeS = $typeS;

        return $this;
    }

    public function getDateS(): ?\DateTimeInterface
    {
        return $this->dateS;
    }

    public function setDateS(\DateTimeInterface $dateS): self
    {
        $this->dateS = $dateS;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setService($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getService() === $this) {
                $reservation->setService(null);
            }
        }

        return $this;
    }

<<<<<<< Updated upstream
=======
   
>>>>>>> Stashed changes
    public function getImage(): ?string
    {
        return $this->image;
    }

<<<<<<< Updated upstream
    public function setImage(string $image): self
=======
    public function setImage(?string $image): self
>>>>>>> Stashed changes
    {
        $this->image = $image;

        return $this;
    }

    
<<<<<<< Updated upstream
=======
    
>>>>>>> Stashed changes
}
