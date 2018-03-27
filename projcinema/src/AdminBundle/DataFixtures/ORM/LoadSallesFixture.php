<?php

use AdminBundle\Entity\Salle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 13/11/2017
 * Time: 18:02
 */
class LoadSallesFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Cinema 1
        $salle1C1 = new Salle();
        $salle1C1->setNom('Salle1');
        $salle1C1->setCapacite(60);
        $salle1C1->setCinema($this->getReference('cinema1'));
        $manager->persist($salle1C1);

        $salle2C1 = new Salle();
        $salle2C1->setNom('Salle2');
        $salle2C1->setCapacite(60);
        $salle2C1->setCinema($this->getReference('cinema1'));
        $manager->persist($salle2C1);

        $salle3C1 = new Salle();
        $salle3C1->setNom('Salle3');
        $salle3C1->setCapacite(60);
        $salle3C1->setCinema($this->getReference('cinema1'));
        $manager->persist($salle3C1);

        $salle4C1 = new Salle();
        $salle4C1->setNom('Salle4');
        $salle4C1->setCapacite(60);
        $salle4C1->setCinema($this->getReference('cinema1'));
        $manager->persist($salle4C1);

        // Cinema 2
        $salle1C2 = new Salle();
        $salle1C2->setNom('Salle1');
        $salle1C2->setCapacite(50);
        $salle1C2->setCinema($this->getReference('cinema2'));
        $manager->persist($salle1C2);

        $salle2C2 = new Salle();
        $salle2C2->setNom('Salle2');
        $salle2C2->setCapacite(50);
        $salle2C2->setCinema($this->getReference('cinema2'));
        $manager->persist($salle2C2);

        $salle3C2 = new Salle();
        $salle3C2->setNom('Salle3');
        $salle3C2->setCapacite(50);
        $salle3C2->setCinema($this->getReference('cinema2'));
        $manager->persist($salle3C2);

        $salle4C2 = new Salle();
        $salle4C2->setNom('Salle4');
        $salle4C2->setCapacite(50);
        $salle4C2->setCinema($this->getReference('cinema2'));
        $manager->persist($salle4C2);

        // Cinema 3
        $salle1C3 = new Salle();
        $salle1C3->setNom('Salle1');
        $salle1C3->setCapacite(100);
        $salle1C3->setCinema($this->getReference('cinema3'));
        $manager->persist($salle1C3);

        $salle2C3 = new Salle();
        $salle2C3->setNom('Salle2');
        $salle2C3->setCapacite(100);
        $salle2C3->setCinema($this->getReference('cinema3'));
        $manager->persist($salle2C3);

        $salle3C3 = new Salle();
        $salle3C3->setNom('Salle3');
        $salle3C3->setCapacite(100);
        $salle3C3->setCinema($this->getReference('cinema3'));
        $manager->persist($salle3C3);

        $salle4C3 = new Salle();
        $salle4C3->setNom('Salle4');
        $salle4C3->setCapacite(100);
        $salle4C3->setCinema($this->getReference('cinema3'));
        $manager->persist($salle4C3);

        // Cinema 4
        $salle1C4 = new Salle();
        $salle1C4->setNom('Salle1');
        $salle1C4->setCapacite(85);
        $salle1C4->setCinema($this->getReference('cinema4'));
        $manager->persist($salle1C4);

        $salle2C4 = new Salle();
        $salle2C4->setNom('Salle2');
        $salle2C4->setCapacite(85);
        $salle2C4->setCinema($this->getReference('cinema4'));
        $manager->persist($salle2C4);

        $salle3C4 = new Salle();
        $salle3C4->setNom('Salle3');
        $salle3C4->setCapacite(85);
        $salle3C4->setCinema($this->getReference('cinema4'));
        $manager->persist($salle3C4);

        $salle4C4 = new Salle();
        $salle4C4->setNom('Salle4');
        $salle4C4->setCapacite(85);
        $salle4C4->setCinema($this->getReference('cinema4'));
        $manager->persist($salle4C4);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            LoadCinemaFixture::class
        );
    }
}