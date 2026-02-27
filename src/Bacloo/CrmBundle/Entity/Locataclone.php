<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locataclone
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LocatacloneRepository")
 */
class Locataclone
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
     * @ORM\Column(name="nomchantier", type="string", length=255, nullable=true)
     */
    private $nomchantier;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse1", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="facturersamedi", type="boolean", length=255, nullable=true)
     */
    public $facturersamedi;

    /**
     * @var string
     *
     * @ORM\Column(name="facturationferies", type="boolean", length=255, nullable=true)
     */
    public $facturationferies;

    /**
     * @var string
     *
     * @ORM\Column(name="facturerdimanche", type="boolean", length=255, nullable=true)
     */
    public $facturerdimanche;

    /**
     * @var decimal
     *
     * @ORM\Column(name="contributionverte", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $contributionverte;

    /**
     * @var decimal
     *
     * @ORM\Column(name="assurance", type="decimal", precision=12, scale=2, nullable=true)
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
     * @ORM\Column(name="transportaller", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $transportaller;

    /**
     * @var integer
     *
     * @ORM\Column(name="transportretour", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $transportretour;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantloc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantloc;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantlocavente", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $montantlocavente;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantcarb", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantcarb;

    /**
     * @var decimal
     *
     * @ORM\Column(name="prixcarb", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $prixcarb;

    /**
     * @var string
     *
     * @ORM\Column(name="prixgnr", type="decimal", precision=12, scale=2, nullable=true, options={"default" : "2.05"})
     */
    private $prixgnr;

    /**
     * @var decimal
     *
     * @ORM\Column(name="remise", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $remise;

    /**
     * @var integer
     *
     * @ORM\Column(name="caution", type="integer", nullable=true)
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="numbdc", type="string", length=255, nullable=true)
     */
    private $numbdc;

    /**
     * @var integer
     *
     * @ORM\Column(name="oldid", type="integer", nullable=true)
     */
    private $oldid;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="commentairecache", type="text", nullable=true)
     */
    public $commentairecache;

    /**
     * @var integer
     *
     * @ORM\Column(name="spacer", type="integer", nullable=true)
     */
    public $spacer;

    /**
     * @var string
     *
     * @ORM\Column(name="factor", type="boolean", length=255, nullable=true)
     */
    public $factor;

    /**
     * @var integer
     *
     * @ORM\Column(name="def", type="integer", type="integer", nullable=true)
     */
    private $def;

    /**
     * @var string
     *
     * @ORM\Column(name="alerte", type="string", length=255, nullable=true)
     */
    private $alerte;

    /**
     * @var string
     *
     * @ORM\Column(name="numbdcloueur", type="string", nullable=true)
     */
    public $numbdcloueur;

    /**
     * @var string
     *
     * @ORM\Column(name="transportok", type="string", nullable=true)
     */
    public $transportok;

    /**
     * @var decimal
     *
     * @ORM\Column(name="acompte", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $acompte;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locationsclone", cascade={"persist"}, orphanRemoval=true)
   */	
	Private $locationsclone;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locataventesclone", cascade={"persist"}, orphanRemoval=true)
   */	
	Private $locataventesclone;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locationsslclone", cascade={"persist"}, orphanRemoval=true)
   */	
	Private $locationsslclone;
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locationsclone = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locationsslclone = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set chantierid
     *
     * @param integer $chantierid
     *
     * @return Locataclone
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
     * @return Locataclone
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
     * Set adresse1
     *
     * @param string $adresse1
     *
     * @return Locataclone
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
     * @return Locataclone
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
     * @return Locataclone
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
     * @param string $cp
     *
     * @return Locataclone
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
     * @return Locataclone
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
     * Set clientid
     *
     * @param integer $clientid
     *
     * @return Locataclone
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
     * @return Locataclone
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
     * Set user
     *
     * @param string $user
     *
     * @return Locataclone
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
     * Set acheteur
     *
     * @param string $acheteur
     *
     * @return Locataclone
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
     * Set contactchantier
     *
     * @param string $contactchantier
     *
     * @return Locataclone
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
     * Set datemodif
     *
     * @param string $datemodif
     *
     * @return Locataclone
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
     * Set debutloc
     *
     * @param string $debutloc
     *
     * @return Locataclone
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
     * @return Locataclone
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
     * Set contributionverte
     *
     * @param string $contributionverte
     *
     * @return Locataclone
     */
    public function setContributionverte($contributionverte)
    {
        $this->contributionverte = $contributionverte;

        return $this;
    }

    /**
     * Get contributionverte
     *
     * @return string
     */
    public function getContributionverte()
    {
        return $this->contributionverte;
    }

    /**
     * Set assurance
     *
     * @param string $assurance
     *
     * @return Locataclone
     */
    public function setAssurance($assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return string
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
     * @return Locataclone
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
     * Set bdcrecu
     *
     * @param boolean $bdcrecu
     *
     * @return Locataclone
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
     * Set offrerefusee
     *
     * @param boolean $offrerefusee
     *
     * @return Locataclone
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
     * @return Locataclone
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
     * Set annulee
     *
     * @param boolean $annulee
     *
     * @return Locataclone
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
     * Set transportaller
     *
     * @param integer $transportaller
     *
     * @return Locataclone
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
     * @return Locataclone
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
     * Set montantloc
     *
     * @param string $montantloc
     *
     * @return Locataclone
     */
    public function setMontantloc($montantloc)
    {
        $this->montantloc = $montantloc;

        return $this;
    }

    /**
     * Get montantloc
     *
     * @return string
     */
    public function getMontantloc()
    {
        return $this->montantloc;
    }

    /**
     * Set montantcarb
     *
     * @param string $montantcarb
     *
     * @return Locataclone
     */
    public function setMontantcarb($montantcarb)
    {
        $this->montantcarb = $montantcarb;

        return $this;
    }

    /**
     * Get montantcarb
     *
     * @return string
     */
    public function getMontantcarb()
    {
        return $this->montantcarb;
    }

    /**
     * Set remise
     *
     * @param integer $remise
     *
     * @return Locataclone
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
     * Set caution
     *
     * @param integer $caution
     *
     * @return Locataclone
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution
     *
     * @return integer
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set numbdc
     *
     * @param string $numbdc
     *
     * @return Locataclone
     */
    public function setNumbdc($numbdc)
    {
        $this->numbdc = $numbdc;

        return $this;
    }

    /**
     * Get numbdc
     *
     * @return string
     */
    public function getNumbdc()
    {
        return $this->numbdc;
    }

    /**
     * Add locationsclone
     *
     * @param \Bacloo\CrmBundle\Entity\Locationsclone $locationsclone
     *
     * @return Locataclone
     */
    public function addLocationsclone(\Bacloo\CrmBundle\Entity\Locationsclone $locationsclone)
    {
        $this->locationsclone[] = $locationsclone;

        return $this;
    }

    /**
     * Remove locationsclone
     *
     * @param \Bacloo\CrmBundle\Entity\Locationsclone $locationsclone
     */
    public function removeLocationsclone(\Bacloo\CrmBundle\Entity\Locationsclone $locationsclone)
    {
        $this->locationsclone->removeElement($locationsclone);
    }

    /**
     * Get locationsclone
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocationsclone()
    {
        return $this->locationsclone;
    }

    /**
     * Add locationsslclone
     *
     * @param \Bacloo\CrmBundle\Entity\Locationsslclone $locationsslclone
     *
     * @return Locataclone
     */
    public function addLocationsslclone(\Bacloo\CrmBundle\Entity\Locationsslclone $locationsslclone)
    {
        $this->locationsslclone[] = $locationsslclone;

        return $this;
    }

    /**
     * Remove locationsslclone
     *
     * @param \Bacloo\CrmBundle\Entity\Locationsslclone $locationsslclone
     */
    public function removeLocationsslclone(\Bacloo\CrmBundle\Entity\Locationsslclone $locationsslclone)
    {
        $this->locationsslclone->removeElement($locationsslclone);
    }

    /**
     * Get locationsslclone
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocationsslclone()
    {
        return $this->locationsslclone;
    }

    /**
     * Set oldid
     *
     * @param integer $oldid
     *
     * @return Locataclone
     */
    public function setOldid($oldid)
    {
        $this->oldid = $oldid;

        return $this;
    }

    /**
     * Get oldid
     *
     * @return integer
     */
    public function getOldid()
    {
        return $this->oldid;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Locataclone
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
     * Set spacer
     *
     * @param integer $spacer
     *
     * @return Locataclone
     */
    public function setSpacer($spacer)
    {
        $this->spacer = $spacer;

        return $this;
    }

    /**
     * Get spacer
     *
     * @return integer
     */
    public function getSpacer()
    {
        return $this->spacer;
    }

    /**
     * Set montantlocavente
     *
     * @param string $montantlocavente
     *
     * @return Locataclone
     */
    public function setMontantlocavente($montantlocavente)
    {
        $this->montantlocavente = $montantlocavente;

        return $this;
    }

    /**
     * Get montantlocavente
     *
     * @return string
     */
    public function getMontantlocavente()
    {
        return $this->montantlocavente;
    }

    /**
     * Add locataventesclone
     *
     * @param \Bacloo\CrmBundle\Entity\locataventesclone $locataventesclone
     *
     * @return Locataclone
     */
    public function addLocataventesclone(\Bacloo\CrmBundle\Entity\locataventesclone $locataventesclone)
    {
        $this->locataventesclone[] = $locataventesclone;

        return $this;
    }

    /**
     * Remove locataventesclone
     *
     * @param \Bacloo\CrmBundle\Entity\locataventesclone $locataventesclone
     */
    public function removeLocataventesclone(\Bacloo\CrmBundle\Entity\locataventesclone $locataventesclone)
    {
        $this->locataventesclone->removeElement($locataventesclone);
    }

    /**
     * Get locataventesclone
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocataventesclone()
    {
        return $this->locataventesclone;
    }

    /**
     * Set facturersamedi
     *
     * @param boolean $facturersamedi
     *
     * @return Locataclone
     */
    public function setFacturersamedi($facturersamedi)
    {
        $this->facturersamedi = $facturersamedi;

        return $this;
    }

    /**
     * Get facturersamedi
     *
     * @return boolean
     */
    public function getFacturersamedi()
    {
        return $this->facturersamedi;
    }

    /**
     * Set facturerdimanche
     *
     * @param boolean $facturerdimanche
     *
     * @return Locataclone
     */
    public function setFacturerdimanche($facturerdimanche)
    {
        $this->facturerdimanche = $facturerdimanche;

        return $this;
    }

    /**
     * Get facturerdimanche
     *
     * @return boolean
     */
    public function getFacturerdimanche()
    {
        return $this->facturerdimanche;
    }

    /**
     * Set def
     *
     * @param integer $def
     *
     * @return Locataclone
     */
    public function setDef($def)
    {
        $this->def = $def;

        return $this;
    }

    /**
     * Get def
     *
     * @return integer
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * Set facturationferies
     *
     * @param boolean $facturationferies
     *
     * @return Locataclone
     */
    public function setFacturationferies($facturationferies)
    {
        $this->facturationferies = $facturationferies;

        return $this;
    }

    /**
     * Get facturationferies
     *
     * @return boolean
     */
    public function getFacturationferies()
    {
        return $this->facturationferies;
    }

    /**
     * Set commentairecache
     *
     * @param string $commentairecache
     *
     * @return Locataclone
     */
    public function setCommentairecache($commentairecache)
    {
        $this->commentairecache = $commentairecache;

        return $this;
    }

    /**
     * Get commentairecache
     *
     * @return string
     */
    public function getCommentairecache()
    {
        return $this->commentairecache;
    }

    /**
     * Set alerte
     *
     * @param string $alerte
     *
     * @return Locataclone
     */
    public function setAlerte($alerte)
    {
        $this->alerte = $alerte;

        return $this;
    }

    /**
     * Get alerte
     *
     * @return string
     */
    public function getAlerte()
    {
        return $this->alerte;
    }

    /**
     * Set numbdcloueur
     *
     * @param string $numbdcloueur
     *
     * @return Locataclone
     */
    public function setNumbdcloueur($numbdcloueur)
    {
        $this->numbdcloueur = $numbdcloueur;

        return $this;
    }

    /**
     * Get numbdcloueur
     *
     * @return string
     */
    public function getNumbdcloueur()
    {
        return $this->numbdcloueur;
    }

    /**
     * Set transportok
     *
     * @param string $transportok
     *
     * @return Locataclone
     */
    public function setTransportok($transportok)
    {
        $this->transportok = $transportok;

        return $this;
    }

    /**
     * Get transportok
     *
     * @return string
     */
    public function getTransportok()
    {
        return $this->transportok;
    }

    /**
     * Set factor
     *
     * @param boolean $factor
     *
     * @return Locataclone
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;

        return $this;
    }

    /**
     * Get factor
     *
     * @return boolean
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Set prixcarb
     *
     * @param string $prixcarb
     *
     * @return Locataclone
     */
    public function setPrixcarb($prixcarb)
    {
        $this->prixcarb = $prixcarb;

        return $this;
    }

    /**
     * Get prixcarb
     *
     * @return string
     */
    public function getPrixcarb()
    {
        return $this->prixcarb;
    }

    /**
     * Set prixgnr
     *
     * @param string $prixgnr
     *
     * @return Locataclone
     */
    public function setPrixgnr($prixgnr)
    {
        $this->prixgnr = $prixgnr;

        return $this;
    }

    /**
     * Get prixgnr
     *
     * @return string
     */
    public function getPrixgnr()
    {
        return $this->prixgnr;
    }

    /**
     * Set acompte
     *
     * @param string $acompte
     *
     * @return Locata
     */
    public function setAcompte($acompte)
    {
        $this->acompte = $acompte;

        return $this;
    }

    /**
     * Get acompte
     *
     * @return string
     */
    public function getAcompte()
    {
        return $this->acompte;
    }
}
