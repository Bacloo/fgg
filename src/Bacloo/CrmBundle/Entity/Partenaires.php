<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partenaires
 * @ORM\Entity
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\PartenairesRepository")
 */
class Partenaires
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
     * @ORM\Column(name="userid", type="integer", nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="usertags", type="string", length=255, nullable=true)
     */
    private $usertags;

    /**
     * @var string
     *
     * @ORM\Column(name="userdescrech", type="string", length=255, nullable=true)
     */
    private $userdescrech;
	
    /**
     * @var string
     *
     * @ORM\Column(name="useractivite", type="string", length=255, nullable=true)
     */
    private $useractivite;
	
    /**
     * @var string
     *
     * @ORM\Column(name="useractvise", type="string", length=255, nullable=true)
     */
    private $useractvise;
	
    /**
     * @var string
     *
     * @ORM\Column(name="partactvise", type="string", length=255, nullable=true)
     */
    private $partactvise;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="partpotid", type="integer", nullable=true)
     */
    private $partpotid;

    /**
     * @var string
     *
     * @ORM\Column(name="partpot_username", type="string", length=255, nullable=true)
     */
    private $partpot_username;

    /**
     * @var string
     *
     * @ORM\Column(name="useractco", type="string", length=255, nullable=true)
     */
    private $useractco;
	
    /**
     * @var string
     *
     * @ORM\Column(name="actipart", type="string", length=255, nullable=true)
     */
    private $actipart;
	
    /**
     * @var string
     *
     * @ORM\Column(name="descrech", type="string", length=255, nullable=true)
     */
    private $descrech;
	
    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=true)
     */
    private $tags;
	
    /**
     * @var string
     *
     * @ORM\Column(name="acticon", type="string", length=255, nullable=true)
     */
    private $acticon;
	
    /**
     * @var string
     *
     * @ORM\Column(name="partenaire", type="string", length=255, nullable=true)
     */
    private $partenaire;

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
     * Set userid
     *
     * @param integer $userid
     *
     * @return Partenaires
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Partenaires
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
     * Set partpotid
     *
     * @param integer $partpotid
     *
     * @return Partenaires
     */
    public function setPartpotid($partpotid)
    {
        $this->partpotid = $partpotid;
    
        return $this;
    }

    /**
     * Get partpotid
     *
     * @return integer
     */
    public function getPartpotid()
    {
        return $this->partpotid;
    }

    /**
     * Set partpotUsername
     *
     * @param string $partpotUsername
     *
     * @return Partenaires
     */
    public function setPartpotUsername($partpotUsername)
    {
        $this->partpot_username = $partpotUsername;
    
        return $this;
    }

    /**
     * Get partpotUsername
     *
     * @return string
     */
    public function getPartpotUsername()
    {
        return $this->partpot_username;
    }

    /**
     * Set partenaire
     *
     * @param string $partenaire
     *
     * @return Partenaires
     */
    public function setPartenaire($partenaire)
    {
        $this->partenaire = $partenaire;
    
        return $this;
    }

    /**
     * Get partenaire
     *
     * @return string
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }

    /**
     * Set useractco
     *
     * @param string $useractco
     *
     * @return Partenaires
     */
    public function setUseractco($useractco)
    {
        $this->useractco = $useractco;
    
        return $this;
    }

    /**
     * Get useractco
     *
     * @return string
     */
    public function getUseractco()
    {
        return $this->useractco;
    }

    /**
     * Set actipart
     *
     * @param string $actipart
     *
     * @return Partenaires
     */
    public function setActipart($actipart)
    {
        $this->actipart = $actipart;
    
        return $this;
    }

    /**
     * Get actipart
     *
     * @return string
     */
    public function getActipart()
    {
        return $this->actipart;
    }

    /**
     * Set descrech
     *
     * @param string $descrech
     *
     * @return Partenaires
     */
    public function setDescrech($descrech)
    {
        $this->descrech = $descrech;
    
        return $this;
    }

    /**
     * Get descrech
     *
     * @return string
     */
    public function getDescrech()
    {
        return $this->descrech;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Partenaires
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
     * Set acticon
     *
     * @param string $acticon
     *
     * @return Partenaires
     */
    public function setActicon($acticon)
    {
        $this->acticon = $acticon;
    
        return $this;
    }

    /**
     * Get acticon
     *
     * @return string
     */
    public function getActicon()
    {
        return $this->acticon;
    }

    /**
     * Set usertags
     *
     * @param string $usertags
     *
     * @return Partenaires
     */
    public function setUsertags($usertags)
    {
        $this->usertags = $usertags;
    
        return $this;
    }

    /**
     * Get usertags
     *
     * @return string
     */
    public function getUsertags()
    {
        return $this->usertags;
    }

    /**
     * Set userdescrech
     *
     * @param string $userdescrech
     *
     * @return Partenaires
     */
    public function setUserdescrech($userdescrech)
    {
        $this->userdescrech = $userdescrech;
    
        return $this;
    }

    /**
     * Get userdescrech
     *
     * @return string
     */
    public function getUserdescrech()
    {
        return $this->userdescrech;
    }

    /**
     * Set useractivite
     *
     * @param string $useractivite
     *
     * @return Partenaires
     */
    public function setUseractivite($useractivite)
    {
        $this->useractivite = $useractivite;
    
        return $this;
    }

    /**
     * Get useractivite
     *
     * @return string
     */
    public function getUseractivite()
    {
        return $this->useractivite;
    }

    /**
     * Set useractvise
     *
     * @param string $useractvise
     *
     * @return Partenaires
     */
    public function setUseractvise($useractvise)
    {
        $this->useractvise = $useractvise;
    
        return $this;
    }

    /**
     * Get useractvise
     *
     * @return string
     */
    public function getUseractvise()
    {
        return $this->useractvise;
    }

    /**
     * Set partactvise
     *
     * @param string $partactvise
     *
     * @return Partenaires
     */
    public function setPartactvise($partactvise)
    {
        $this->partactvise = $partactvise;
    
        return $this;
    }

    /**
     * Get partactvise
     *
     * @return string
     */
    public function getPartactvise()
    {
        return $this->partactvise;
    }
}
