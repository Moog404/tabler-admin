<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminFixtures extends Fixture
{
    private UserPasswordEncoderInterface $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $defaultAdmin = new Admin();
        $defaultAdmin->setEmail('test@test.fr');
        $encodedPassword = $this->passwordEncoder->encodePassword($defaultAdmin,'test');
        $defaultAdmin->setPassword($encodedPassword);

        $manager->persist($defaultAdmin);
        $manager->flush();
    }
}
