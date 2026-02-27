<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modules
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ModulesRepository")
 */
class Modules
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
     * @ORM\Column(name="module1", type="string", length=255, nullable=true)
     */
    private $module1;

    /**
     * @var integer
     *
     * @ORM\Column(name="module1prix", type="integer", nullable=true)
     */
    private $module1prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module1debut", type="string", nullable=true)
     */
    private $module1debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module1expiration", type="string", nullable=true)
     */
    private $module1expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module1activation", type="boolean", length=255, nullable=true)
     */
    private $module1activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module2", type="string", length=255, nullable=true)
     */
    private $module2;

    /**
     * @var integer
     *
     * @ORM\Column(name="module2prix", type="integer", nullable=true)
     */
    private $module2prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module2debut", type="string", nullable=true)
     */
    private $module2debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module2expiration", type="string", nullable=true)
     */
    private $module2expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module2activation", type="boolean", length=255, nullable=true)
     */
    private $module2activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module3", type="string", length=255, nullable=true)
     */
    private $module3;

    /**
     * @var integer
     *
     * @ORM\Column(name="module3prix", type="integer", nullable=true)
     */
    private $module3prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module3debut", type="string", nullable=true)
     */
    private $module3debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module3expiration", type="string", nullable=true)
     */
    private $module3expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module3activation", type="boolean", length=255, nullable=true)
     */
    private $module3activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module4", type="string", length=255, nullable=true)
     */
    private $module4;

    /**
     * @var integer
     *
     * @ORM\Column(name="module4prix", type="integer", nullable=true)
     */
    private $module4prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module4debut", type="string", nullable=true)
     */
    private $module4debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module4expiration", type="string", nullable=true)
     */
    private $module4expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module4activation", type="boolean", length=255, nullable=true)
     */
    private $module4activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module5", type="string", length=255, nullable=true)
     */
    private $module5;

    /**
     * @var integer
     *
     * @ORM\Column(name="module5prix", type="integer", nullable=true)
     */
    private $module5prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module5debut", type="string", nullable=true)
     */
    private $module5debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module5expiration", type="string", nullable=true)
     */
    private $module5expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module5activation", type="boolean", length=255, nullable=true)
     */
    private $module5activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module6", type="string", length=255, nullable=true)
     */
    private $module6;

    /**
     * @var integer
     *
     * @ORM\Column(name="module6prix", type="integer", nullable=true)
     */
    private $module6prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module6debut", type="string", nullable=true)
     */
    private $module6debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module6expiration", type="string", nullable=true)
     */
    private $module6expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module6activation", type="boolean", length=255, nullable=true)
     */
    private $module6activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module7", type="string", length=255, nullable=true)
     */
    private $module7;

    /**
     * @var integer
     *
     * @ORM\Column(name="module7prix", type="integer", nullable=true)
     */
    private $module7prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module7debut", type="string", nullable=true)
     */
    private $module7debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module7expiration", type="string", nullable=true)
     */
    private $module7expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module7activation", type="boolean", length=255, nullable=true)
     */
    private $module7activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module8", type="string", length=255, nullable=true)
     */
    private $module8;

    /**
     * @var integer
     *
     * @ORM\Column(name="module8prix", type="integer", nullable=true)
     */
    private $module8prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module8debut", type="string", nullable=true)
     */
    private $module8debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module8expiration", type="string", nullable=true)
     */
    private $module8expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module8activation", type="boolean", length=255, nullable=true)
     */
    private $module8activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module9", type="string", length=255, nullable=true)
     */
    private $module9;

    /**
     * @var integer
     *
     * @ORM\Column(name="module9prix", type="integer", nullable=true)
     */
    private $module9prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module9debut", type="string", nullable=true)
     */
    private $module9debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module9expiration", type="string", nullable=true)
     */
    private $module9expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module9activation", type="boolean", length=255, nullable=true)
     */
    private $module9activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module10", type="string", length=255, nullable=true)
     */
    private $module10;

    /**
     * @var integer
     *
     * @ORM\Column(name="module10prix", type="integer", nullable=true)
     */
    private $module10prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module10debut", type="string", nullable=true)
     */
    private $module10debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module10expiration", type="string", nullable=true)
     */
    private $module10expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module10activation", type="boolean", length=255, nullable=true)
     */
    private $module10activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module11", type="string", length=255, nullable=true)
     */
    private $module11;

    /**
     * @var integer
     *
     * @ORM\Column(name="module11prix", type="integer", nullable=true)
     */
    private $module11prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module11debut", type="string", nullable=true)
     */
    private $module11debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module11expiration", type="string", nullable=true)
     */
    private $module11expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module11activation", type="boolean", length=255, nullable=true)
     */
    private $module11activation;

    /**
     * @var string
     *
     * @ORM\Column(name="module12", type="string", length=255, nullable=true)
     */
    private $module12;

    /**
     * @var integer
     *
     * @ORM\Column(name="module12prix", type="integer", nullable=true)
     */
    private $module12prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module12debut", type="string", nullable=true)
     */
    private $module12debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="module12expiration", type="string", nullable=true)
     */
    private $module12expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="module12activation", type="boolean", length=255, nullable=true)
     */
    private $module12activation;

    /**
     * @var string
     *
     * @ORM\Column(name="bb", type="string", length=255, nullable=true)
     */
    private $bb;

    /**
     * @var integer
     *
     * @ORM\Column(name="bbprix", type="integer", nullable=true)
     */
    private $bbprix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bbdebut", type="string", nullable=true)
     */
    private $bbdebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bbexpiration", type="string", nullable=true)
     */
    private $bbexpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="bbactivation", type="boolean", length=255, nullable=true)
     */
    private $bbactivation;

    /**
     * @var integer
     *
     * @ORM\Column(name="userprix", type="integer", nullable=true)
     */
    protected $userprix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="userdebut", type="string", nullable=true)
     */
    protected $userdebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="userexpiration", type="string", nullable=true)
     */
    protected $userexpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="bbuseractivation", type="boolean", length=255, nullable=true)
     */
    private $bbuseractivation;	

    /**
     * @ORM\Column(name="usersociete", type="string", length=255, nullable=true)
     *
     */
    private $usersociete;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemailalerte", type="string", nullable=true)
     */
    protected $datemailalerte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemailarret", type="string", nullable=true)
     */
    protected $datemailarret;
	
	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Moda", cascade={"persist"})
	*/		
	Private $moda;			
	
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
     * @return Modules
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
     * @return Modules
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
     * Set module1
     *
     * @param string $module1
     *
     * @return Modules
     */
    public function setModule1($module1)
    {
        $this->module1 = $module1;
    
        return $this;
    }

    /**
     * Get module1
     *
     * @return string
     */
    public function getModule1()
    {
        return $this->module1;
    }

    /**
     * Set module1prix
     *
     * @param integer $module1prix
     *
     * @return Modules
     */
    public function setModule1prix($module1prix)
    {
        $this->module1prix = $module1prix;
    
        return $this;
    }

    /**
     * Get module1prix
     *
     * @return integer
     */
    public function getModule1prix()
    {
        return $this->module1prix;
    }

    /**
     * Set module1debut
     *
     * @param \DateTime $module1debut
     *
     * @return Modules
     */
    public function setModule1debut($module1debut)
    {
        $this->module1debut = $module1debut;
    
        return $this;
    }

    /**
     * Get module1debut
     *
     * @return \DateTime
     */
    public function getModule1debut()
    {
        return $this->module1debut;
    }

    /**
     * Set module1expiration
     *
     * @param \DateTime $module1expiration
     *
     * @return Modules
     */
    public function setModule1expiration($module1expiration)
    {
        $this->module1expiration = $module1expiration;
    
        return $this;
    }

    /**
     * Get module1expiration
     *
     * @return \DateTime
     */
    public function getModule1expiration()
    {
        return $this->module1expiration;
    }

    /**
     * Set module1activation
     *
     * @param boolean $module1activation
     *
     * @return Modules
     */
    public function setModule1activation($module1activation)
    {
        $this->module1activation = $module1activation;
    
        return $this;
    }

    /**
     * Get module1activation
     *
     * @return boolean
     */
    public function getModule1activation()
    {
        return $this->module1activation;
    }

    /**
     * Set module2
     *
     * @param string $module2
     *
     * @return Modules
     */
    public function setModule2($module2)
    {
        $this->module2 = $module2;
    
        return $this;
    }

    /**
     * Get module2
     *
     * @return string
     */
    public function getModule2()
    {
        return $this->module2;
    }

    /**
     * Set module2prix
     *
     * @param integer $module2prix
     *
     * @return Modules
     */
    public function setModule2prix($module2prix)
    {
        $this->module2prix = $module2prix;
    
        return $this;
    }

    /**
     * Get module2prix
     *
     * @return integer
     */
    public function getModule2prix()
    {
        return $this->module2prix;
    }

    /**
     * Set module2debut
     *
     * @param \DateTime $module2debut
     *
     * @return Modules
     */
    public function setModule2debut($module2debut)
    {
        $this->module2debut = $module2debut;
    
        return $this;
    }

    /**
     * Get module2debut
     *
     * @return \DateTime
     */
    public function getModule2debut()
    {
        return $this->module2debut;
    }

    /**
     * Set module2expiration
     *
     * @param \DateTime $module2expiration
     *
     * @return Modules
     */
    public function setModule2expiration($module2expiration)
    {
        $this->module2expiration = $module2expiration;
    
        return $this;
    }

    /**
     * Get module2expiration
     *
     * @return \DateTime
     */
    public function getModule2expiration()
    {
        return $this->module2expiration;
    }

    /**
     * Set module2activation
     *
     * @param boolean $module2activation
     *
     * @return Modules
     */
    public function setModule2activation($module2activation)
    {
        $this->module2activation = $module2activation;
    
        return $this;
    }

    /**
     * Get module2activation
     *
     * @return boolean
     */
    public function getModule2activation()
    {
        return $this->module2activation;
    }

    /**
     * Set bb
     *
     * @param string $bb
     *
     * @return Modules
     */
    public function setBb($bb)
    {
        $this->bb = $bb;
    
        return $this;
    }

    /**
     * Get bb
     *
     * @return string
     */
    public function getBb()
    {
        return $this->bb;
    }

    /**
     * Set bbprix
     *
     * @param integer $bbprix
     *
     * @return Modules
     */
    public function setBbprix($bbprix)
    {
        $this->bbprix = $bbprix;
    
        return $this;
    }

    /**
     * Get bbprix
     *
     * @return integer
     */
    public function getBbprix()
    {
        return $this->bbprix;
    }

    /**
     * Set bbdebut
     *
     * @param string $bbdebut
     *
     * @return Modules
     */
    public function setBbdebut($bbdebut)
    {
        $this->bbdebut = $bbdebut;
    
        return $this;
    }

    /**
     * Get bbdebut
     *
     * @return string
     */
    public function getBbdebut()
    {
        return $this->bbdebut;
    }

    /**
     * Set bbexpiration
     *
     * @param string $bbexpiration
     *
     * @return Modules
     */
    public function setBbexpiration($bbexpiration)
    {
        $this->bbexpiration = $bbexpiration;
    
        return $this;
    }

    /**
     * Get bbexpiration
     *
     * @return string
     */
    public function getBbexpiration()
    {
        return $this->bbexpiration;
    }

    /**
     * Set bbactivation
     *
     * @param boolean $bbactivation
     *
     * @return Modules
     */
    public function setBbactivation($bbactivation)
    {
        $this->bbactivation = $bbactivation;
    
        return $this;
    }

    /**
     * Get bbactivation
     *
     * @return boolean
     */
    public function getBbactivation()
    {
        return $this->bbactivation;
    }

    /**
     * Set userprix
     *
     * @param integer $userprix
     *
     * @return Modules
     */
    public function setUserprix($userprix)
    {
        $this->userprix = $userprix;
    
        return $this;
    }

    /**
     * Get userprix
     *
     * @return integer
     */
    public function getUserprix()
    {
        return $this->userprix;
    }

    /**
     * Set userdebut
     *
     * @param string $userdebut
     *
     * @return Modules
     */
    public function setUserdebut($userdebut)
    {
        $this->userdebut = $userdebut;
    
        return $this;
    }

    /**
     * Get userdebut
     *
     * @return string
     */
    public function getUserdebut()
    {
        return $this->userdebut;
    }

    /**
     * Set userexpiration
     *
     * @param string $userexpiration
     *
     * @return Modules
     */
    public function setUserexpiration($userexpiration)
    {
        $this->userexpiration = $userexpiration;
    
        return $this;
    }

    /**
     * Get userexpiration
     *
     * @return string
     */
    public function getUserexpiration()
    {
        return $this->userexpiration;
    }

    /**
     * Set bbuseractivation
     *
     * @param boolean $bbuseractivation
     *
     * @return Modules
     */
    public function setBbuseractivation($bbuseractivation)
    {
        $this->bbuseractivation = $bbuseractivation;
    
        return $this;
    }

    /**
     * Get bbuseractivation
     *
     * @return boolean
     */
    public function getBbuseractivation()
    {
        return $this->bbuseractivation;
    }

    /**
     * Set usersociete
     *
     * @param string $usersociete
     *
     * @return Modules
     */
    public function setUsersociete($usersociete)
    {
        $this->usersociete = $usersociete;
    
        return $this;
    }

    /**
     * Get usersociete
     *
     * @return string
     */
    public function getUsersociete()
    {
        return $this->usersociete;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->moda = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set module3
     *
     * @param string $module3
     *
     * @return Modules
     */
    public function setModule3($module3)
    {
        $this->module3 = $module3;
    
        return $this;
    }

    /**
     * Get module3
     *
     * @return string
     */
    public function getModule3()
    {
        return $this->module3;
    }

    /**
     * Set module3prix
     *
     * @param integer $module3prix
     *
     * @return Modules
     */
    public function setModule3prix($module3prix)
    {
        $this->module3prix = $module3prix;
    
        return $this;
    }

    /**
     * Get module3prix
     *
     * @return integer
     */
    public function getModule3prix()
    {
        return $this->module3prix;
    }

    /**
     * Set module3debut
     *
     * @param string $module3debut
     *
     * @return Modules
     */
    public function setModule3debut($module3debut)
    {
        $this->module3debut = $module3debut;
    
        return $this;
    }

    /**
     * Get module3debut
     *
     * @return string
     */
    public function getModule3debut()
    {
        return $this->module3debut;
    }

    /**
     * Set module3expiration
     *
     * @param string $module3expiration
     *
     * @return Modules
     */
    public function setModule3expiration($module3expiration)
    {
        $this->module3expiration = $module3expiration;
    
        return $this;
    }

    /**
     * Get module3expiration
     *
     * @return string
     */
    public function getModule3expiration()
    {
        return $this->module3expiration;
    }

    /**
     * Set module3activation
     *
     * @param boolean $module3activation
     *
     * @return Modules
     */
    public function setModule3activation($module3activation)
    {
        $this->module3activation = $module3activation;
    
        return $this;
    }

    /**
     * Get module3activation
     *
     * @return boolean
     */
    public function getModule3activation()
    {
        return $this->module3activation;
    }

    /**
     * Set module4
     *
     * @param string $module4
     *
     * @return Modules
     */
    public function setModule4($module4)
    {
        $this->module4 = $module4;
    
        return $this;
    }

    /**
     * Get module4
     *
     * @return string
     */
    public function getModule4()
    {
        return $this->module4;
    }

    /**
     * Set module4prix
     *
     * @param integer $module4prix
     *
     * @return Modules
     */
    public function setModule4prix($module4prix)
    {
        $this->module4prix = $module4prix;
    
        return $this;
    }

    /**
     * Get module4prix
     *
     * @return integer
     */
    public function getModule4prix()
    {
        return $this->module4prix;
    }

    /**
     * Set module4debut
     *
     * @param string $module4debut
     *
     * @return Modules
     */
    public function setModule4debut($module4debut)
    {
        $this->module4debut = $module4debut;
    
        return $this;
    }

    /**
     * Get module4debut
     *
     * @return string
     */
    public function getModule4debut()
    {
        return $this->module4debut;
    }

    /**
     * Set module4expiration
     *
     * @param string $module4expiration
     *
     * @return Modules
     */
    public function setModule4expiration($module4expiration)
    {
        $this->module4expiration = $module4expiration;
    
        return $this;
    }

    /**
     * Get module4expiration
     *
     * @return string
     */
    public function getModule4expiration()
    {
        return $this->module4expiration;
    }

    /**
     * Set module4activation
     *
     * @param boolean $module4activation
     *
     * @return Modules
     */
    public function setModule4activation($module4activation)
    {
        $this->module4activation = $module4activation;
    
        return $this;
    }

    /**
     * Get module4activation
     *
     * @return boolean
     */
    public function getModule4activation()
    {
        return $this->module4activation;
    }

    /**
     * Set module5
     *
     * @param string $module5
     *
     * @return Modules
     */
    public function setModule5($module5)
    {
        $this->module5 = $module5;
    
        return $this;
    }

    /**
     * Get module5
     *
     * @return string
     */
    public function getModule5()
    {
        return $this->module5;
    }

    /**
     * Set module5prix
     *
     * @param integer $module5prix
     *
     * @return Modules
     */
    public function setModule5prix($module5prix)
    {
        $this->module5prix = $module5prix;
    
        return $this;
    }

    /**
     * Get module5prix
     *
     * @return integer
     */
    public function getModule5prix()
    {
        return $this->module5prix;
    }

    /**
     * Set module5debut
     *
     * @param string $module5debut
     *
     * @return Modules
     */
    public function setModule5debut($module5debut)
    {
        $this->module5debut = $module5debut;
    
        return $this;
    }

    /**
     * Get module5debut
     *
     * @return string
     */
    public function getModule5debut()
    {
        return $this->module5debut;
    }

    /**
     * Set module5expiration
     *
     * @param string $module5expiration
     *
     * @return Modules
     */
    public function setModule5expiration($module5expiration)
    {
        $this->module5expiration = $module5expiration;
    
        return $this;
    }

    /**
     * Get module5expiration
     *
     * @return string
     */
    public function getModule5expiration()
    {
        return $this->module5expiration;
    }

    /**
     * Set module5activation
     *
     * @param boolean $module5activation
     *
     * @return Modules
     */
    public function setModule5activation($module5activation)
    {
        $this->module5activation = $module5activation;
    
        return $this;
    }

    /**
     * Get module5activation
     *
     * @return boolean
     */
    public function getModule5activation()
    {
        return $this->module5activation;
    }

    /**
     * Set module6
     *
     * @param string $module6
     *
     * @return Modules
     */
    public function setModule6($module6)
    {
        $this->module6 = $module6;
    
        return $this;
    }

    /**
     * Get module6
     *
     * @return string
     */
    public function getModule6()
    {
        return $this->module6;
    }

    /**
     * Set module6prix
     *
     * @param integer $module6prix
     *
     * @return Modules
     */
    public function setModule6prix($module6prix)
    {
        $this->module6prix = $module6prix;
    
        return $this;
    }

    /**
     * Get module6prix
     *
     * @return integer
     */
    public function getModule6prix()
    {
        return $this->module6prix;
    }

    /**
     * Set module6debut
     *
     * @param string $module6debut
     *
     * @return Modules
     */
    public function setModule6debut($module6debut)
    {
        $this->module6debut = $module6debut;
    
        return $this;
    }

    /**
     * Get module6debut
     *
     * @return string
     */
    public function getModule6debut()
    {
        return $this->module6debut;
    }

    /**
     * Set module6expiration
     *
     * @param string $module6expiration
     *
     * @return Modules
     */
    public function setModule6expiration($module6expiration)
    {
        $this->module6expiration = $module6expiration;
    
        return $this;
    }

    /**
     * Get module6expiration
     *
     * @return string
     */
    public function getModule6expiration()
    {
        return $this->module6expiration;
    }

    /**
     * Set module6activation
     *
     * @param boolean $module6activation
     *
     * @return Modules
     */
    public function setModule6activation($module6activation)
    {
        $this->module6activation = $module6activation;
    
        return $this;
    }

    /**
     * Get module6activation
     *
     * @return boolean
     */
    public function getModule6activation()
    {
        return $this->module6activation;
    }

    /**
     * Set module7
     *
     * @param string $module7
     *
     * @return Modules
     */
    public function setModule7($module7)
    {
        $this->module7 = $module7;
    
        return $this;
    }

    /**
     * Get module7
     *
     * @return string
     */
    public function getModule7()
    {
        return $this->module7;
    }

    /**
     * Set module7prix
     *
     * @param integer $module7prix
     *
     * @return Modules
     */
    public function setModule7prix($module7prix)
    {
        $this->module7prix = $module7prix;
    
        return $this;
    }

    /**
     * Get module7prix
     *
     * @return integer
     */
    public function getModule7prix()
    {
        return $this->module7prix;
    }

    /**
     * Set module7debut
     *
     * @param string $module7debut
     *
     * @return Modules
     */
    public function setModule7debut($module7debut)
    {
        $this->module7debut = $module7debut;
    
        return $this;
    }

    /**
     * Get module7debut
     *
     * @return string
     */
    public function getModule7debut()
    {
        return $this->module7debut;
    }

    /**
     * Set module7expiration
     *
     * @param string $module7expiration
     *
     * @return Modules
     */
    public function setModule7expiration($module7expiration)
    {
        $this->module7expiration = $module7expiration;
    
        return $this;
    }

    /**
     * Get module7expiration
     *
     * @return string
     */
    public function getModule7expiration()
    {
        return $this->module7expiration;
    }

    /**
     * Set module7activation
     *
     * @param boolean $module7activation
     *
     * @return Modules
     */
    public function setModule7activation($module7activation)
    {
        $this->module7activation = $module7activation;
    
        return $this;
    }

    /**
     * Get module7activation
     *
     * @return boolean
     */
    public function getModule7activation()
    {
        return $this->module7activation;
    }

    /**
     * Set module8
     *
     * @param string $module8
     *
     * @return Modules
     */
    public function setModule8($module8)
    {
        $this->module8 = $module8;
    
        return $this;
    }

    /**
     * Get module8
     *
     * @return string
     */
    public function getModule8()
    {
        return $this->module8;
    }

    /**
     * Set module8prix
     *
     * @param integer $module8prix
     *
     * @return Modules
     */
    public function setModule8prix($module8prix)
    {
        $this->module8prix = $module8prix;
    
        return $this;
    }

    /**
     * Get module8prix
     *
     * @return integer
     */
    public function getModule8prix()
    {
        return $this->module8prix;
    }

    /**
     * Set module8debut
     *
     * @param string $module8debut
     *
     * @return Modules
     */
    public function setModule8debut($module8debut)
    {
        $this->module8debut = $module8debut;
    
        return $this;
    }

    /**
     * Get module8debut
     *
     * @return string
     */
    public function getModule8debut()
    {
        return $this->module8debut;
    }

    /**
     * Set module8expiration
     *
     * @param string $module8expiration
     *
     * @return Modules
     */
    public function setModule8expiration($module8expiration)
    {
        $this->module8expiration = $module8expiration;
    
        return $this;
    }

    /**
     * Get module8expiration
     *
     * @return string
     */
    public function getModule8expiration()
    {
        return $this->module8expiration;
    }

    /**
     * Set module8activation
     *
     * @param boolean $module8activation
     *
     * @return Modules
     */
    public function setModule8activation($module8activation)
    {
        $this->module8activation = $module8activation;
    
        return $this;
    }

    /**
     * Get module8activation
     *
     * @return boolean
     */
    public function getModule8activation()
    {
        return $this->module8activation;
    }

    /**
     * Set module9
     *
     * @param string $module9
     *
     * @return Modules
     */
    public function setModule9($module9)
    {
        $this->module9 = $module9;
    
        return $this;
    }

    /**
     * Get module9
     *
     * @return string
     */
    public function getModule9()
    {
        return $this->module9;
    }

    /**
     * Set module9prix
     *
     * @param integer $module9prix
     *
     * @return Modules
     */
    public function setModule9prix($module9prix)
    {
        $this->module9prix = $module9prix;
    
        return $this;
    }

    /**
     * Get module9prix
     *
     * @return integer
     */
    public function getModule9prix()
    {
        return $this->module9prix;
    }

    /**
     * Set module9debut
     *
     * @param string $module9debut
     *
     * @return Modules
     */
    public function setModule9debut($module9debut)
    {
        $this->module9debut = $module9debut;
    
        return $this;
    }

    /**
     * Get module9debut
     *
     * @return string
     */
    public function getModule9debut()
    {
        return $this->module9debut;
    }

    /**
     * Set module9expiration
     *
     * @param string $module9expiration
     *
     * @return Modules
     */
    public function setModule9expiration($module9expiration)
    {
        $this->module9expiration = $module9expiration;
    
        return $this;
    }

    /**
     * Get module9expiration
     *
     * @return string
     */
    public function getModule9expiration()
    {
        return $this->module9expiration;
    }

    /**
     * Set module9activation
     *
     * @param boolean $module9activation
     *
     * @return Modules
     */
    public function setModule9activation($module9activation)
    {
        $this->module9activation = $module9activation;
    
        return $this;
    }

    /**
     * Get module9activation
     *
     * @return boolean
     */
    public function getModule9activation()
    {
        return $this->module9activation;
    }

    /**
     * Set module10
     *
     * @param string $module10
     *
     * @return Modules
     */
    public function setModule10($module10)
    {
        $this->module10 = $module10;
    
        return $this;
    }

    /**
     * Get module10
     *
     * @return string
     */
    public function getModule10()
    {
        return $this->module10;
    }

    /**
     * Set module10prix
     *
     * @param integer $module10prix
     *
     * @return Modules
     */
    public function setModule10prix($module10prix)
    {
        $this->module10prix = $module10prix;
    
        return $this;
    }

    /**
     * Get module10prix
     *
     * @return integer
     */
    public function getModule10prix()
    {
        return $this->module10prix;
    }

    /**
     * Set module10debut
     *
     * @param string $module10debut
     *
     * @return Modules
     */
    public function setModule10debut($module10debut)
    {
        $this->module10debut = $module10debut;
    
        return $this;
    }

    /**
     * Get module10debut
     *
     * @return string
     */
    public function getModule10debut()
    {
        return $this->module10debut;
    }

    /**
     * Set module10expiration
     *
     * @param string $module10expiration
     *
     * @return Modules
     */
    public function setModule10expiration($module10expiration)
    {
        $this->module10expiration = $module10expiration;
    
        return $this;
    }

    /**
     * Get module10expiration
     *
     * @return string
     */
    public function getModule10expiration()
    {
        return $this->module10expiration;
    }

    /**
     * Set module10activation
     *
     * @param boolean $module10activation
     *
     * @return Modules
     */
    public function setModule10activation($module10activation)
    {
        $this->module10activation = $module10activation;
    
        return $this;
    }

    /**
     * Get module10activation
     *
     * @return boolean
     */
    public function getModule10activation()
    {
        return $this->module10activation;
    }

    /**
     * Set module11
     *
     * @param string $module11
     *
     * @return Modules
     */
    public function setModule11($module11)
    {
        $this->module11 = $module11;
    
        return $this;
    }

    /**
     * Get module11
     *
     * @return string
     */
    public function getModule11()
    {
        return $this->module11;
    }

    /**
     * Set module11prix
     *
     * @param integer $module11prix
     *
     * @return Modules
     */
    public function setModule11prix($module11prix)
    {
        $this->module11prix = $module11prix;
    
        return $this;
    }

    /**
     * Get module11prix
     *
     * @return integer
     */
    public function getModule11prix()
    {
        return $this->module11prix;
    }

    /**
     * Set module11debut
     *
     * @param string $module11debut
     *
     * @return Modules
     */
    public function setModule11debut($module11debut)
    {
        $this->module11debut = $module11debut;
    
        return $this;
    }

    /**
     * Get module11debut
     *
     * @return string
     */
    public function getModule11debut()
    {
        return $this->module11debut;
    }

    /**
     * Set module11expiration
     *
     * @param string $module11expiration
     *
     * @return Modules
     */
    public function setModule11expiration($module11expiration)
    {
        $this->module11expiration = $module11expiration;
    
        return $this;
    }

    /**
     * Get module11expiration
     *
     * @return string
     */
    public function getModule11expiration()
    {
        return $this->module11expiration;
    }

    /**
     * Set module11activation
     *
     * @param boolean $module11activation
     *
     * @return Modules
     */
    public function setModule11activation($module11activation)
    {
        $this->module11activation = $module11activation;
    
        return $this;
    }

    /**
     * Get module11activation
     *
     * @return boolean
     */
    public function getModule11activation()
    {
        return $this->module11activation;
    }

    /**
     * Set module12
     *
     * @param string $module12
     *
     * @return Modules
     */
    public function setModule12($module12)
    {
        $this->module12 = $module12;
    
        return $this;
    }

    /**
     * Get module12
     *
     * @return string
     */
    public function getModule12()
    {
        return $this->module12;
    }

    /**
     * Set module12prix
     *
     * @param integer $module12prix
     *
     * @return Modules
     */
    public function setModule12prix($module12prix)
    {
        $this->module12prix = $module12prix;
    
        return $this;
    }

    /**
     * Get module12prix
     *
     * @return integer
     */
    public function getModule12prix()
    {
        return $this->module12prix;
    }

    /**
     * Set module12debut
     *
     * @param string $module12debut
     *
     * @return Modules
     */
    public function setModule12debut($module12debut)
    {
        $this->module12debut = $module12debut;
    
        return $this;
    }

    /**
     * Get module12debut
     *
     * @return string
     */
    public function getModule12debut()
    {
        return $this->module12debut;
    }

    /**
     * Set module12expiration
     *
     * @param string $module12expiration
     *
     * @return Modules
     */
    public function setModule12expiration($module12expiration)
    {
        $this->module12expiration = $module12expiration;
    
        return $this;
    }

    /**
     * Get module12expiration
     *
     * @return string
     */
    public function getModule12expiration()
    {
        return $this->module12expiration;
    }

    /**
     * Set module12activation
     *
     * @param boolean $module12activation
     *
     * @return Modules
     */
    public function setModule12activation($module12activation)
    {
        $this->module12activation = $module12activation;
    
        return $this;
    }

    /**
     * Get module12activation
     *
     * @return boolean
     */
    public function getModule12activation()
    {
        return $this->module12activation;
    }

    /**
     * Set datemailalerte
     *
     * @param string $datemailalerte
     *
     * @return Modules
     */
    public function setDatemailalerte($datemailalerte)
    {
        $this->datemailalerte = $datemailalerte;
    
        return $this;
    }

    /**
     * Get datemailalerte
     *
     * @return string
     */
    public function getDatemailalerte()
    {
        return $this->datemailalerte;
    }

    /**
     * Set datemailarret
     *
     * @param string $datemailarret
     *
     * @return Modules
     */
    public function setDatemailarret($datemailarret)
    {
        $this->datemailarret = $datemailarret;
    
        return $this;
    }

    /**
     * Get datemailarret
     *
     * @return string
     */
    public function getDatemailarret()
    {
        return $this->datemailarret;
    }

    /**
     * Add moda
     *
     * @param \Bacloo\CrmBundle\Entity\Moda $moda
     *
     * @return Modules
     */
    public function addModa(\Bacloo\CrmBundle\Entity\Moda $moda)
    {
        $this->moda[] = $moda;
    
        return $this;
    }

    /**
     * Remove moda
     *
     * @param \Bacloo\CrmBundle\Entity\Moda $moda
     */
    public function removeModa(\Bacloo\CrmBundle\Entity\Moda $moda)
    {
        $this->moda->removeElement($moda);
    }

    /**
     * Get moda
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModa()
    {
        return $this->moda;
    }
}
