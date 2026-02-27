<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locatasl
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LocataslRepository")
 */
class Locatasl
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
     * @ORM\Column(name="chantierid", type="integer", nullable=true)
     */
    private $chantierid;

    /**
     * @var string
     *
     * @ORM\Column(name="nomchantier", type="string", length=255)
     */
    private $nomchantier;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse1", type="string", length=255)
     */
    private $adresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2", type="string", length=255, nullable=true)
     */
    private $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse3", type="string", length=255, nullable=true)
     */
    private $adresse3;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientid", type="integer", type="integer", nullable=true)
     */
    private $clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255, nullable=true)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="acheteur", type="string", length=255, nullable=true)
     */
    private $acheteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contactchantier", type="string", length=255, nullable=true)
     */
    private $contactchantier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemodif", type="string", nullable=true)
     */
    private $datemodif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debutloc", type="string", nullable=true)
     */
    private $debutloc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finloc", type="string", nullable=true)
     */
    private $finloc;

    /**
     * @var string
     *
     * @ORM\Column(name="facturerwe", type="boolean", length=255, nullable=true)
     */
    private $facturerwe;

    /**
     * @var string
     *
     * @ORM\Column(name="contributionverte", type="boolean", length=255, nullable=true)
     */
    private $contributionverte;

    /**
     * @var string
     *
     * @ORM\Column(name="assurance", type="boolean", length=255, nullable=true)
     */
    private $assurance;

    /**
     * @var string
     *
     * @ORM\Column(name="offreencours", type="boolean", length=255, nullable=true)
     */
    private $offreencours;

    /**
     * @var string
     *
     * @ORM\Column(name="bdcrecu", type="boolean", length=255, nullable=true)
     */
    private $bdcrecu;

    /**
     * @var string
     *
     * @ORM\Column(name="offrerefusee", type="boolean", length=255, nullable=true)
     */
    private $offrerefusee;

    /**
     * @var string
     *
     * @ORM\Column(name="contrat", type="boolean", length=255, nullable=true)
     */
    private $contrat;

    /**
     * @var string
     *
     * @ORM\Column(name="annulee", type="boolean", length=255, nullable=true)
     */
    private $annulee;

    /**
     * @var integer
     *
     * @ORM\Column(name="transportaller", type="integer", type="integer", nullable=true)
     */
    private $transportaller;

    /**
     * @var integer
     *
     * @ORM\Column(name="transportretour", type="integer", type="integer", nullable=true)
     */
    private $transportretour;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantloc", type="integer", nullable=true)
     */
    private $montantloc;

    /**
     * @var integer
     *
     * @ORM\Column(name="remise", type="integer", nullable=true)
     */
    private $remise;

    /**
     * @var string
     *
     * @ORM\Column(name="numbdc", type="string", length=255, nullable=true)
     */
    private $numbdc;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locationssl", cascade={"persist"}, orphanRemoval=true)
   */	
	Private $locationssl;

    /**
     * Set chantierid
     *
     * @param integer $chantierid
     *
     * @return Locationssl
     */
    public function setChantierid($chantierid)
    {
        $this->chantierid = $chantierid;

        return $this;
    }

    /**
     * Get chantierid
     *
     * @return integer
     */
    public function getChantierid()
    {
        return $this->chantierid;
    }

    /**
     * Set nomchantier
     *
     * @param string $nomchantier
     *
     * @return Locationssl
     */
    public function setNomchantier($nomchantier)
    {
        $this->nomchantier = $nomchantier;

        return $this;
    }

    /**
     * Get nomchantier
     *
     * @return string
     */
    public function getNomchantier()
    {
        return $this->nomchantier;
    }




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
     * Constructor
     */
    public function __construct()
    {
        $this->locationssl = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add location
     *
     * @param \Bacloo\CrmBundle\Entity\Locationssl $location
     *
     * @return Locatasl
     */
    public function addLocation(\Bacloo\CrmBundle\Entity\Locationssl $location)
    {
        $this->locationssl[] = $location;

        return $this;
    }

    /**
     * Remove location
     *
     * @param \Bacloo\CrmBundle\Entity\Locationssl $location
     */
    public function removeLocation(\Bacloo\CrmBundle\Entity\Locationssl $location)
    {
        $this->locationssl->removeElement($location);
    }

    /**
     * Get locationssl
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocationssl()
    {
        return $this->locationssl;
    }

    /**
     * Set debutloc
     *
     * @param string $debutloc
     *
     * @return Locatasl
     */
    public function setDebutloc($debutloc)
    {
        $this->debutloc = $debutloc;

        return $this;
    }

    /**
     * Get debutloc
     *
     * @return string
     */
    public function getDebutloc()
    {
        return $this->debutloc;
    }

    /**
     * Set finloc
     *
     * @param string $finloc
     *
     * @return Locatasl
     */
    public function setFinloc($finloc)
    {
        $this->finloc = $finloc;

        return $this;
    }

    /**
     * Get finloc
     *
     * @return string
     */
    public function getFinloc()
    {
        return $this->finloc;
    }

    /**
     * Set facturerwe
     *
     * @param boolean $facturerwe
     *
     * @return Locatasl
     */
    public function setFacturerwe($facturerwe)
    {
        $this->facturerwe = $facturerwe;

        return $this;
    }

    /**
     * Get facturerwe
     *
     * @return boolean
     */
    public function getFacturerwe()
    {
        return $this->facturerwe;
    }

    /**
     * Set contributionverte
     *
     * @param boolean $contributionverte
     *
     * @return Locatasl
     */
    public function setContributionverte($contributionverte)
    {
        $this->contributionverte = $contributionverte;

        return $this;
    }

    /**
     * Get contributionverte
     *
     * @return boolean
     */
    public function getContributionverte()
    {
        return $this->contributionverte;
    }

    /**
     * Set assurance
     *
     * @param boolean $assurance
     *
     * @return Locatasl
     */
    public function setAssurance($assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return boolean
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * Set offreencours
     *
     * @param boolean $offreencours
     *
     * @return Locatasl
     */
    public function setOffreencours($offreencours)
    {
        $this->offreencours = $offreencours;

        return $this;
    }

    /**
     * Get offreencours
     *
     * @return boolean
     */
    public function getOffreencours()
    {
        return $this->offreencours;
    }

    /**
     * Set offrerefusee
     *
     * @param boolean $offrerefusee
     *
     * @return Locatasl
     */
    public function setOffrerefusee($offrerefusee)
    {
        $this->offrerefusee = $offrerefusee;

        return $this;
    }

    /**
     * Get offrerefusee
     *
     * @return boolean
     */
    public function getOffrerefusee()
    {
        return $this->offrerefusee;
    }

    /**
     * Set contrat
     *
     * @param boolean $contrat
     *
     * @return Locatasl
     */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return boolean
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set clientid
     *
     * @param integer $clientid
     *
     * @return Locatasl
     */
    public function setClientid($clientid)
    {
        $this->clientid = $clientid;

        return $this;
    }

    /**
     * Get clientid
     *
     * @return integer
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Locatasl
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set transportaller
     *
     * @param integer $transportaller
     *
     * @return Locatasl
     */
    public function setTransportaller($transportaller)
    {
        $this->transportaller = $transportaller;

        return $this;
    }

    /**
     * Get transportaller
     *
     * @return integer
     */
    public function getTransportaller()
    {
        return $this->transportaller;
    }

    /**
     * Set transportretour
     *
     * @param integer $transportretour
     *
     * @return Locatasl
     */
    public function setTransportretour($transportretour)
    {
        $this->transportretour = $transportretour;

        return $this;
    }

    /**
     * Get transportretour
     *
     * @return integer
     */
    public function getTransportretour()
    {
        return $this->transportretour;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Locatasl
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
     * Set datemodif
     *
     * @param string $datemodif
     *
     * @return Locatasl
     */
    public function setDatemodif($datemodif)
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    /**
     * Get datemodif
     *
     * @return string
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set acheteur
     *
     * @param string $acheteur
     *
     * @return Locatasl
     */
    public function setAcheteur($acheteur)
    {
        $this->acheteur = $acheteur;

        return $this;
    }

    /**
     * Get acheteur
     *
     * @return string
     */
    public function getAcheteur()
    {
        return $this->acheteur;
    }

    /**
     * Set adresse1
     *
     * @param string $adresse1
     *
     * @return Locatasl
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get adresse1
     *
     * @return string
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * Set adresse2
     *
     * @param string $adresse2
     *
     * @return Locatasl
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get adresse2
     *
     * @return string
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set adresse3
     *
     * @param string $adresse3
     *
     * @return Locatasl
     */
    public function setAdresse3($adresse3)
    {
        $this->adresse3 = $adresse3;

        return $this;
    }

    /**
     * Get adresse3
     *
     * @return string
     */
    public function getAdresse3()
    {
        return $this->adresse3;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Locatasl
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
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
     * @return Locatasl
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
     * Set bdcrecu
     *
     * @param boolean $bdcrecu
     *
     * @return Locatasl
     */
    public function setBdcrecu($bdcrecu)
    {
        $this->bdcrecu = $bdcrecu;

        return $this;
    }

    /**
     * Get bdcrecu
     *
     * @return boolean
     */
    public function getBdcrecu()
    {
        return $this->bdcrecu;
    }

    /**
     * Set contactchantier
     *
     * @param string $contactchantier
     *
     * @return Locatasl
     */
    public function setContactchantier($contactchantier)
    {
        $this->contactchantier = $contactchantier;

        return $this;
    }

    /**
     * Get contactchantier
     *
     * @return string
     */
    public function getContactchantier()
    {
        return $this->contactchantier;
    }

    /**
     * Set annulee
     *
     * @param boolean $annulee
     *
     * @return Locatasl
     */
    public function setAnnulee($annulee)
    {
        $this->annulee = $annulee;

        return $this;
    }

    /**
     * Get annulee
     *
     * @return boolean
     */
    public function getAnnulee()
    {
        return $this->annulee;
    }

    /**
     * Set montantloc
     *
     * @param integer $montantloc
     *
     * @return Locatasl
     */
    public function setMontantloc($montantloc)
    {
        $this->montantloc = $montantloc;

        return $this;
    }

    /**
     * Get montantloc
     *
     * @return integer
     */
    public function getMontantloc()
    {
        return $this->montantloc;
    }

    /**
     * Add locationssl
     *
     * @param \Bacloo\CrmBundle\Entity\Locationssl $locationssl
     *
     * @return Locatasl
     */
    public function addLocationssl(\Bacloo\CrmBundle\Entity\Locationssl $locationssl)
    {
        $this->locationssl[] = $locationssl;

        return $this;
    }

    /**
     * Remove locationssl
     *
     * @param \Bacloo\CrmBundle\Entity\Locationssl $locationssl
     */
    public function removeLocationssl(\Bacloo\CrmBundle\Entity\Locationssl $locationssl)
    {
        $this->locationssl->removeElement($locationssl);
    }

    /**
     * Set remise
     *
     * @param integer $remise
     *
     * @return Locatasl
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return integer
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set numbdc
     *
     * @param integer $numbdc
     *
     * @return Locatasl
     */
    public function setNumbdc($numbdc)
    {
        $this->numbdc = $numbdc;

        return $this;
    }

    /**
     * Get numbdc
     *
     * @return integer
     */
    public function getNumbdc()
    {
        return $this->numbdc;
    }
}
