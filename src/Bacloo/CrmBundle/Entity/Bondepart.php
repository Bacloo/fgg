<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bondepart
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\BondepartRepository")
 */
class Bondepart
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
     * @ORM\Column(name="niveaucarb", type="integer", nullable=true)
     */
    private $niveaucarb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="docadmin", type="boolean", nullable=true)
     */
    private $docadmin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cle", type="boolean")
     */
    private $cle;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="horametre", type="integer", nullable=true, nullable=true)
     */
    private $horametre;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=255, nullable=true)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="ecode", type="string", length=255, nullable=true)
     */
    private $ecode;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="codelocation", type="integer", nullable=true)
     */
    private $codelocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="codecontrat", type="integer", nullable=true)
     */
    private $codecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="signed", type="text", nullable=true)
     */
    private $signed;

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
     * Set niveaucarb
     *
     * @param integer $niveaucarb
     *
     * @return Bondepart
     */
    public function setNiveaucarb($niveaucarb)
    {
        $this->niveaucarb = $niveaucarb;

        return $this;
    }

    /**
     * Get niveaucarb
     *
     * @return integer
     */
    public function getNiveaucarb()
    {
        return $this->niveaucarb;
    }

    /**
     * Set docadmin
     *
     * @param boolean $docadmin
     *
     * @return Bondepart
     */
    public function setDocadmin($docadmin)
    {
        $this->docadmin = $docadmin;

        return $this;
    }

    /**
     * Get docadmin
     *
     * @return boolean
     */
    public function getDocadmin()
    {
        return $this->docadmin;
    }

    /**
     * Set cle
     *
     * @param boolean $cle
     *
     * @return Bondepart
     */
    public function setCle($cle)
    {
        $this->cle = $cle;

        return $this;
    }

    /**
     * Get cle
     *
     * @return boolean
     */
    public function getCle()
    {
        return $this->cle;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Bondepart
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set horametre
     *
     * @param integer $horametre
     *
     * @return Bondepart
     */
    public function setHorametre($horametre)
    {
        $this->horametre = $horametre;

        return $this;
    }

    /**
     * Get horametre
     *
     * @return integer
     */
    public function getHorametre()
    {
        return $this->horametre;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Bondepart
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

    /**
     * Set heure
     *
     * @param string $heure
     *
     * @return Bondepart
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return string
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Bondepart
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set ecode
     *
     * @param string $ecode
     *
     * @return Bondepart
     */
    public function setEcode($ecode)
    {
        $this->ecode = $ecode;

        return $this;
    }

    /**
     * Get ecode
     *
     * @return string
     */
    public function getEcode()
    {
        return $this->ecode;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bondepart
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set codelocation
     *
     * @param integer $codelocation
     *
     * @return Bondepart
     */
    public function setCodelocation($codelocation)
    {
        $this->codelocation = $codelocation;

        return $this;
    }

    /**
     * Get codelocation
     *
     * @return integer
     */
    public function getCodelocation()
    {
        return $this->codelocation;
    }

    /**
     * Set codecontrat
     *
     * @param integer $codecontrat
     *
     * @return Bondepart
     */
    public function setCodecontrat($codecontrat)
    {
        $this->codecontrat = $codecontrat;

        return $this;
    }

    /**
     * Get codecontrat
     *
     * @return integer
     */
    public function getCodecontrat()
    {
        return $this->codecontrat;
    }

    /**
     * Set signed
     *
     * @param string $signed
     *
     * @return Bondepart
     */
    public function setSigned($signed)
    {
        $this->signed = $signed;

        return $this;
    }

    /**
     * Get signed
     *
     * @return string
     */
    public function getSigned()
    {
        return $this->signed;
    }
}
