<?php

namespace App\DataFixtures;

use App\Factory\UserCuitFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserCuitFactory::new()->many(50)->create();
        $manager->flush();
    }
}
