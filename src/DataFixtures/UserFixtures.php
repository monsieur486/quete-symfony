<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->passwordEncoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $utilisateur01 = new User();
        $utilisateur01->setEmail('admin@site.com');
        $utilisateur01->setRoles(['ROLE_ADMIN']);
        $utilisateur01->setPassword($this->passwordEncoder->encodePassword(
            $utilisateur01,
            'mdp12345'
        ));

        $manager->persist($utilisateur01);

        $manager->flush();
    }
}
