<?php

namespace App\DataFixtures;

use App\Entity\Magazine;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $userPasswordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('sebzz13pub@gmail.com')
            ->setRoles([])
            ->setPassword($this->userPasswordHasher->hashPassword($user, 'sebzz13pub@gmail.com'))
            ->setName('Seb')
            ->setSurname('Dru')
            ->SetIsVerified(true)
        ;
        $manager->persist($user);

        for ($i = 226; $i <= 319; $i++) {
            $magazine = new Magazine();
            $magazine->setNumber($i)
            ->setFile("pdf/fluvial".$i.".pdf")
            ->setCover("img/cover/".$i.".jpg");
            $manager->persist($magazine);
        }

        $manager->flush();
    }
}
