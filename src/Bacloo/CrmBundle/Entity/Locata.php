<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locata
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LocataRepository")
 */
class Locata
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="chantierid", type="integer", nullable=true)
     */
    public $chantierid;

    /**
     * @var string
     *
     * @ORM\Column(name="nomchantier", type="string", length=255, nullable=true)
     */
    public $nomchantier;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse1", type="string", length=255, nullable=true)
     */
    public $adresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2", type="string", length=255, nullable=true)
     */
    public $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse3", type="string", length=255, nullable=true)
     */
    public $adresse3;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true, nullable=true)
     */
    public $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true, nullable=true)
     */
    public $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientid", type="integer", type="integer", nullable=true)
     */
    public $clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255, nullable=true)
     */
    public $client;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    public $user;

    /**
     * @var string
     *
     * @ORM\Column(name="acheteur", type="string", length=255, nullable=true)
     */
    public $acheteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contactchantier", type="string", length=255, nullable=true)
     */
    public $contactchantier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemodif", type="string", nullable=true)
     */
    public $datemodif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecrea", type="string", nullable=true)
     */
    public $datecrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debutloc", type="string", nullable=true)
     */
    public $debutloc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finloc", type="string", nullable=true)
     */
    public $finloc;

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
    public $contributionverte;

    /**
     * @var decimal
     *
     * @ORM\Column(name="assurance", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $assurance;

    /**
     * @var string
     *
     * @ORM\Column(name="offreencours", type="boolean", length=255, nullable=true)
     */
    public $offreencours;

    /**
     * @var string
     *
     * @ORM\Column(name="bdcrecu", type="boolean", length=255, nullable=true)
     */
    public $bdcrecu;

    /**
     * @var string
     *
     * @ORM\Column(name="offrerefusee", type="boolean", length=255, nullable=true)
     */
    public $offrerefusee;

    /**
     * @var string
     *
     * @ORM\Column(name="contrat", type="boolean", length=255, nullable=true)
     */
    public $contrat;

    /**
     * @var string
     *
     * @ORM\Column(name="annulee", type="boolean", length=255, nullable=true)
     */
    public $annulee;

    /**
     * @var integer
     *
     * @ORM\Column(name="transportaller", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $transportaller;

    /**
     * @var integer
     *
     * @ORM\Column(name="transportretour", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $transportretour;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantloc", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $montantloc;

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
    public $montantcarb;

    /**
     * @var decimal
     *
     * @ORM\Column(name="remise", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $remise;

    /**
     * @var integer
     *
     * @ORM\Column(name="caution", type="integer", nullable=true)
     */
    public $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="numbdc", type="string", length=255, nullable=true)
     */
    public $numbdc;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    public $commentaire;

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
    public $prixgnr;

    /**
     * @var string
     *
     * @ORM\Column(name="transporteur", type="string", length=255, nullable=true)
     */
    public $transporteur;

    /**
     * @var string
     *
     * @ORM\Column(name="transporteurid", type="string", length=255, nullable=true)
     */
    public $transporteurid;

    /**
     * @var string
     *
     * @ORM\Column(name="transporteurretourid", type="string", length=255, nullable=true)
     */
    public $transporteurretourid;

    /**
     * @var string
     *
     * @ORM\Column(name="transporteurretour", type="string", length=255, nullable=true)
     */
    public $transporteurretour;

    /**
     * @var integer
     *
     * @ORM\Column(name="idbdcaller", type="integer", nullable=true)
     */
    public $idbdcaller;

    /**
     * @var integer
     *
     * @ORM\Column(name="idbdcretour", type="integer", nullable=true)
     */
    public $idbdcretour;

    /**
     * @var integer
     *
     * @ORM\Column(name="compteurdevis", type="integer", type="integer", nullable=true)
     */
    public $compteurdevis;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateenvoidevis", type="datetime", nullable=true)
     */
    public $dateenvoidevis;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateenvoiproforma", type="datetime", nullable=true)
     */
    public $dateenvoiproforma;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateenvoicontrat", type="datetime", nullable=true)
     */
    public $dateenvoicontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatairedevis", type="string", nullable=true)
     */
    public $destinatairedevis;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatairecontrat", type="string", nullable=true)
     */
    public $destinatairecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="transportok", type="string", nullable=true)
     */
    public $transportok;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataireproforma", type="string", nullable=true)
     */
    public $destinataireproforma;

    /**
     * @var string
     *
     * @ORM\Column(name="numbdcloueur", type="string", nullable=true)
     */
    public $numbdcloueur;

    /**
     * @var decimal
     *
     * @ORM\Column(name="acompte", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $acompte;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locations", cascade={"persist"}, orphanRemoval=true)
   */	
	public $locations;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locationssl", cascade={"persist"}, orphanRemoval=true)
   */	
	public $locationssl;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locataventes", cascade={"persist"}, orphanRemoval=true)
   */	
	public $locataventes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locationssl = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locataventes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * Set facturersamedi
     *
     * @param boolean $facturersamedi
     *
     * @return Locata
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
     * @return Locata
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
     * Set contributionverte
     *
     * @param string $contributionverte
     *
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * Set montantlocavente
     *
     * @param string $montantlocavente
     *
     * @return Locata
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
     * Set montantcarb
     *
     * @param string $montantcarb
     *
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * @return Locata
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Locata
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
     * @return Locata
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
     * Add location
     *
     * @param \Bacloo\CrmBundle\Entity\Locations $location
     *
     * @return Locata
     */
    public function addLocation(\Bacloo\CrmBundle\Entity\Locations $location)
    {
        $this->locations[] = $location;

        return $this;
    }

    /**
     * Remove location
     *
     * @param \Bacloo\CrmBundle\Entity\Locations $location
     */
    public function removeLocation(\Bacloo\CrmBundle\Entity\Locations $location)
    {
        $this->locations->removeElement($location);
    }

    /**
     * Get locations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Add locationssl
     *
     * @param \Bacloo\CrmBundle\Entity\Locationssl $locationssl
     *
     * @return Locata
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
     * Get locationssl
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocationssl()
    {
        return $this->locationssl;
    }

    /**
     * Add locatavente
     *
     * @param \Bacloo\CrmBundle\Entity\Locataventes $locatavente
     *
     * @return Locata
     */
    public function addLocatavente(\Bacloo\CrmBundle\Entity\Locataventes $locatavente)
    {
        $this->locataventes[] = $locatavente;

        return $this;
    }

    /**
     * Remove locatavente
     *
     * @param \Bacloo\CrmBundle\Entity\Locataventes $locatavente
     */
    public function removeLocatavente(\Bacloo\CrmBundle\Entity\Locataventes $locatavente)
    {
        $this->locataventes->removeElement($locatavente);
    }

    /**
     * Get locataventes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocataventes()
    {
        return $this->locataventes;
    }

    /**
     * Set transporteur
     *
     * @param string $transporteur
     *
     * @return Locata
     */
    public function setTransporteur($transporteur)
    {
        $this->transporteur = $transporteur;

        return $this;
    }

    /**
     * Get transporteur
     *
     * @return string
     */
    public function getTransporteur()
    {
        return $this->transporteur;
    }

    /**
     * Set transporteurretour
     *
     * @param string $transporteurretour
     *
     * @return Locata
     */
    public function setTransporteurretour($transporteurretour)
    {
        $this->transporteurretour = $transporteurretour;

        return $this;
    }

    /**
     * Get transporteurretour
     *
     * @return string
     */
    public function getTransporteurretour()
    {
        return $this->transporteurretour;
    }

    /**
     * Set transporteurid
     *
     * @param string $transporteurid
     *
     * @return Locata
     */
    public function setTransporteurid($transporteurid)
    {
        $this->transporteurid = $transporteurid;

        return $this;
    }

    /**
     * Get transporteurid
     *
     * @return string
     */
    public function getTransporteurid()
    {
        return $this->transporteurid;
    }

    /**
     * Set transporteurretourid
     *
     * @param string $transporteurretourid
     *
     * @return Locata
     */
    public function setTransporteurretourid($transporteurretourid)
    {
        $this->transporteurretourid = $transporteurretourid;

        return $this;
    }

    /**
     * Get transporteurretourid
     *
     * @return string
     */
    public function getTransporteurretourid()
    {
        return $this->transporteurretourid;
    }

    /**
     * Set facturationferies
     *
     * @param boolean $facturationferies
     *
     * @return Locata
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
     * Set idbdcaller
     *
     * @param integer $idbdcaller
     *
     * @return Locata
     */
    public function setIdbdcaller($idbdcaller)
    {
        $this->idbdcaller = $idbdcaller;

        return $this;
    }

    /**
     * Get idbdcaller
     *
     * @return integer
     */
    public function getIdbdcaller()
    {
        return $this->idbdcaller;
    }

    /**
     * Set idbdcretour
     *
     * @param integer $idbdcretour
     *
     * @return Locata
     */
    public function setIdbdcretour($idbdcretour)
    {
        $this->idbdcretour = $idbdcretour;

        return $this;
    }

    /**
     * Get idbdcretour
     *
     * @return integer
     */
    public function getIdbdcretour()
    {
        return $this->idbdcretour;
    }

    /**
     * Set compteurdevis
     *
     * @param integer $compteurdevis
     *
     * @return Locata
     */
    public function setCompteurdevis($compteurdevis)
    {
        $this->compteurdevis = $compteurdevis;

        return $this;
    }

    /**
     * Get compteurdevis
     *
     * @return integer
     */
    public function getCompteurdevis()
    {
        return $this->compteurdevis;
    }

    /**
     * Set dateenvoidevis
     *
     * @param \DateTime $dateenvoidevis
     *
     * @return Locata
     */
    public function setDateenvoidevis($dateenvoidevis)
    {
        $this->dateenvoidevis = $dateenvoidevis;

        return $this;
    }

    /**
     * Get dateenvoidevis
     *
     * @return \DateTime
     */
    public function getDateenvoidevis()
    {
        return $this->dateenvoidevis;
    }

    /**
     * Set dateenvoiproforma
     *
     * @param \DateTime $dateenvoiproforma
     *
     * @return Locata
     */
    public function setDateenvoiproforma($dateenvoiproforma)
    {
        $this->dateenvoiproforma = $dateenvoiproforma;

        return $this;
    }

    /**
     * Get dateenvoiproforma
     *
     * @return \DateTime
     */
    public function getDateenvoiproforma()
    {
        return $this->dateenvoiproforma;
    }

    /**
     * Set dateenvoicontrat
     *
     * @param \DateTime $dateenvoicontrat
     *
     * @return Locata
     */
    public function setDateenvoicontrat($dateenvoicontrat)
    {
        $this->dateenvoicontrat = $dateenvoicontrat;

        return $this;
    }

    /**
     * Get dateenvoicontrat
     *
     * @return \DateTime
     */
    public function getDateenvoicontrat()
    {
        return $this->dateenvoicontrat;
    }

    /**
     * Set destinatairedevis
     *
     * @param string $destinatairedevis
     *
     * @return Locata
     */
    public function setDestinatairedevis($destinatairedevis)
    {
        $this->destinatairedevis = $destinatairedevis;

        return $this;
    }

    /**
     * Get destinatairedevis
     *
     * @return string
     */
    public function getDestinatairedevis()
    {
        return $this->destinatairedevis;
    }

    /**
     * Set destinatairecontrat
     *
     * @param string $destinatairecontrat
     *
     * @return Locata
     */
    public function setDestinatairecontrat($destinatairecontrat)
    {
        $this->destinatairecontrat = $destinatairecontrat;

        return $this;
    }

    /**
     * Get destinatairecontrat
     *
     * @return string
     */
    public function getDestinatairecontrat()
    {
        return $this->destinatairecontrat;
    }

    /**
     * Set destinataireproforma
     *
     * @param string $destinataireproforma
     *
     * @return Locata
     */
    public function setDestinataireproforma($destinataireproforma)
    {
        $this->destinataireproforma = $destinataireproforma;

        return $this;
    }

    /**
     * Get destinataireproforma
     *
     * @return string
     */
    public function getDestinataireproforma()
    {
        return $this->destinataireproforma;
    }

    /**
     * Set datecrea
     *
     * @param string $datecrea
     *
     * @return Locata
     */
    public function setDatecrea($datecrea)
    {
        $this->datecrea = $datecrea;

        return $this;
    }

    /**
     * Get datecrea
     *
     * @return string
     */
    public function getDatecrea()
    {
        return $this->datecrea;
    }

    /**
     * Set commentairecache
     *
     * @param string $commentairecache
     *
     * @return Locata
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
     * Set numbdcloueur
     *
     * @param string $numbdcloueur
     *
     * @return Locata
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
     * @return Locata
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
     * Set prixcarb
     *
     * @param string $prixcarb
     *
     * @return Locata
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
     * @return Locata
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
