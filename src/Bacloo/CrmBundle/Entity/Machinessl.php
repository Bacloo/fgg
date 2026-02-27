<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machinessl
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\MachinesslRepository")
 */
class Machinessl
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="num_serie", type="string", length=255, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="loueur", length=255, nullable=true)
     */
    private $loueur;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Eventparc", cascade={"persist"}, orphanRemoval=true)
   */	
	Private $eventparc;

  /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Eventsite", cascade={"persist"}, orphanRemoval=true)
   */	
	Private $eventsite;


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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * @return Machinessl
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
     * Set loueur
     *
     * @param string $loueur
     *
     * @return Machinessl
     */
    public function setLoueur($loueur)
    {
        $this->loueur = $loueur;

        return $this;
    }

    /**
     * Get loueur
     *
     * @return string
     */
    public function getLoueur()
    {
        return $this->loueur;
    }

    /**
     * Set deport
     *
     * @param string $deport
     *
     * @return Machinessl
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
     * @return Machinessl
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
}
