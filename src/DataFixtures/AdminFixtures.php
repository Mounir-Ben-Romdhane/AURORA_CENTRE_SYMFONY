<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class AdminFixtures extends Fixture
{

    private $passwordEncoder;
    private $tokenGenerator;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder,TokenGeneratorInterface $tokenGenerator)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->tokenGenerator = $tokenGenerator;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $token = $this->tokenGenerator->generateToken();
        $user->setResetToken($token);
        $password_hashed = $this->passwordEncoder->encodePassword($user,"admin");
        $user->setUsername("Admin");
        $user->setRoles(['ROLE_ADMIN']);
        $user->setEmail("admin@gmail.com");
        $user->setNumTel("9883838");
        $user->setPassword($password_hashed);
        $manager->persist($user);

        $manager->flush();
    }
}
