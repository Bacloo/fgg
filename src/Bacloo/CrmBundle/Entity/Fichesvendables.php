<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichesvendables
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\FichesvendablesRepository")
 */
class Fichesvendables
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
     * @ORM\Column(name="raisonsociale", type="string", length=255)
     */
    private $raisonsociale;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=true)
     */
    private $activite;

    /**
     * @var string
     *
     * @ORM\Column(name="besoins", type="string", length=255, nullable=true)
     */
    private $besoins;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="vendeur", type="string", length=255, nullable=true)
     */
    private $vendeur;

    /**
     * @var string
     *
     * @ORM\Column(name="vemail", type="string", length=255, nullable=true)
     */
    private $vemail;

    /**
     * @var string
     *
     * @ORM\Column(name="ficheid", type="string", length=255, nullable=true)
     */
    private $ficheid;


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
     * Set raisonsociale
     *
     * @param string $raisonsociale
     * @return Fichesvendables
     */
    public function setRaisonsociale($raisonsociale)
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }

    /**
     * Get raisonsociale
     *
     * @return string 
     */
    public function getRaisonsociale()
    {
        return $this->raisonsociale;
    }

    /**
     * Set activite
     *
     * @param string $activite
     * @return Fichesvendables
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return string 
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set besoins
     *
     * @param string $besoins
     * @return Fichesvendables
     */
    public function setBesoins($besoins)
    {
        $this->besoins = $besoins;

        return $this;
    }

    /**
     * Get besoins
     *
     * @return string 
     */
    public function getBesoins()
    {
        return $this->besoins;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Fichesvendables
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
     * @return Fichesvendables
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
     * Set vendeur
     *
     * @param string $vendeur
     * @return Fichesvendables
     */
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return string 
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * Set vemail
     *
     * @param string $vemail
     * @return Fichesvendables
     */
    public function setVemail($vemail)
    {
        $this->vemail = $vemail;

        return $this;
    }

    /**
     * Get vemail
     *
     * @return string 
     */
    public function getVemail()
    {
        return $this->vemail;
    }

    /**
     * Set ficheid
     *
     * @param string $ficheid
     * @return Fichesvendables
     */
    public function setFicheid($ficheid)
    {
        $this->ficheid = $ficheid;

        return $this;
    }

    /**
     * Get ficheid
     *
     * @return string 
     */
    public function getFicheid()
    {
        return $this->ficheid;
    }
}
