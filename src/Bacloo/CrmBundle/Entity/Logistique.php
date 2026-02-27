<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logistique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LogistiqueRepository")
 */
class Logistique
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
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;

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
     * @ORM\Column(name="cp", type="string", nullable=true, nullable=true)
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
     * @ORM\Column(name="materiel", type="string", length=255, nullable=true)
     */
    private $materiel;

    /**
     * @var string
     *
     * @ORM\Column(name="typemateriel", type="string", length=255, nullable=true)
     */
    private $typemateriel;

    /**
     * @var string
     *
     * @ORM\Column(name="contactchantier", type="string", length=255, nullable=true)
     */
    private $contactchantier;
    /**
     * @var string
     *
     * @ORM\Column(name="typetransport", type="string", length=255, nullable=true)
     */
    private $typetransport;

    /**
     * @var string
     *
     * @ORM\Column(name="memolog", type="text", nullable=true)
     */
    private $memolog;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordretransport", type="integer", nullable=true)
     */
    private $ordretransport;

    /**
     * @var string
     *
     * @ORM\Column(name="etatlog", type="string", length=255, nullable=true)
     */
    private $etatlog;

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
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=true)
     */
    private $date;
	
	/**
	* @ORM\ManyToOne(targetEntity="Bacloo\UserBundle\Entity\User", cascade={"persist"})
	* @ORM\JoinColumn(name="chauffeurid", referencedColumnName="id", nullable=true, onDelete="SET NULL")
	* @ORM\OrderBy({"username" = "ASC"})
	*/		
	Private $user;
	
	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Logis", cascade={"persist"}, orphanRemoval=true)
	*/		
	Private $logis;


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
     * Set client
     *
     * @param string $client
     *
     * @return Logistique
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
     * Set nomchantier
     *
     * @param string $nomchantier
     *
     * @return Logistique
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
     * @return Logistique
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
     * @return Logistique
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
     * @return Logistique
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
     * @return Logistique
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
     * @return Logistique
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
     * Set materiel
     *
     * @param string $materiel
     *
     * @return Logistique
     */
    public function setMateriel($materiel)
    {
        $this->materiel = $materiel;

        return $this;
    }

    /**
     * Get materiel
     *
     * @return string
     */
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
     * Set typemateriel
     *
     * @param string $typemateriel
     *
     * @return Logistique
     */
    public function setTypemateriel($typemateriel)
    {
        $this->typemateriel = $typemateriel;

        return $this;
    }

    /**
     * Get typemateriel
     *
     * @return string
     */
    public function getTypemateriel()
    {
        return $this->typemateriel;
    }

    /**
     * Set contactchantier
     *
     * @param string $contactchantier
     *
     * @return Logistique
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
     * Set typetransport
     *
     * @param string $typetransport
     *
     * @return Logistique
     */
    public function setTypetransport($typetransport)
    {
        $this->typetransport = $typetransport;

        return $this;
    }

    /**
     * Get typetransport
     *
     * @return string
     */
    public function getTypetransport()
    {
        return $this->typetransport;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->logis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add logi
     *
     * @param \Bacloo\CrmBundle\Entity\Logis $logi
     *
     * @return Logistique
     */
    public function addLogi(\Bacloo\CrmBundle\Entity\Logis $logi)
    {
        $this->logis[] = $logi;

        return $this;
    }

    /**
     * Remove logi
     *
     * @param \Bacloo\CrmBundle\Entity\Logis $logi
     */
    public function removeLogi(\Bacloo\CrmBundle\Entity\Logis $logi)
    {
        $this->logis->removeElement($logi);
    }

    /**
     * Get logis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLogis()
    {
        return $this->logis;
    }

    /**
     * Set memolog
     *
     * @param string $memolog
     *
     * @return Logistique
     */
    public function setMemolog($memolog)
    {
        $this->memolog = $memolog;

        return $this;
    }

    /**
     * Get memolog
     *
     * @return string
     */
    public function getMemolog()
    {
        return $this->memolog;
    }

    /**
     * Set ordretransport
     *
     * @param integer $ordretransport
     *
     * @return Logistique
     */
    public function setOrdretransport($ordretransport)
    {
        $this->ordretransport = $ordretransport;

        return $this;
    }

    /**
     * Get ordretransport
     *
     * @return integer
     */
    public function getOrdretransport()
    {
        return $this->ordretransport;
    }

    /**
     * Set user
     *
     * @param \Bacloo\UserBundle\Entity\User $user
     *
     * @return Logistique
     */
    public function setUser(\Bacloo\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Bacloo\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set etatlog
     *
     * @param string $etatlog
     *
     * @return Logistique
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
     * Set codelocations
     *
     * @param string $codelocations
     *
     * @return Logistique
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
     * Set codecontrat
     *
     * @param string $codecontrat
     *
     * @return Logistique
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
     * Set date
     *
     * @param string $date
     *
     * @return Logistique
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
