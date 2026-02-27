<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regla
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ReglaRepository")
 */
class Regla
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
     * @ORM\Column(name="clientid", type="integer")
     */
    private $clientid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepaiment", type="string", length=255)
     */
    private $datepaiment;

    /**
     * @var decimal
     *
     * @ORM\Column(name="troppercu", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $troppercu;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantreg", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantreg;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantimpute", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantimpute;

    /**
     * @var decimal
     *
     * @ORM\Column(name="solde", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="modepaiement", type="string", length=255, nullable=true)
     */
    private $modepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usetroppercu", type="boolean", nullable=true)
     */
    private $usetroppercu;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Reglement", cascade={"persist"}, orphanRemoval=true)
     */
    public $reglement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reglement = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set clientid
     *
     * @param integer $clientid
     *
     * @return Regla
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
     * Set datepaiment
     *
     * @param string $datepaiment
     *
     * @return Regla
     */
    public function setDatepaiment($datepaiment)
    {
        $this->datepaiment = $datepaiment;

        return $this;
    }

    /**
     * Get datepaiment
     *
     * @return string
     */
    public function getDatepaiment()
    {
        return $this->datepaiment;
    }

    /**
     * Set troppercu
     *
     * @param string $troppercu
     *
     * @return Regla
     */
    public function setTroppercu($troppercu)
    {
        $this->troppercu = $troppercu;

        return $this;
    }

    /**
     * Get troppercu
     *
     * @return string
     */
    public function getTroppercu()
    {
        return $this->troppercu;
    }

    /**
     * Set montantreg
     *
     * @param string $montantreg
     *
     * @return Regla
     */
    public function setMontantreg($montantreg)
    {
        $this->montantreg = $montantreg;

        return $this;
    }

    /**
     * Get montantreg
     *
     * @return string
     */
    public function getMontantreg()
    {
        return $this->montantreg;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Regla
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
     * Add reglement
     *
     * @param \Bacloo\CrmBundle\Entity\Reglement $reglement
     *
     * @return Regla
     */
    public function addReglement(\Bacloo\CrmBundle\Entity\Reglement $reglement)
    {
        $this->reglement[] = $reglement;

        return $this;
    }

    /**
     * Remove reglement
     *
     * @param \Bacloo\CrmBundle\Entity\Reglement $reglement
     */
    public function removeReglement(\Bacloo\CrmBundle\Entity\Reglement $reglement)
    {
        $this->reglement->removeElement($reglement);
    }

    /**
     * Get reglement
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReglement()
    {
        return $this->reglement;
    }

    /**
     * Set usetroppercu
     *
     * @param boolean $usetroppercu
     *
     * @return Regla
     */
    public function setUsetroppercu($usetroppercu)
    {
        $this->usetroppercu = $usetroppercu;

        return $this;
    }

    /**
     * Get usetroppercu
     *
     * @return boolean
     */
    public function getUsetroppercu()
    {
        return $this->usetroppercu;
    }

    /**
     * Set montantimpute
     *
     * @param string $montantimpute
     *
     * @return Regla
     */
    public function setMontantimpute($montantimpute)
    {
        $this->montantimpute = $montantimpute;

        return $this;
    }

    /**
     * Get montantimpute
     *
     * @return string
     */
    public function getMontantimpute()
    {
        return $this->montantimpute;
    }

    /**
     * Set solde
     *
     * @param string $solde
     *
     * @return Regla
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return string
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set modepaiement
     *
     * @param string $modepaiement
     *
     * @return Regla
     */
    public function setModepaiement($modepaiement)
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }

    /**
     * Get modepaiement
     *
     * @return string
     */
    public function getModepaiement()
    {
        return $this->modepaiement;
    }
}
