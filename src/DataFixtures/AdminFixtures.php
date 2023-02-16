<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminFixtures extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
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
