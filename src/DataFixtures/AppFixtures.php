<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use App\Entity\Modele;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Marques
        $marque1 = new Marque();
        $marque1->setLibelle("Toyota");
        $manager->persist($marque1);

        $marque2 = new Marque();
        $marque2->setLibelle("Peugeot");
        $manager->persist($marque2);

        // Modèles
        $modele1 = new Modele();
        $modele1->setLibelle('Yaris')
            ->setImage("modele1.jpg")
            ->setPrixMoyen(15000)
            ->setMarque($marque1);
        $manager->persist($modele1);

        $modele2 = new Modele();
        $modele2->setLibelle('Yraus')
            ->setImage("modele2.jpg")
            ->setPrixMoyen(20000)
            ->setMarque($marque1);
        $manager->persist($modele2);

        $modele3 = new Modele();
        $modele3->setLibelle('007')
            ->setImage("modele3.jpg")
            ->setPrixMoyen(30000)
            ->setMarque($marque2);
        $manager->persist($modele3);

        $modele4 = new Modele();
        $modele4->setLibelle('207')
            ->setImage("modele4.jpg")
            ->setPrixMoyen(10000)
            ->setMarque($marque2);
        $manager->persist($modele4);

        $modele5 = new Modele();
        $modele5->setLibelle('009')
            ->setImage("modele5.jpg")
            ->setPrixMoyen(17000)
            ->setMarque($marque2);
        $manager->persist($modele5);

        $faker = \Faker\Factory::create('fr_FR');

        $manager->flush();
    }
}
