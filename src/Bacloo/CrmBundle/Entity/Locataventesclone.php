<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locataventesclone
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LocataventescloneRepository")
 */
class Locataventesclone
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
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locataclone", cascade={"persist"}, orphanRemoval=true)
     */ 		
	Public $locataclone;

	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locataclone = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Locataventesclone
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
     * @return Locataventesclone
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
     * @return Locataventesclone
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
     * @return Locataventesclone
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
     * @return Locataventesclone
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
     * @return Locataventesclone
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
     * @return Locataventesclone
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
     * @return Locataventesclone
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
     * Add locataclone
     *
     * @param \Bacloo\CrmBundle\Entity\Locataclone $locataclone
     *
     * @return Locataventesclone
     */
    public function addLocataclone(\Bacloo\CrmBundle\Entity\Locataclone $locataclone)
    {
        $this->locataclone[] = $locataclone;

        return $this;
    }

    /**
     * Remove locataclone
     *
     * @param \Bacloo\CrmBundle\Entity\Locataclone $locataclone
     */
    public function removeLocataclone(\Bacloo\CrmBundle\Entity\Locataclone $locataclone)
    {
        $this->locataclone->removeElement($locataclone);
    }

    /**
     * Get locataclone
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocataclone()
    {
        return $this->locataclone;
    }

    /**
     * Set stockenr
     *
     * @param integer $stockenr
     *
     * @return Locataventesclone
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
     * @return Locataventesclone
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
