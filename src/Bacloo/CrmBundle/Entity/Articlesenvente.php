<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articlesenvente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ArticlesenventeRepository")
 */
class Articlesenvente
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
     * @ORM\Column(name="reffrs", type="string", length=255, nullable=true)
     */
    private $reffrs;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="prixdachat", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $prixdachat;

    /**
     * @var string
     *
     * @ORM\Column(name="prixvente", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $prixvente;

    /**
     * @var integer
     *
     * @ORM\Column(name="stockmax", type="integer", nullable=true)
     */
    private $stockmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="stockmini", type="integer", nullable=true)
     */
    private $stockmini;

    /**
     * @var integer
     *
     * @ORM\Column(name="stocktheo", type="integer", nullable=true)
     */
    private $stocktheo;

    /**
     * @var integer
     *
     * @ORM\Column(name="stockreel", type="integer", length=255, nullable=true)
     */
    private $stockreel;

    /**
     * @var integer
     *
     * @ORM\Column(name="stockenr", type="integer", length=255, nullable=true)
     */
    private $stockenr;

    /**
     * @var integer
     *
     * @ORM\Column(name="alerte", type="integer", length=255, nullable=true)
     */
    private $alerte;
	
	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Arta", cascade={"persist"}, orphanRemoval=true)
	*/		
	Private $arta;


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
     * Set reffrs
     *
     * @param string $reffrs
     *
     * @return Articlesenvente
     */
    public function setReffrs($reffrs)
    {
        $this->reffrs = $reffrs;

        return $this;
    }

    /**
     * Get reffrs
     *
     * @return string
     */
    public function getReffrs()
    {
        return $this->reffrs;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Articlesenvente
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
     * Set prixdachat
     *
     * @param string $prixdachat
     *
     * @return Articlesenvente
     */
    public function setPrixdachat($prixdachat)
    {
        $this->prixdachat = $prixdachat;

        return $this;
    }

    /**
     * Get prixdachat
     *
     * @return string
     */
    public function getPrixdachat()
    {
        return $this->prixdachat;
    }

    /**
     * Set prixvente
     *
     * @param string $prixvente
     *
     * @return Articlesenvente
     */
    public function setPrixvente($prixvente)
    {
        $this->prixvente = $prixvente;

        return $this;
    }

    /**
     * Get prixvente
     *
     * @return string
     */
    public function getPrixvente()
    {
        return $this->prixvente;
    }

    /**
     * Set stockmax
     *
     * @param integer $stockmax
     *
     * @return Articlesenvente
     */
    public function setStockmax($stockmax)
    {
        $this->stockmax = $stockmax;

        return $this;
    }

    /**
     * Get stockmax
     *
     * @return integer
     */
    public function getStockmax()
    {
        return $this->stockmax;
    }

    /**
     * Set stockmini
     *
     * @param integer $stockmini
     *
     * @return Articlesenvente
     */
    public function setStockmini($stockmini)
    {
        $this->stockmini = $stockmini;

        return $this;
    }

    /**
     * Get stockmini
     *
     * @return integer
     */
    public function getStockmini()
    {
        return $this->stockmini;
    }

    /**
     * Set stocktheo
     *
     * @param integer $stocktheo
     *
     * @return Articlesenvente
     */
    public function setStocktheo($stocktheo)
    {
        $this->stocktheo = $stocktheo;

        return $this;
    }

    /**
     * Get stocktheo
     *
     * @return integer
     */
    public function getStocktheo()
    {
        return $this->stocktheo;
    }

    /**
     * Set stockreel
     *
     * @param string $stockreel
     *
     * @return Articlesenvente
     */
    public function setStockreel($stockreel)
    {
        $this->stockreel = $stockreel;

        return $this;
    }

    /**
     * Get stockreel
     *
     * @return string
     */
    public function getStockreel()
    {
        return $this->stockreel;
    }

    /**
     * Set stockenr
     *
     * @param integer $stockenr
     *
     * @return Articlesenvente
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
     * Set alerte
     *
     * @param integer $alerte
     *
     * @return Articlesenvente
     */
    public function setAlerte($alerte)
    {
        $this->alerte = $alerte;

        return $this;
    }

    /**
     * Get alerte
     *
     * @return integer
     */
    public function getAlerte()
    {
        return $this->alerte;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->arta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add artum
     *
     * @param \Bacloo\CrmBundle\Entity\Arta $artum
     *
     * @return Articlesenvente
     */
    public function addArtum(\Bacloo\CrmBundle\Entity\Arta $artum)
    {
        $this->arta[] = $artum;

        return $this;
    }

    /**
     * Remove artum
     *
     * @param \Bacloo\CrmBundle\Entity\Arta $artum
     */
    public function removeArtum(\Bacloo\CrmBundle\Entity\Arta $artum)
    {
        $this->arta->removeElement($artum);
    }

    /**
     * Get arta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArta()
    {
        return $this->arta;
    }
}
