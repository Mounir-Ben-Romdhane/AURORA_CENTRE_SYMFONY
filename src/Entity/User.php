<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Nom d'utilisateur est nécessaire")]
    #[Assert\Length([
        'min' => 5,
        'max' => 20,
        'minMessage' => "Votre nom doit être au moins {{ limit }} characters long",
        'maxMessage' => "Votre nom ne peut pas dépasser {{ limit }} characters"
    ])]
    private ?string $username = null;

    #[ORM\Column(length: 191)]
    #[Assert\NotBlank(message:"Email est nécessaire")]
    #[Assert\Email(message:"The email '{{ value }}' is not a valid email ")]
    #[Assert\Length([
        'min' => 5,
        'max' => 40,
        'minMessage' => "Votre email doit être au moins {{ limit }} characters long",
        'maxMessage' => "Votre email ne peut pas dépasser {{ limit }} characters"
    ])]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le téléphone est requis")]
    #[Assert\Length([
              'min' => 8,
              'max' => 8,
              'minMessage' => "Votre Numero de telephone doit être {{ limit }} characters long",
              'maxMessage' => "Votre Numero de telephone doit être {{ limit }} characters"
    ])]
    private ?string $numTel = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Mot de passe requis")]
    #[Assert\Length([
        'min' => 5,
        'max' => 10,
        'minMessage' => "Votre mot de passe doit être au moins {{ limit }} characters long",
        'maxMessage' => "Votre mot de passe ne peut pas dépasser {{ limit }} characters"
    ])]
    private ?string $password = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column(length: 100)]
    private ?string $resetToken = null;

    #[ORM\Column]
    private ?bool $is_verified = false;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Addresse est requis")]
    #[Assert\Length([
        'min' => 5,
        'max' => 100,
        'minMessage' => "Votre addresse doit être au moins {{ limit }} characters long",
        'maxMessage' => "Votre nom ne peut pas dépasser {{ limit }} characters"
    ])]
    private ?string $fullAddress = null;

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

    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }

    public function getIsVerified(): ?bool
    {
        return $this->is_verified;
    }

    public function setIsVerified(bool $is_verified): self
    {
        $this->is_verified = $is_verified;

        return $this;
    }

    public function getFullAddress(): ?string
    {
        return $this->fullAddress;
    }

    public function setFullAddress(string $fullAddress): self
    {
        $this->fullAddress = $fullAddress;

        return $this;
    }

}
