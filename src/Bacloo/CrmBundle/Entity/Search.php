<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Search
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\SearchRepository")
 */
class Search
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
     * @ORM\Column(name="besoins", type="string", length=255, nullable=true)
     */
    private $besoins;
	
    /**
     * @var string
     *
     * @ORM\Column(name="raison_sociale", type="string", length=255, nullable=true)
     */
    private $raisonSociale;

    /**
     * @var integer
     *
     * @ORM\Column(name="ficheid", type="integer", nullable=true)
     */
    private $ficheid;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;
	
    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=true)
     */
    private $activite;
	
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
     * @ORM\Column(name="cperso1", type="string", length=255, nullable=true)
     */
    private $cperso1;	
	
    /**
     * @var string
     *
     * @ORM\Column(name="cperso2", type="string", length=255, nullable=true)
     */
    private $cperso2;	
	
    /**
     * @var string
     *
     * @ORM\Column(name="cperso3", type="string", length=255, nullable=true)
     */
    private $cperso3;	
	
    /**
     * @var string
     *
     * @ORM\Column(name="memo", type="string", length=255, nullable=true)
     */
    private $memo;	
	
    /**
     * @var string
     *
     * @ORM\Column(name="histo", type="string", length=255, nullable=true)
     */
    private $histo;	
	
    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255, nullable=true)
     */
    private $fonction;	
	
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
     * Set raisonSociale
     *
     * @param string $raisonSociale
     * @return Search
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string 
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set ficheid
     *
     * @param integer $ficheid
     * @return Search
     */
    public function setFicheid($ficheid)
    {
        $this->ficheid = $ficheid;

        return $this;
    }

    /**
     * Get ficheid
     *
     * @return integer 
     */
    public function getFicheid()
    {
        return $this->ficheid;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Search
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set besoins
     *
     * @param string $besoins
     *
     * @return Search
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
     * Set activite
     *
     * @param string $activite
     *
     * @return Search
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
     * Set cp
     *
     * @param integer $cp
     *
     * @return Search
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
     * @return Search
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
     * Set cperso1
     *
     * @param string $cperso1
     *
     * @return Search
     */
    public function setCperso1($cperso1)
    {
        $this->cperso1 = $cperso1;
    
        return $this;
    }

    /**
     * Get cperso1
     *
     * @return string
     */
    public function getCperso1()
    {
        return $this->cperso1;
    }

    /**
     * Set cperso2
     *
     * @param string $cperso2
     *
     * @return Search
     */
    public function setCperso2($cperso2)
    {
        $this->cperso2 = $cperso2;
    
        return $this;
    }

    /**
     * Get cperso2
     *
     * @return string
     */
    public function getCperso2()
    {
        return $this->cperso2;
    }

    /**
     * Set cperso3
     *
     * @param string $cperso3
     *
     * @return Search
     */
    public function setCperso3($cperso3)
    {
        $this->cperso3 = $cperso3;
    
        return $this;
    }

    /**
     * Get cperso3
     *
     * @return string
     */
    public function getCperso3()
    {
        return $this->cperso3;
    }

    /**
     * Set memo
     *
     * @param string $memo
     *
     * @return Search
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
    
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set histo
     *
     * @param string $histo
     *
     * @return Search
     */
    public function setHisto($histo)
    {
        $this->histo = $histo;
    
        return $this;
    }

    /**
     * Get histo
     *
     * @return string
     */
    public function getHisto()
    {
        return $this->histo;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Search
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    
        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }
}
