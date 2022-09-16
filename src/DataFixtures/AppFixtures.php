<?php

namespace App\DataFixtures;

use App\Entity\UserCuit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new UserCuit();

        // $manager->persist($product);

        $manager->flush();
    }
}
