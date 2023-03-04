<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class UserFixture extends Fixture
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
        for($i = 1 ; $i <= 15 ; $i++){
        $user = new User();
        $token = $this->tokenGenerator->generateToken();
        $user->setResetToken($token);
        $password_hashed = $this->passwordEncoder->encodePassword($user,"mounir");
        $user->setUsername("Mounir2000");
        $user->setIsVerified(true);
        $user->setUsername("Mounir".$i);
        $user->setRoles(['ROLE_USER']);
        $user->setEtat(true);
        $user->setImage("images.png");
        $user->setEmail("mounir".$i."@gmail.com");
        $user->setNumTel("988388".$i);
        $user->setFullAddress("Tunisie , 4115 , Djerba");
        $user->setPassword($password_hashed);
        $manager->persist($user);

        $manager->flush();
        }
    }
}
