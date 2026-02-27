<?php

namespace Bacloo\CrmBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Prospot
 * @ORM\Entity
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ProspotRepository")
 */
class Prospot
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
     * @ORM\Column(name="ficheid", type="integer")
     */
    private $ficheid;	
	
    /**
     * @var string
     *
     * @ORM\Column(name="RaisonSociale", type="text", nullable=true)
     */
    private $RaisonSociale;	
	
    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="text", nullable=true)
     */
    private $activite;

    /**
     * @var string
     *
     * @ORM\Column(name="besoins", type="string", length=255, nullable=true)
     */
    private $besoins;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="vendeur", type="string", length=255, nullable=true)
     */
    private $vendeur;	

    /**
     * @var string
     *
     * @ORM\Column(name="vemail", type="string", length=255, nullable=true)
     */
    private $vemail;	

    /**
     * @var boolean
     *
     * @ORM\Column(name="voir", type="boolean", nullable=true)
     */
    private $voir;

    /**
     * @var string
     *
     * @ORM\Column(name="descbesoins", type="text", nullable=true)
     */
    private $descbesoins;
	
    /**
     * @var string
     *
     * @ORM\Column(name="a_vendre", type="boolean", length=255, nullable=true)
     */
    private $aVendre;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixsscont", type="integer", nullable=true)
     */
    private $prixsscont;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixavcont", type="integer", nullable=true)
     */
    private $prixavcont;
	
    /**
     * @var string
     *
     * @ORM\Column(name="a_vendrec", type="boolean", length=255, nullable=true)
     */
    private $aVendrec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastmodif", type="date", nullable=true)
     */
    private $lastmodif;

    /**
     * @var integer
     *
     * @ORM\Column(name="masquer", type="integer", nullable=true)
     */
    private $masquer;
	
	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Prospects", cascade={"persist"})
	*/		
	Private $prospects;
	
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
     * Set activite
     *
     * @param string $activite
     * @return Prospot
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return string 
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set besoins
     *
     * @param string $besoins
     * @return Prospot
     */
    public function setBesoins($besoins)
    {
        $this->besoins = $besoins;

        return $this;
    }

    /**
     * Get besoins
     *
     * @return string 
     */
    public function getBesoins()
    {
        return $this->besoins;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Prospot
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Prospot
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Prospot
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
     * Set voir
     *
     * @param string $voir
     * @return Prospot
     */
    public function setVoir($voir)
    {
        $this->voir = $voir;

        return $this;
    }

    /**
     * Get voir
     *
     * @return string 
     */
    public function getVoir()
    {
        return $this->voir;
    }

    /**
     * Set vendeur
     *
     * @param string $vendeur
     * @return Prospot
     */
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return string 
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * Set RaisonSociale
     *
     * @param string $raisonSociale
     * @return Prospot
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->RaisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get RaisonSociale
     *
     * @return string 
     */
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }
	
    public function __construct()
    {
        $this->prospects = new \Doctrine\Common\Collections\ArrayCollection();
	}

    /**
     * Add prospects
     *
     * @param \Bacloo\CrmBundle\Entity\Prospects $prospects
     * @return Prospot
     */
    public function addProspect(\Bacloo\CrmBundle\Entity\Prospects $prospects)
    {
        $this->prospects[] = $prospects;

        return $this;
    }

    /**
     * Remove prospects
     *
     * @param \Bacloo\CrmBundle\Entity\Prospects $prospects
     */
    public function removeProspect(\Bacloo\CrmBundle\Entity\Prospects $prospects)
    {
        $this->prospects->removeElement($prospects);
    }

    /**
     * Get prospects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProspects()
    {
        return $this->prospects;
    }

    /**
     * Set ficheid
     *
     * @param integer $ficheid
     * @return Prospot
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
     * Set vemail
     *
     * @param string $vemail
     * @return Prospot
     */
    public function setVemail($vemail)
    {
        $this->vemail = $vemail;

        return $this;
    }

    /**
     * Get vemail
     *
     * @return string 
     */
    public function getVemail()
    {
        return $this->vemail;
    }

    /**
     * Set descbesoins
     *
     * @param string $descbesoins
     * @return Prospot
     */
    public function setDescbesoins($descbesoins)
    {
        $this->descbesoins = $descbesoins;

        return $this;
    }

    /**
     * Get descbesoins
     *
     * @return string 
     */
    public function getDescbesoins()
    {
        return $this->descbesoins;
    }

    /**
     * Set aVendre
     *
     * @param boolean $aVendre
     * @return Prospot
     */
    public function setAVendre($aVendre)
    {
        $this->aVendre = $aVendre;

        return $this;
    }

    /**
     * Get aVendre
     *
     * @return boolean 
     */
    public function getAVendre()
    {
        return $this->aVendre;
    }

    /**
     * Set prixsscont
     *
     * @param integer $prixsscont
     * @return Prospot
     */
    public function setPrixsscont($prixsscont)
    {
        $this->prixsscont = $prixsscont;

        return $this;
    }

    /**
     * Get prixsscont
     *
     * @return integer 
     */
    public function getPrixsscont()
    {
        return $this->prixsscont;
    }

    /**
     * Set prixavcont
     *
     * @param integer $prixavcont
     * @return Prospot
     */
    public function setPrixavcont($prixavcont)
    {
        $this->prixavcont = $prixavcont;

        return $this;
    }

    /**
     * Get prixavcont
     *
     * @return integer 
     */
    public function getPrixavcont()
    {
        return $this->prixavcont;
    }

    /**
     * Set aVendrec
     *
     * @param boolean $aVendrec
     * @return Prospot
     */
    public function setAVendrec($aVendrec)
    {
        $this->aVendrec = $aVendrec;

        return $this;
    }

    /**
     * Get aVendrec
     *
     * @return boolean 
     */
    public function getAVendrec()
    {
        return $this->aVendrec;
    }

    /**
     * Set lastmodif
     *
     * @param \DateTime $lastmodif
     *
     * @return Prospot
     */
    public function setLastmodif($lastmodif)
    {
        $this->lastmodif = $lastmodif;

        return $this;
    }

    /**
     * Get lastmodif
     *
     * @return \DateTime
     */
    public function getLastmodif()
    {
        return $this->lastmodif;
    }

    /**
     * Set masquer
     *
     * @param integer $masquer
     *
     * @return Prospot
     */
    public function setMasquer($masquer)
    {
        $this->masquer = $masquer;
    
        return $this;
    }

    /**
     * Get masquer
     *
     * @return integer
     */
    public function getMasquer()
    {
        return $this->masquer;
    }
}
