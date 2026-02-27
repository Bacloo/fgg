<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alteruser
 * @ORM\Entity
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\AlteruserRepository")
 */
class Alteruser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="ficheid", type="integer", nullable=true)
     */
    private $ficheid;

    /**
     * @var string
     *
     * @ORM\Column(name="proprio", type="string", length=255, nullable=true)
     */
    private $proprio;
	
   /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Fiche", cascade={"persist"})
   */		
	Private $fiche;	


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
     * Set username
     *
     * @param string $username
     * @return Alteruser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fiche = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fiche
     *
     * @param \Bacloo\CrmBundle\Entity\Fiche $fiche
     *
     * @return Alteruser
     */
    public function addFiche(\Bacloo\CrmBundle\Entity\Fiche $fiche)
    {
        $this->fiche[] = $fiche;

        return $this;
    }

    /**
     * Remove fiche
     *
     * @param \Bacloo\CrmBundle\Entity\Fiche $fiche
     */
    public function removeFiche(\Bacloo\CrmBundle\Entity\Fiche $fiche)
    {
        $this->fiche->removeElement($fiche);
    }

    /**
     * Get fiche
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Set ficheid
     *
     * @param integer $ficheid
     *
     * @return Alteruser
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

    /**
     * Set proprio
     *
     * @param string $proprio
     *
     * @return Alteruser
     */
    public function setProprio($proprio)
    {
        $this->proprio = $proprio;
    
        return $this;
    }

    /**
     * Get proprio
     *
     * @return string
     */
    public function getProprio()
    {
        return $this->proprio;
    }
}
