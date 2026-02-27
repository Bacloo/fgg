<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Donemail
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\DonemailRepository")
 */
class Donemail
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="ficheid", type="integer", nullable=true)
     */
    private $ficheid;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonsociale", type="string", length=255, nullable=true)
     */
    private $raisonsociale;

    /**
     * @var integer
     *
     * @ORM\Column(name="parrainid", type="integer", nullable=true)
     */
    private $parrainid;

    /**
     * @var string
     *
     * @ORM\Column(name="parrainpseudo", type="string", length=255, nullable=true)
     */
    private $parrainpseudo;

    /**
     * @var integer
     *
     * @ORM\Column(name="point", type="integer", nullable=true)
     */
    private $point;
	
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="string")
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
     * Set email
     *
     * @param string $email
     *
     * @return Donemail
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ficheid
     *
     * @param integer $ficheid
     *
     * @return Donemail
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
     * @return Donemail
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

    /**
     * Set parrainid
     *
     * @param integer $parrainid
     *
     * @return Donemail
     */
    public function setParrainid($parrainid)
    {
        $this->parrainid = $parrainid;

        return $this;
    }

    /**
     * Get parrainid
     *
     * @return integer
     */
    public function getParrainid()
    {
        return $this->parrainid;
    }

    /**
     * Set parrainpseudo
     *
     * @param string $parrainpseudo
     *
     * @return Donemail
     */
    public function setParrainpseudo($parrainpseudo)
    {
        $this->parrainpseudo = $parrainpseudo;

        return $this;
    }

    /**
     * Get parrainpseudo
     *
     * @return string
     */
    public function getParrainpseudo()
    {
        return $this->parrainpseudo;
    }

    /**
     * Set point
     *
     * @param integer $point
     *
     * @return Donemail
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

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Donemail
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
}
