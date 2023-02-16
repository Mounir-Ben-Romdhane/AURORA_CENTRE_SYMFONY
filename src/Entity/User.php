<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"UserName is required")]
    #[Assert\Length([
        'min' => 5,
        'max' => 20,
        'minMessage' => "Votre nom doit être au moins {{ limit }} characters long",
        'maxMessage' => "Votre nom ne peut pas dépasser {{ limit }} characters"
    ])]
    private ?string $username = null;

    #[ORM\Column(length: 191)]
    #[Assert\NotBlank(message:"Email is required")]
    #[Assert\Email(message:"The email '{{ value }}' is not a valid email ")]
    #[Assert\Length([
        'min' => 5,
        'max' => 20,
        'minMessage' => "Votre email doit être au moins {{ limit }} characters long",
        'maxMessage' => "Votre email ne peut pas dépasser {{ limit }} characters"
    ])]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Telephone is required")]
    #[Assert\Length([
              'min' => 8,
              'max' => 8,
              'minMessage' => "Votre Numero de telephone doit être {{ limit }} characters long",
              'maxMessage' => "Votre Numero de telephone doit être {{ limit }} characters"
    ])]
    private ?string $numTel = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Password is required")]
    #[Assert\Length([
        'min' => 5,
        'max' => 10,
        'minMessage' => "Votre mot de passe doit être au moins {{ limit }} characters long",
        'maxMessage' => "Votre mot de passe ne peut pas dépasser {{ limit }} characters"
    ])]
    private ?string $password = null;

    #[ORM\Column]
    private array $roles = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(string $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
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

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSalt()
    {
        return \null;
    }

    public function eraseCredentials(){
        return null;
    }
    
    public function getUserIdentifier(){
        return $this->email;
    }

}
