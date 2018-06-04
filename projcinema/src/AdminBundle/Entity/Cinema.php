<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cinema
 *
 * @ORM\Table(name="cinema")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\CinemaRepository")
 */
class Cinema
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=80)
     */
    private $adresse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="accessibilite", type="boolean")
     */
    private $accessibilite;

    /**
     * @ORM\ManyToMany(targetEntity="AdminBundle\Entity\Film", cascade={"persist"})
     */
    private $films;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Cinema
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Cinema
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set accessibilite
     *
     * @param boolean $accessibilite
     *
     * @return Cinema
     */
    public function setAccessibilite($accessibilite)
    {
        $this->accessibilite = $accessibilite;

        return $this;
    }

    /**
     * Get Accessibilite
     *
     * @return boolean
     */
    public function getAccessibilite()
    {
        return $this->accessibilite;
    }

    /**
     * Add film
     *
     * @param \AdminBundle\Entity\Film $film
     *
     * @return Cinema
     */
    public function addFilm(\AdminBundle\Entity\Film $film)
    {
        $this->films[] = $film;

        return $this;
    }

    /**
     * Remove film
     *
     * @param \AdminBundle\Entity\Film $film
     */
    public function removeFilm(\AdminBundle\Entity\Film $film)
    {
        $this->films->removeElement($film);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilms()
    {
        return $this->films;
    }
}
