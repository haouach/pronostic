<?php

namespace Tuto\AnimeauxBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tuto\AnimeauxBundle\Entity\AnimalRepository")
 */
class Animal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="descreption", type="text",nullable=true )
     */
    private $descreption;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * Get id
     *
     * @return integer 
     */

    public function getId()
    {
        return $this->id;
    }
    /**
     * au moment de la construction on initialise la date
     *
     */
    public function __construct()
    {
        $this->setDate(new \DateTime());
    }
    /**
     * Set titre
     *
     * @param string $titre
     * @return Animal
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set descreption
     *
     * @param string $descreption
     * @return Animal
     */
    public function setDescreption($descreption)
    {
        $this->descreption = $descreption;

        return $this;
    }

    /**
     * Get descreption
     *
     * @return string 
     */
    public function getDescreption()
    {
        return $this->descreption;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Animal
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Animal
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

}
