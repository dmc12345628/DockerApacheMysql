<?php

use AdminBundle\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 13/11/2017
 * Time: 17:57
 */
class LoadFilmsFixture extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $logan = new Film();
        $logan->setTitre('Logan');
        $logan->setResume('L\'HEURE DE WOLVERINE EST VENUE - Logan, attendu au tournant, et finalement très bien reçu !Voici le premier film de super - héros de 2017, et la troisième aventure en solo de Wolverine, X - Men parmi les plus emblématiques . La star Hugh Hackman a...');
        $logan->setDuree('2h 17min');
        $manager->persist($logan);

        $laLaLand = new Film();
        $laLaLand->setTitre('La La Land');
        $laLaLand->setResume('Le réalisateur de l\'acclamé Whiplash – 3 Oscars en 2015, Grand Prix à Deauville et à Sundance 2014 – clame haut et fort, dans ce nouveau film salué par beaucoup, son amour pour le cinéma hollywoodien ardent, fait à la manière d\'antan, avec une...');
        $laLaLand->setDuree('2h 8min');
        $manager->persist($laLaLand);

        $split = new Film();
        $split->setTitre('Split');
        $split->setResume('KEVIN A 23 PERSONNALITÉS DISTINCTES. LA 24ÈME EST SUR LE POINT DE SURGIR. - Relancé par le film d\'horreur tendu The Visit, fondé sur une technique en found footage, le réalisateur qui signa Sixième sens, Incassable ou Signes, livre un nouvel...');
        $split->setDuree('2h 8min');
        $manager->persist($split);

        $gardiens = new Film();
        $gardiens->setTitre('Les Gardiens de la Galaxie 2');
        $gardiens->setResume('UNE SEULE CHANCE POUR SAUVER LA GALAXIE UNE SECONDE FOIS ! - L\'univers cinématographique Marvel s\'élargit encore, avec cette suite des Gardiens de la Galaxie, film de science-fiction rempli d\'action et d\'humour, gros succès surprise de 2014...');
        $gardiens->setDuree('2h 16min');
        $manager->persist($gardiens);

        $laBelle = new Film();
        $laBelle->setTitre('La Belle et la Bête');
        $laBelle->setResume('Emma Watson, star féminine de la saga Harry Potter, vue depuis dans The Bling Ring, Colonia, Noé, ou Le Monde de Charlie, et Dan Stevens, vedette de la série Legion, production à succès dérivée de l\'univers des X - Men, sont au cœur de ce conte...');
        $laBelle->setDuree('2h 9min');
        $manager->persist($laBelle);

        $lion = new Film();
        $lion->setTitre('Lion');
        $lion->setResume('Voici un mélodrame, inspiré par un fait réel, au sein duquel l\'un des rôles majeurs se trouve tenu par... la géolocalisation . L\'histoire d\'un très jeune enfant, égaré par erreur loin de ses parents, à Calcutta, puis adopté, et élevé dans une...');
        $lion->setDuree('2h 9min');
        $manager->persist($lion);

        $wonderWoman = new Film();
        $wonderWoman->setTitre('Wonder Woman');
        $wonderWoman->setResume('L\'une des plus célèbres super - héroïnes issues des comic - books américains arrive, enfin, sur grand écran . Pour une production d\'action fantastique aux teintes assez sombres, située entre univers mythologique parallèle, et Première Guerre mondiale...');
        $wonderWoman->setDuree('2h 11min');
        $manager->persist($wonderWoman);

        $ombres = new Film();
        $ombres->setTitre('Les Figures de l\'ombre');
        $ombres->setResume('ELLES VOULAIENT CHANGER LEURS VIES. ELLES ONT CHANGÉ L\'HISTOIRE. - Voici la biographie de trois femmes noires ayant œuvré grandement, au sein de la NASA, pour que la mission spatiale de février 1962, destinée à mettre un premier américain en...');
        $ombres->setDuree('2h 7min');
        $manager->persist($ombres);

        $manager->flush();
        $this->addReference('logan', $logan);//1
        $this->addReference('lalaland', $laLaLand);//2
        $this->addReference('split', $split);//3
        $this->addReference('gardiens', $gardiens);//4
        $this->addReference('labelle', $laBelle);//5
        $this->addReference('lion', $lion);//6
        $this->addReference('wonderwoman', $wonderWoman);//7
        $this->addReference('ombres', $ombres);//8
    }
}