<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 13/11/2017
 * Time: 17:45
 */

use AdminBundle\Entity\Cinema;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCinemaFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cinema1 = new Cinema();
        $cinema1->setNom('Cinéma CGR La Rochelle');
        $cinema1->setAdresse('Avenue Henri Becquere');
        $cinema1->setAccessibilite(1);
        $cinema1->addFilm($this->getReference('split'));
        $cinema1->addFilm($this->getReference('lalaland'));
        $cinema1->addFilm($this->getReference('lion'));
        $cinema1->addFilm($this->getReference('ombres'));
        $manager->persist($cinema1);

        $cinema2 = new Cinema();
        $cinema2->setNom('Cinéma CGR Dragon La Rochelle');
        $cinema2->setAdresse('8 Cours des Dames');
        $cinema2->setAccessibilite(0);
        $cinema2->addFilm($this->getReference('split'));
        $cinema2->addFilm($this->getReference('wonderwoman'));
        $cinema2->addFilm($this->getReference('logan'));
        $manager->persist($cinema2);

        $cinema3 = new Cinema();
        $cinema3->setNom('Cinéma Olympia La Rochelle');
        $cinema3->setAdresse('54 Rue Chaudrier');
        $cinema3->setAccessibilite(1);
        $cinema3->addFilm($this->getReference('logan'));
        $cinema3->addFilm($this->getReference('lalaland'));
        $cinema3->addFilm($this->getReference('split'));
        $cinema3->addFilm($this->getReference('gardiens'));
        $cinema3->addFilm($this->getReference('labelle'));
        $cinema3->addFilm($this->getReference('lion'));
        $cinema3->addFilm($this->getReference('wonderwoman'));
        $cinema3->addFilm($this->getReference('ombres'));
        $manager->persist($cinema3);

        $cinema4 = new Cinema();
        $cinema4->setNom('CGR Cinemas');
        $cinema4->setAdresse('5 Rue Chaudrier');
        $cinema4->setAccessibilite(0);
        $cinema4->addFilm($this->getReference('logan'));
        $cinema4->addFilm($this->getReference('lalaland'));
        $cinema4->addFilm($this->getReference('split'));
        $cinema4->addFilm($this->getReference('gardiens'));
        $cinema4->addFilm($this->getReference('labelle'));
        $cinema4->addFilm($this->getReference('lion'));
        $manager->persist($cinema4);

        $manager->flush();

        $this->addReference('cinema1', $cinema1);
        $this->addReference('cinema2', $cinema2);
        $this->addReference('cinema3', $cinema3);
        $this->addReference('cinema4', $cinema4);
    }

    public function getDependencies()
    {
        return array(
            LoadFilmsFixture::class
        );
    }
}
