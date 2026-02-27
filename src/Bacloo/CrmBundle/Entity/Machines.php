<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machines
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\MachinesRepository")
 */
class Machines
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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="codegenerique", type="string", length=255)
     */
    private $codegenerique;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="num_serie", type="text", nullable=true)
     */
    private $numSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="etatlog", type="string", length=255, nullable=true)
     */
    private $etatlog;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prochaine_vgp", type="string", length=255, nullable=true)
     */
    private $prochaineVgp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateachat", type="string", length=255, nullable=true)
     */
    private $dateachat;

    /**
     *  @var \DateTime
     *
     * @ORM\Column(name="prochaine_revision", type="string", length=255, nullable=true)
     */
    private $prochaineRevision;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=255, nullable=true)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="nomchantier", type="string", length=255, nullable=true)
     */
    private $nomchantier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debutloc", type="string", length=255, nullable=true)
     */
    private $debutloc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finloc", type="string", length=255, nullable=true)
     */
    private $finloc;

    /**
     * @var string
     *
     * @ORM\Column(name="codelocations", length=255, nullable=true)
     */
    private $codelocations;

    /**
     * @var string
     *
     * @ORM\Column(name="codecontrat", length=255, nullable=true)
     */
    private $codecontrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientid", type="integer", nullable=true)
     */
    private $clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="original", length=255, nullable=true)
     */
    private $original;

    /**
     * @var string
     *
     * @ORM\Column(name="longueur", length=255, nullable=true)
     */
    private $longueur;

    /**
     * @var string
     *
     * @ORM\Column(name="largeur", length=255, nullable=true)
     */
    private $largeur;

    /**
     * @var string
     *
     * @ORM\Column(name="hauteur", length=255, nullable=true)
     */
    private $hauteur;

    /**
     * @var string
     *
     * @ORM\Column(name="poids", length=255, nullable=true)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="chargemax", length=255, nullable=true)
     */
    private $chargemax;

    /**
     * @var string
     *
     * @ORM\Column(name="deport", length=255, nullable=true)
     */
    private $deport;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="energie", type="string", length=255, nullable=true)
     */
    private $energie;

    /**
     * @var integer
     *
     * @ORM\Column(name="horametre", type="integer", nullable=true)
     */
    private $horametre;

    /**
     * @var string
     *
     * @ORM\Column(name="codeimmo", type="string", length=255, nullable=true)
     */
    public $codeimmo;

    /**
     * @var integer
     *
     * @ORM\Column(name="coutmensuel", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $coutmensuel;

    /**
     * @var decimal
     *
     * @ORM\Column(name="vr", type="decimal", precision=12, scale=2, nullable=true)
     */
    Public $vr;

    /**
     * @var decimal
     *
     * @ORM\Column(name="caprestantdu", type="decimal", precision=12, scale=2, nullable=true)
     */
    Public $caprestantdu;

    /**
     * @var decimal
     *
     * @ORM\Column(name="prixneuf", type="decimal", precision=12, scale=2, nullable=true)
     */
    Public $prixneuf;

    /**
     * @var decimal
     *
     * @ORM\Column(name="prixcasse", type="decimal", precision=12, scale=2, nullable=true)
     */
    Public $prixcasse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefincredit", type="string", nullable=true)
     */
    Public $datefincredit;

    /**
     * @var string
     *
     * @ORM\Column(name="prochainhorametre", type="string", length=255, nullable=true)
     */
    private $prochainhorametre;

    /**
     * @var string
     *
     * @ORM\Column(name="horametreactuel", type="string", length=255, nullable=true)
     */
    private $horametreactuel;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255, nullable=true)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=255, nullable=true)
     */
    private $modele;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateetat", type="string", nullable=true, nullable=true)
     */
    Public $dateetat;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Eventparc", cascade={"persist"}, orphanRemoval=true)
   */	
	Private $eventparc;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Eventsite", cascade={"persist"}, orphanRemoval=true)
   */	
	Private $eventsite;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Depensesmachine", cascade={"persist"}, orphanRemoval=true)
   */
	Private $depensesmachine;


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
     * Set code
     *
     * @param string $code
     *
     * @return Machines
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
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return Machines
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    /**
     * Get numSerie
     *
     * @return string
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Machines
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set prochaineVgp
     *
     * @param string $prochaineVgp
     *
     * @return Machines
     */
    public function setProchaineVgp($prochaineVgp)
    {
        $this->prochaineVgp = $prochaineVgp;

        return $this;
    }

    /**
     * Get prochaineVgp
     *
     * @return string
     */
    public function getProchaineVgp()
    {
        return $this->prochaineVgp;
    }

    /**
     * Set prochaineRevision
     *
     * @param string $prochaineRevision
     *
     * @return Machines
     */
    public function setProchaineRevision($prochaineRevision)
    {
        $this->prochaineRevision = $prochaineRevision;

        return $this;
    }

    /**
     * Get prochaineRevision
     *
     * @return string
     */
    public function getProchaineRevision()
    {
        return $this->prochaineRevision;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return Machines
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set nomchantier
     *
     * @param string $nomchantier
     *
     * @return Machines
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
     * Set debutloc
     *
     * @param string $debutloc
     *
     * @return Machines
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
     * @return Machines
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
     * Set codegenerique
     *
     * @param string $codegenerique
     *
     * @return Machines
     */
    public function setCodegenerique($codegenerique)
    {
        $this->codegenerique = $codegenerique;

        return $this;
    }

    /**
     * Get codegenerique
     *
     * @return string
     */
    public function getCodegenerique()
    {
        return $this->codegenerique;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Machines
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
     * Set codelocations
     *
     * @param string $codelocations
     *
     * @return Machines
     */
    public function setCodelocations($codelocations)
    {
        $this->codelocations = $codelocations;

        return $this;
    }

    /**
     * Get codelocations
     *
     * @return string
     */
    public function getCodelocations()
    {
        return $this->codelocations;
    }

    /**
     * Set original
     *
     * @param string $original
     *
     * @return Machines
     */
    public function setOriginal($original)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return string
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Set codecontrat
     *
     * @param string $codecontrat
     *
     * @return Machines
     */
    public function setCodecontrat($codecontrat)
    {
        $this->codecontrat = $codecontrat;

        return $this;
    }

    /**
     * Get codecontrat
     *
     * @return string
     */
    public function getCodecontrat()
    {
        return $this->codecontrat;
    }

    /**
     * Set clientid
     *
     * @param string $clientid
     *
     * @return Machines
     */
    public function setClientid($clientid)
    {
        $this->clientid = $clientid;

        return $this;
    }

    /**
     * Get clientid
     *
     * @return string
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Set longueur
     *
     * @param string $longueur
     *
     * @return Machines
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get longueur
     *
     * @return string
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set largeur
     *
     * @param string $largeur
     *
     * @return Machines
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return string
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set hauteur
     *
     * @param string $hauteur
     *
     * @return Machines
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return string
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set poids
     *
     * @param string $poids
     *
     * @return Machines
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set chargemax
     *
     * @param string $chargemax
     *
     * @return Machines
     */
    public function setChargemax($chargemax)
    {
        $this->chargemax = $chargemax;

        return $this;
    }

    /**
     * Get chargemax
     *
     * @return string
     */
    public function getChargemax()
    {
        return $this->chargemax;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventparc = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eventsite = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add eventparc
     *
     * @param \Bacloo\CrmBundle\Entity\Eventparc $eventparc
     *
     * @return Machines
     */
    public function addEventparc(\Bacloo\CrmBundle\Entity\Eventparc $eventparc)
    {
        $this->eventparc[] = $eventparc;

        return $this;
    }

    /**
     * Remove eventparc
     *
     * @param \Bacloo\CrmBundle\Entity\Eventparc $eventparc
     */
    public function removeEventparc(\Bacloo\CrmBundle\Entity\Eventparc $eventparc)
    {
        $this->eventparc->removeElement($eventparc);
    }

    /**
     * Get eventparc
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEventparc()
    {
        return $this->eventparc;
    }

    /**
     * Add eventsite
     *
     * @param \Bacloo\CrmBundle\Entity\Eventsite $eventsite
     *
     * @return Machines
     */
    public function addEventsite(\Bacloo\CrmBundle\Entity\Eventsite $eventsite)
    {
        $this->eventsite[] = $eventsite;

        return $this;
    }

    /**
     * Remove eventsite
     *
     * @param \Bacloo\CrmBundle\Entity\Eventsite $eventsite
     */
    public function removeEventsite(\Bacloo\CrmBundle\Entity\Eventsite $eventsite)
    {
        $this->eventsite->removeElement($eventsite);
    }

    /**
     * Get eventsite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEventsite()
    {
        return $this->eventsite;
    }

    /**
     * Set etatlog
     *
     * @param string $etatlog
     *
     * @return Machines
     */
    public function setEtatlog($etatlog)
    {
        $this->etatlog = $etatlog;

        return $this;
    }

    /**
     * Get etatlog
     *
     * @return string
     */
    public function getEtatlog()
    {
        return $this->etatlog;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Machines
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Machines
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set deport
     *
     * @param string $deport
     *
     * @return Machines
     */
    public function setDeport($deport)
    {
        $this->deport = $deport;

        return $this;
    }

    /**
     * Get deport
     *
     * @return string
     */
    public function getDeport()
    {
        return $this->deport;
    }

    /**
     * Set energie
     *
     * @param string $energie
     *
     * @return Machines
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get energie
     *
     * @return string
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * Set coutmensuel
     *
     * @param string $coutmensuel
     *
     * @return Machines
     */
    public function setCoutmensuel($coutmensuel)
    {
        $this->coutmensuel = $coutmensuel;

        return $this;
    }

    /**
     * Get coutmensuel
     *
     * @return string
     */
    public function getCoutmensuel()
    {
        return $this->coutmensuel;
    }

    /**
     * Set vr
     *
     * @param string $vr
     *
     * @return Machines
     */
    public function setVr($vr)
    {
        $this->vr = $vr;

        return $this;
    }

    /**
     * Get vr
     *
     * @return string
     */
    public function getVr()
    {
        return $this->vr;
    }

    /**
     * Set caprestantdu
     *
     * @param string $caprestantdu
     *
     * @return Machines
     */
    public function setCaprestantdu($caprestantdu)
    {
        $this->caprestantdu = $caprestantdu;

        return $this;
    }

    /**
     * Get caprestantdu
     *
     * @return string
     */
    public function getCaprestantdu()
    {
        return $this->caprestantdu;
    }

    /**
     * Set prixneuf
     *
     * @param string $prixneuf
     *
     * @return Machines
     */
    public function setPrixneuf($prixneuf)
    {
        $this->prixneuf = $prixneuf;

        return $this;
    }

    /**
     * Get prixneuf
     *
     * @return string
     */
    public function getPrixneuf()
    {
        return $this->prixneuf;
    }

    /**
     * Set datefincredit
     *
     * @param string $datefincredit
     *
     * @return Machines
     */
    public function setDatefincredit($datefincredit)
    {
        $this->datefincredit = $datefincredit;

        return $this;
    }

    /**
     * Get datefincredit
     *
     * @return string
     */
    public function getDatefincredit()
    {
        return $this->datefincredit;
    }

    /**
     * Set prochainhorametre
     *
     * @param string $prochainhorametre
     *
     * @return Machines
     */
    public function setProchainhorametre($prochainhorametre)
    {
        $this->prochainhorametre = $prochainhorametre;

        return $this;
    }

    /**
     * Get prochainhorametre
     *
     * @return string
     */
    public function getProchainhorametre()
    {
        return $this->prochainhorametre;
    }

    /**
     * Set horametreactuel
     *
     * @param string $horametreactuel
     *
     * @return Machines
     */
    public function setHorametreactuel($horametreactuel)
    {
        $this->horametreactuel = $horametreactuel;

        return $this;
    }

    /**
     * Get horametreactuel
     *
     * @return string
     */
    public function getHorametreactuel()
    {
        return $this->horametreactuel;
    }

    /**
     * Add depensesmachine
     *
     * @param \Bacloo\CrmBundle\Entity\Depensesmachine $depensesmachine
     *
     * @return Machines
     */
    public function addDepensesmachine(\Bacloo\CrmBundle\Entity\Depensesmachine $depensesmachine)
    {
        $this->depensesmachine[] = $depensesmachine;

        return $this;
    }

    /**
     * Remove depensesmachine
     *
     * @param \Bacloo\CrmBundle\Entity\Depensesmachine $depensesmachine
     */
    public function removeDepensesmachine(\Bacloo\CrmBundle\Entity\Depensesmachine $depensesmachine)
    {
        $this->depensesmachine->removeElement($depensesmachine);
    }

    /**
     * Get depensesmachine
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepensesmachine()
    {
        return $this->depensesmachine;
    }

    /**
     * Set codeimmo
     *
     * @param string $codeimmo
     *
     * @return Machines
     */
    public function setCodeimmo($codeimmo)
    {
        $this->codeimmo = $codeimmo;

        return $this;
    }

    /**
     * Get codeimmo
     *
     * @return string
     */
    public function getCodeimmo()
    {
        return $this->codeimmo;
    }

    /**
     * Set horametre
     *
     * @param integer $horametre
     *
     * @return Machines
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
     * Set dateachat
     *
     * @param string $dateachat
     *
     * @return Machines
     */
    public function setDateachat($dateachat)
    {
        $this->dateachat = $dateachat;

        return $this;
    }

    /**
     * Get dateachat
     *
     * @return string
     */
    public function getDateachat()
    {
        return $this->dateachat;
    }

    /**
     * Set prixcasse
     *
     * @param string $prixcasse
     *
     * @return Machines
     */
    public function setPrixcasse($prixcasse)
    {
        $this->prixcasse = $prixcasse;

        return $this;
    }

    /**
     * Get prixcasse
     *
     * @return string
     */
    public function getPrixcasse()
    {
        return $this->prixcasse;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Machines
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return Machines
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set dateetat
     *
     * @param string $dateetat
     *
     * @return Machines
     */
    public function setDateetat($dateetat)
    {
        $this->dateetat = $dateetat;

        return $this;
    }

    /**
     * Get dateetat
     *
     * @return string
     */
    public function getDateetat()
    {
        return $this->dateetat;
    }
}
