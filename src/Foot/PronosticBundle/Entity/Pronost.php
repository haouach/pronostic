<?php

namespace Foot\PronosticBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pronost
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Foot\PronosticBundle\Entity\PronostRepository")
 */
class Pronost
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
     * @ORM\Column(name="idmatch", type="integer")
     */
    private $idmatch;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer")
     */
    private $iduser;

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
     * @var integer
     *
     * @ORM\Column(name="point", type="integer")
     */
    private $point;


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
     * Set idmatch
     *
     * @param integer $idmatch
     * @return Pronost
     */
    public function setIdmatch($idmatch)
    {
        $this->idmatch = $idmatch;

        return $this;
    }

    /**
     * Get idmatch
     *
     * @return integer 
     */
    public function getIdmatch()
    {
        return $this->idmatch;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return Pronost
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set butteam1
     *
     * @param integer $butteam1
     * @return Pronost
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
     * @return Pronost
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
     * Set point
     *
     * @param integer $point
     * @return Pronost
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return integer 
     */
    public function getPoint()
    {
        return $this->point;
    }
}
