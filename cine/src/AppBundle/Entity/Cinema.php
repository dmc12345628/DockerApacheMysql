<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="cinema")
 */
class Cinema
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $nom;

    /**
     * @ORM\Column(type="string")
     */
    public $adresse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="accessibilite", type="boolean", options={"default" : false})
     */
    private $accessibilite;

    /**
     * @ORM\OneToMany(targetEntity="Salle", mappedBy="cinema")
     * @var Salle[]
    */
    protected $salles;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Film", cascade={"persist"})
     */
    private $films;

    function __construct()
    {
        $this->salles = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
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
     * @return Salle[]
     */
    public function getSalles()
    {
        return $this->salles;
    }

    /**
     * @param Salle[] $salles
     */
    public function setSalles($salles)
    {
        $this->salles = $salles;
    }

    /**
     * Add film
     *
     * @param \AppBundle\Entity\Film $film
     *
     * @return Cinema
     */
    public function addFilm(\AppBundle\Entity\Film $film)
    {
        $this->films[] = $film;

        return $this;
    }

    /**
     * Remove film
     *
     * @param \AppBundle\Entity\Film $film
     */
    public function removeFilm(\AppBundle\Entity\Film $film)
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