<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * interresses
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\interressesRepository")
 */
class interresses
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
     * @ORM\Column(name="ficheid", type="integer", nullable=true)
     */
    private $ficheid;
	
    /**
     * @var boolean
     *
     * @ORM\Column(name="boolean", type="boolean", nullable=true)
     */
    private $boolean;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=true)
     */
    private $activite;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_rech", type="string", length=255, nullable=true)
     */
    private $descRech;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=true)
     */
    private $tags;


    /**
     * @var string
     *
     * @ORM\Column(name="actvise", type="string", length=255, nullable=true)
     */
    private $actvise;

    /**
     * @var string
     *
     * @ORM\Column(name="proprio", type="string", length=255, nullable=true)
     */
    private $proprio;

    /**
     * @var string
     *
     * @ORM\Column(name="datedeclar", type="string", nullable=true)
     */
    private $datedeclar;	

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
     * Set boolean
     *
     * @param boolean $boolean
     * @return interresses
     */
    public function setBoolean($boolean)
    {
        $this->boolean = $boolean;

        return $this;
    }

    /**
     * Get boolean
     *
     * @return boolean 
     */
    public function getBoolean()
    {
        return $this->boolean;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return interresses
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
     * Set prenom
     *
     * @param string $prenom
     * @return interresses
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return interresses
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set activite
     *
     * @param string $activite
     * @return interresses
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
     * Set descRech
     *
     * @param string $descRech
     * @return interresses
     */
    public function setDescRech($descRech)
    {
        $this->descRech = $descRech;

        return $this;
    }

    /**
     * Get descRech
     *
     * @return string 
     */
    public function getDescRech()
    {
        return $this->descRech;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return interresses
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set ficheid
     *
     * @param integer $ficheid
     * @return interresses
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
     * Set proprio
     *
     * @param string $proprio
     * @return interresses
     */
    public function setProprio($proprio)
    {
        $this->proprio = $proprio;

        return $this;
    }

    /**
     * Get proprio
     *
     * @return string 
     */
    public function getProprio()
    {
        return $this->proprio;
    }

    /**
     * Set actvise
     *
     * @param string $actvise
     *
     * @return interresses
     */
    public function setActvise($actvise)
    {
        $this->actvise = $actvise;
    
        return $this;
    }

    /**
     * Get actvise
     *
     * @return string
     */
    public function getActvise()
    {
        return $this->actvise;
    }

    /**
     * Set datedeclar
     *
     * @param \DateTime $datedeclar
     *
     * @return interresses
     */
    public function setDatedeclar($datedeclar)
    {
        $this->datedeclar = $datedeclar;
    
        return $this;
    }

    /**
     * Get datedeclar
     *
     * @return \DateTime
     */
    public function getDatedeclar()
    {
        return $this->datedeclar;
    }
}
