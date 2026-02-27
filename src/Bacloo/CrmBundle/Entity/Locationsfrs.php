<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationsfrs
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LocationsfrsRepository")
 */
class Locationsfrs
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
     * @ORM\Column(name="codeclient", type="string", length=255, nullable=true)
     */
    private $codeclient;

    /**
     * @var integer
     *
     * @ORM\Column(name="fournisseurid", type="integer", nullable=true)
     */
    private $fournisseurid;

    /**
     * @var string
     *
     * @ORM\Column(name="fournisseur", type="string", length=255)
     */
    private $fournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255, nullable=true)
     */
    private $designation;

    /**
     * @var decimal
     *
     * @ORM\Column(name="pu", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $pu;

    /**
     * @var decimal
     *
     * @ORM\Column(name="quantite", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $quantite;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantht", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantht;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantttc;

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
     * @var decimal
     *
     * @ORM\Column(name="mensuel", type="boolean", length=255, nullable=true)
     */
    private $mensuel;

    /**
     * @var integer
     *
     * @ORM\Column(name="codelocationsl", type="integer", length=255, nullable=true)
     */
    private $codelocationsl;

    /**
     * @var string
     *
     * @ORM\Column(name="facturersamedi", type="boolean", length=255, nullable=true)
     */
    public $facturersamedi;

    /**
     * @var string
     *
     * @ORM\Column(name="facturerdimanche", type="boolean", length=255, nullable=true)
     */
    public $facturerdimanche;

    /**
     * @var string
     *
     * @ORM\Column(name="facturationferies", type="boolean", length=255, nullable=true)
     */
    public $facturationferies;

    /**
     * @var integer
     *
     * @ORM\Column(name="cloture", type="integer", nullable=true, options={"default" : "0"})
     */
    private $cloture = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="def", type="integer", type="integer", nullable=true)
     */
    private $def;

    /**
     * @var decimal
     *
     * @ORM\Column(name="contributionverte", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $contributionverte;

    /**
     * @var decimal
     *
     * @ORM\Column(name="aechoir", type="boolean", length=255, nullable=true)
     */
    private $aechoir;

    /**
     * @var decimal
     *
     * @ORM\Column(name="assurance", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $assurance;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbjlocass", type="integer", nullable=true)
     */
    Public $nbjlocass;

    /**
     * @var string
     *
     * @ORM\Column(name="refprod", type="string", length=255, nullable=true)
     */
    private $refprod;

    /**
     * @var integer
     *
     * @ORM\Column(name="speedachat", type="integer", nullable=true)
     */
    public $speedachat;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="machineid", type="integer", length=255, nullable=true)
     */
    private $machineid;
	
    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locatafrs", cascade={"persist"}, orphanRemoval=true)
     */ 		
	Private $locatafrs;
	

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locatafrs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeclient
     *
     * @param string $codeclient
     *
     * @return Locationsfrs
     */
    public function setCodeclient($codeclient)
    {
        $this->codeclient = $codeclient;

        return $this;
    }

    /**
     * Get codeclient
     *
     * @return string
     */
    public function getCodeclient()
    {
        return $this->codeclient;
    }

    /**
     * Set fournisseurid
     *
     * @param integer $fournisseurid
     *
     * @return Locationsfrs
     */
    public function setFournisseurid($fournisseurid)
    {
        $this->fournisseurid = $fournisseurid;

        return $this;
    }

    /**
     * Get fournisseurid
     *
     * @return integer
     */
    public function getFournisseurid()
    {
        return $this->fournisseurid;
    }

    /**
     * Set fournisseur
     *
     * @param string $fournisseur
     *
     * @return Locationsfrs
     */
    public function setFournisseur($fournisseur)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return string
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Locationsfrs
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Locationsfrs
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set pu
     *
     * @param string $pu
     *
     * @return Locationsfrs
     */
    public function setPu($pu)
    {
        $this->pu = $pu;

        return $this;
    }

    /**
     * Get pu
     *
     * @return string
     */
    public function getPu()
    {
        return $this->pu;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Locationsfrs
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set montantht
     *
     * @param integer $montantht
     *
     * @return Locationsfrs
     */
    public function setMontantht($montantht)
    {
        $this->montantht = $montantht;

        return $this;
    }

    /**
     * Get montantht
     *
     * @return integer
     */
    public function getMontantht()
    {
        return $this->montantht;
    }

    /**
     * Add locatafr
     *
     * @param \Bacloo\CrmBundle\Entity\Locatafrs $locatafr
     *
     * @return Locationsfrs
     */
    public function addLocatafr(\Bacloo\CrmBundle\Entity\Locatafrs $locatafr)
    {
        $this->locatafrs[] = $locatafr;

        return $this;
    }

    /**
     * Remove locatafr
     *
     * @param \Bacloo\CrmBundle\Entity\Locatafrs $locatafr
     */
    public function removeLocatafr(\Bacloo\CrmBundle\Entity\Locatafrs $locatafr)
    {
        $this->locatafrs->removeElement($locatafr);
    }

    /**
     * Get locatafrs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocatafrs()
    {
        return $this->locatafrs;
    }

    /**
     * Set debutloc
     *
     * @param string $debutloc
     *
     * @return Locationsfrs
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
     * @return Locationsfrs
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
     * Set mensuel
     *
     * @param boolean $mensuel
     *
     * @return Locationsfrs
     */
    public function setMensuel($mensuel)
    {
        $this->mensuel = $mensuel;

        return $this;
    }

    /**
     * Get mensuel
     *
     * @return boolean
     */
    public function getMensuel()
    {
        return $this->mensuel;
    }

    /**
     * Set codelocationsl
     *
     * @param integer $codelocationsl
     *
     * @return Locationsfrs
     */
    public function setCodelocationsl($codelocationsl)
    {
        $this->codelocationsl = $codelocationsl;

        return $this;
    }

    /**
     * Get codelocationsl
     *
     * @return integer
     */
    public function getCodelocationsl()
    {
        return $this->codelocationsl;
    }

    /**
     * Set facturersamedi
     *
     * @param boolean $facturersamedi
     *
     * @return Locationsfrs
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
     * @return Locationsfrs
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
     * Set cloture
     *
     * @param integer $cloture
     *
     * @return Locationsfrs
     */
    public function setCloture($cloture)
    {
        $this->cloture = $cloture;

        return $this;
    }

    /**
     * Get cloture
     *
     * @return integer
     */
    public function getCloture()
    {
        return $this->cloture;
    }

    /**
     * Set def
     *
     * @param integer $def
     *
     * @return Locationsfrs
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
     * Set montantttc
     *
     * @param string $montantttc
     *
     * @return Locationsfrs
     */
    public function setMontantttc($montantttc)
    {
        $this->montantttc = $montantttc;

        return $this;
    }

    /**
     * Get montantttc
     *
     * @return string
     */
    public function getMontantttc()
    {
        return $this->montantttc;
    }

    /**
     * Set contributionverte
     *
     * @param string $contributionverte
     *
     * @return Locationsfrs
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
     * Set aechoir
     *
     * @param boolean $aechoir
     *
     * @return Locationsfrs
     */
    public function setAechoir($aechoir)
    {
        $this->aechoir = $aechoir;

        return $this;
    }

    /**
     * Get aechoir
     *
     * @return boolean
     */
    public function getAechoir()
    {
        return $this->aechoir;
    }

    /**
     * Set assurance
     *
     * @param string $assurance
     *
     * @return Locationsfrs
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
     * Set nbjlocass
     *
     * @param integer $nbjlocass
     *
     * @return Locationsfrs
     */
    public function setNbjlocass($nbjlocass)
    {
        $this->nbjlocass = $nbjlocass;

        return $this;
    }

    /**
     * Get nbjlocass
     *
     * @return integer
     */
    public function getNbjlocass()
    {
        return $this->nbjlocass;
    }

    /**
     * Set speedachat
     *
     * @param integer $speedachat
     *
     * @return Locationsfrs
     */
    public function setSpeedachat($speedachat)
    {
        $this->speedachat = $speedachat;

        return $this;
    }

    /**
     * Get speedachat
     *
     * @return integer
     */
    public function getSpeedachat()
    {
        return $this->speedachat;
    }

    /**
     * Set facturationferies
     *
     * @param boolean $facturationferies
     *
     * @return Locationsfrs
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
     * Set refprod
     *
     * @param string $refprod
     *
     * @return Locationsfrs
     */
    public function setRefprod($refprod)
    {
        $this->refprod = $refprod;

        return $this;
    }

    /**
     * Get refprod
     *
     * @return string
     */
    public function getRefprod()
    {
        return $this->refprod;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Locationsfrs
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set machineid
     *
     * @param integer $machineid
     *
     * @return Locationsfrs
     */
    public function setMachineid($machineid)
    {
        $this->machineid = $machineid;

        return $this;
    }

    /**
     * Get machineid
     *
     * @return integer
     */
    public function getMachineid()
    {
        return $this->machineid;
    }
}
