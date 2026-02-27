<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapsearch
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\RapsearchRepository")
 */
class Rapsearch
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
     * @var \DateTime
     *
     * @ORM\Column(name="du", type="date")
     */
    private $du;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="au", type="date")
     */
    private $au;

    /**
     * @var integer
     *
     * @ORM\Column(name="ficheid", type="integer", nullable=true)
     */
    private $ficheid;
	
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
     * Set du
     *
     * @param \DateTime $du
     * @return Rapsearch
     */
    public function setDu($du)
    {
        $this->du = $du;

        return $this;
    }

    /**
     * Get du
     *
     * @return \DateTime 
     */
    public function getDu()
    {
        return $this->du;
    }

    /**
     * Set au
     *
     * @param \DateTime $au
     * @return Rapsearch
     */
    public function setAu($au)
    {
        $this->au = $au;

        return $this;
    }

    /**
     * Get au
     *
     * @return \DateTime 
     */
    public function getAu()
    {
        return $this->au;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
		$this->du = new \Datetime('01/01/2013');	
		$this->au = new \Datetime('now');	
    }

    /**
     * Set ficheid
     *
     * @param integer $ficheid
     * @return Rapsearch
     */
    public function setFicheid($ficheid)
    {
        $this->ficheid = $ficheid;

        return $this;
    }

    /**
     * Get ficheid
     *
     * @return integer 
     */
    public function getFicheid()
    {
        return $this->ficheid;
    }
}
