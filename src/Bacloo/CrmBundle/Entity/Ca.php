<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ca
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\CaRepository")
 */
class Ca
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
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="capot", type="integer", nullable=true)
     */
    private $capot;

    /**
     * @var integer
     *
     * @ORM\Column(name="careal", type="integer", nullable=true)
     */
    private $careal;

    /**
     * @var integer
     *
     * @ORM\Column(name="caperdu", type="integer", nullable=true)
     */
    private $caperdu;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE", type="string", length=255, nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="ficheid", type="integer")
     */
    private $ficheid;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonsociale", type="string", length=255)
     */
    private $raisonsociale;


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
     * Set userid
     *
     * @param integer $userid
     *
     * @return Ca
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Ca
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
     * Set capot
     *
     * @param integer $capot
     *
     * @return Ca
     */
    public function setCapot($capot)
    {
        $this->capot = $capot;
    
        return $this;
    }

    /**
     * Get capot
     *
     * @return integer
     */
    public function getCapot()
    {
        return $this->capot;
    }

    /**
     * Set careal
     *
     * @param integer $careal
     *
     * @return Ca
     */
    public function setCareal($careal)
    {
        $this->careal = $careal;
    
        return $this;
    }

    /**
     * Get careal
     *
     * @return integer
     */
    public function getCareal()
    {
        return $this->careal;
    }

    /**
     * Set caperdu
     *
     * @param integer $caperdu
     *
     * @return Ca
     */
    public function setCaperdu($caperdu)
    {
        $this->caperdu = $caperdu;
    
        return $this;
    }

    /**
     * Get caperdu
     *
     * @return integer
     */
    public function getCaperdu()
    {
        return $this->caperdu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Ca
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
     * Set ficheid
     *
     * @param integer $ficheid
     *
     * @return Ca
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
     * Set raisonsociale
     *
     * @param string $raisonsociale
     *
     * @return Ca
     */
    public function setRaisonsociale($raisonsociale)
    {
        $this->raisonsociale = $raisonsociale;
    
        return $this;
    }

    /**
     * Get raisonsociale
     *
     * @return string
     */
    public function getRaisonsociale()
    {
        return $this->raisonsociale;
    }
}
