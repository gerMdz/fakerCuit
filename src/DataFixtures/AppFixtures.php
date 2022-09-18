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
        $user = new UserCuit();

        $user
            ->setRamaJerarquica(['DGISIS,ASINF,SSSYP,MJGGC,AJG,GCBA,Usuarios'])
            ->setDomicilioLaboral('ZUVIRIA 64')
            ->setAreaActiva(true)
            ->setAreaSigla('DGISIS')
            ->setPuesto('ASI')
            ->setTipoCuenta('Personal')
            ->setRelacionLaboral('Planta Permanente')
            ->setTipoCui('cuit')
            ->setEmail('rgonzalez@buenosaires.gob.ar')
            ->setApellido('Gonzalez')
            ->setNombre('Roberto')
            ->setNumeroCui('20300000002')
            ->setCuit('20300000002')
            ;


         $manager->persist($user);

        UserCuitFactory::new()->many(50)->create();
        $manager->flush();
    }
}
