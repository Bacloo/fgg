<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locataventes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LocataventesRepository")
 */
class Locataventes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    Public $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="string", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="refarticle", type="string", length=255, nullable=true)
     */
    private $refarticle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="pu", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $pu;

    /**
     * @var string
     *
     * @ORM\Column(name="montantvente", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantvente;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="codifvente", type="string", nullable=true)
     */
    private $codifvente;

    /**
     * @var integer
     *
     * @ORM\Column(name="stockenr", type="integer", length=255, nullable=true)
     */
    private $stockenr;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", length=255, nullable=true)
     */
    private $stock;
	
    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locata", cascade={"persist"}, orphanRemoval=true)
     */ 		
	Public $locata;
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locata = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param string $date
     *
     * @return Locataventes
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

    /**
     * Set refarticle
     *
     * @param string $refarticle
     *
     * @return Locataventes
     */
    public function setRefarticle($refarticle)
    {
        $this->refarticle = $refarticle;

        return $this;
    }

    /**
     * Get refarticle
     *
     * @return string
     */
    public function getRefarticle()
    {
        return $this->refarticle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Locataventes
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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Locataventes
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
     * Set pu
     *
     * @param string $pu
     *
     * @return Locataventes
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
     * Set montantvente
     *
     * @param string $montantvente
     *
     * @return Locataventes
     */
    public function setMontantvente($montantvente)
    {
        $this->montantvente = $montantvente;

        return $this;
    }

    /**
     * Get montantvente
     *
     * @return string
     */
    public function getMontantvente()
    {
        return $this->montantvente;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Locataventes
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
     * Set codifvente
     *
     * @param string $codifvente
     *
     * @return Locataventes
     */
    public function setCodifvente($codifvente)
    {
        $this->codifvente = $codifvente;

        return $this;
    }

    /**
     * Get codifvente
     *
     * @return string
     */
    public function getCodifvente()
    {
        return $this->codifvente;
    }

    /**
     * Add locatum
     *
     * @param \Bacloo\CrmBundle\Entity\Locata $locatum
     *
     * @return Locataventes
     */
    public function addLocatum(\Bacloo\CrmBundle\Entity\Locata $locatum)
    {
        $this->locata[] = $locatum;

        return $this;
    }

    /**
     * Remove locatum
     *
     * @param \Bacloo\CrmBundle\Entity\Locata $locatum
     */
    public function removeLocatum(\Bacloo\CrmBundle\Entity\Locata $locatum)
    {
        $this->locata->removeElement($locatum);
    }

    /**
     * Get locata
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocata()
    {
        return $this->locata;
    }

    /**
     * Set stockenr
     *
     * @param integer $stockenr
     *
     * @return Locataventes
     */
    public function setStockenr($stockenr)
    {
        $this->stockenr = $stockenr;

        return $this;
    }

    /**
     * Get stockenr
     *
     * @return integer
     */
    public function getStockenr()
    {
        return $this->stockenr;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Locataventes
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }
}
