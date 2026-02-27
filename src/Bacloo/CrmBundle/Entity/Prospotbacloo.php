<?php

namespace Bacloo\CrmBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Prospotbacloo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ProspotbaclooRepository")
 */
class Prospotbacloo
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
     * @ORM\Column(name="RaisonSociale", type="string", length=255, nullable=true)
     */
    private $raisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="descbesoins", type="text", nullable=true)
     */
    private $descbesoins;
	
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
     * @var string
     *
     * @ORM\Column(name="aVendre", type="boolean", length=255, nullable=true)
     */
    private $aVendre;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixsscont", type="integer", nullable=true)
     */
    private $prixsscont;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aVendrec", type="boolean", nullable=true)
     */
    private $aVendrec;

    /**
     * @var boolean
     *
     * @ORM\Column(name="acheter", type="boolean", nullable=true)
     */
    private $acheter;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixavcont", type="integer", nullable=true)
     */
    private $prixavcont;
	
	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Prospectsbacloo", cascade={"persist"})
	*/		
	Private $prospectsbacloo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastmodif", type="date", nullable=true)
     */
    private $lastmodif;

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
     * Set ficheid
     *
     * @param integer $ficheid
     *
     * @return Prospotbacloo
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
     * Set raisonSociale
     *
     * @param string $raisonSociale
     *
     * @return Prospotbacloo
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set activite
     *
     * @param string $activite
     *
     * @return Prospotbacloo
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
     * Set cp
     *
     * @param string $cp
     *
     * @return Prospotbacloo
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
     *
     * @return Prospotbacloo
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
     *
     * @return Prospotbacloo
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
     * Set vendeur
     *
     * @param string $vendeur
     *
     * @return Prospotbacloo
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
     * Set vemail
     *
     * @param string $vemail
     *
     * @return Prospotbacloo
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
     * Set aVendre
     *
     * @param string $aVendre
     *
     * @return Prospotbacloo
     */
    public function setAVendre($aVendre)
    {
        $this->aVendre = $aVendre;

        return $this;
    }

    /**
     * Get aVendre
     *
     * @return string
     */
    public function getAVendre()
    {
        return $this->aVendre;
    }

    /**
     * Set prixsscont
     *
     * @param integer $prixsscont
     *
     * @return Prospotbacloo
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
     * Set aVendrec
     *
     * @param boolean $aVendrec
     *
     * @return Prospotbacloo
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
     * Set prixavcont
     *
     * @param integer $prixavcont
     *
     * @return Prospotbacloo
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
     * Set acheter
     *
     * @param boolean $acheter
     *
     * @return Prospotbacloo
     */
    public function setAcheter($acheter)
    {
        $this->acheter = $acheter;

        return $this;
    }

    /**
     * Get acheter
     *
     * @return boolean
     */
    public function getAcheter()
    {
        return $this->acheter;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prospectsbacloo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add prospectsbacloo
     *
     * @param \Bacloo\CrmBundle\Entity\Prospectsbacloo $prospectsbacloo
     *
     * @return Prospotbacloo
     */
    public function addProspectsbacloo(\Bacloo\CrmBundle\Entity\Prospectsbacloo $prospectsbacloo)
    {
        $this->prospectsbacloo[] = $prospectsbacloo;

        return $this;
    }

    /**
     * Remove prospectsbacloo
     *
     * @param \Bacloo\CrmBundle\Entity\Prospectsbacloo $prospectsbacloo
     */
    public function removeProspectsbacloo(\Bacloo\CrmBundle\Entity\Prospectsbacloo $prospectsbacloo)
    {
        $this->prospectsbacloo->removeElement($prospectsbacloo);
    }

    /**
     * Get prospectsbacloo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProspectsbacloo()
    {
        return $this->prospectsbacloo;
    }

    /**
     * Set besoins
     *
     * @param string $besoins
     *
     * @return Prospotbacloo
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
     * Set descbesoins
     *
     * @param string $descbesoins
     *
     * @return Prospotbacloo
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
     * Set lastmodif
     *
     * @param \DateTime $lastmodif
     *
     * @return Prospotbacloo
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
}
