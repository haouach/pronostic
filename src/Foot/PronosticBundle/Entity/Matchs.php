<?php

namespace Foot\PronosticBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchs
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Foot\PronosticBundle\Entity\MatchsRepository")
 */
class Matchs
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
     * @var integer
     *
     * @ORM\Column(name="idteam1", type="integer")
     */
    private $idteam1;

    /**
     * @var integer
     *
     * @ORM\Column(name="idteam2", type="integer")
     */
    private $idteam2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="butteam1", type="integer")
     */
    private $butteam1;

    /**
     * @var integer
     *
     * @ORM\Column(name="butteam2", type="integer")
     */
    private $butteam2;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;


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
     * Set idteam1
     *
     * @param integer $idteam1
     * @return Matchs
     */
    public function setIdteam1($idteam1)
    {
        $this->idteam1 = $idteam1;

        return $this;
    }

    /**
     * Get idteam1
     *
     * @return integer 
     */
    public function getIdteam1()
    {
        return $this->idteam1;
    }

    /**
     * Set idteam2
     *
     * @param integer $idteam2
     * @return Matchs
     */
    public function setIdteam2($idteam2)
    {
        $this->idteam2 = $idteam2;

        return $this;
    }

    /**
     * Get idteam2
     *
     * @return integer 
     */
    public function getIdteam2()
    {
        return $this->idteam2;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Matchs
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

    /**
     * Set butteam1
     *
     * @param integer $butteam1
     * @return Matchs
     */
    public function setButteam1($butteam1)
    {
        $this->butteam1 = $butteam1;

        return $this;
    }

    /**
     * Get butteam1
     *
     * @return integer 
     */
    public function getButteam1()
    {
        return $this->butteam1;
    }

    /**
     * Set butteam2
     *
     * @param integer $butteam2
     * @return Matchs
     */
    public function setButteam2($butteam2)
    {
        $this->butteam2 = $butteam2;

        return $this;
    }

    /**
     * Get butteam2
     *
     * @return integer 
     */
    public function getButteam2()
    {
        return $this->butteam2;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     * @return Matchs
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}
