<?php

namespace App\DataFixtures;

use App\Entity\UserCuit;
use App\Factory\UserCuitFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
//        $user = new UserCuit();
//
//        $user->setId()
//            ->setRamaJerarquica()
//            ->setDomicilioLaboral()
//            ->setAreaActiva()
//            ->setAreaSigla()
//            ->setPuesto()
//            ->setTipoCuenta()
//            ->setRelacionLaboral()
//            ->setTipoCui()
//            ->setEmail()
//            ->setApellido()
//            ->setNombre()
//            ->setNumeroCui()
//            ;
//
//
//         $manager->persist($user);

        UserCuitFactory::new()->createMany(50);

        $manager->flush();
    }
}
