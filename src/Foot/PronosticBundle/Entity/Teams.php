<?php

namespace Foot\PronosticBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teams
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Foot\PronosticBundle\Entity\TeamsRepository")
 */
class Teams
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="flagurl", type="string", length=255)
     */
    private $flagurl;

    /**
     * @var integer
     *
     * @ORM\Column(name="idgroup", type="integer")
     */
    private $idgroup;


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
     * Set name
     *
     * @param string $name
     * @return Teams
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set flagurl
     *
     * @param string $flagurl
     * @return Teams
     */
    public function setFlagurl($flagurl)
    {
        $this->flagurl = $flagurl;

        return $this;
    }

    /**
     * Get flagurl
     *
     * @return string 
     */
    public function getFlagurl()
    {
        return $this->flagurl;
    }

    /**
     * Set idgroup
     *
     * @param integer $idgroup
     * @return Teams
     */
    public function setIdgroup($idgroup)
    {
        $this->idgroup = $idgroup;

        return $this;
    }

    /**
     * Get idgroup
     *
     * @return integer 
     */
    public function getIdgroup()
    {
        return $this->idgroup;
    }
}
