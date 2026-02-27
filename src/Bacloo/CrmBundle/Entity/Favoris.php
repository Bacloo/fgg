<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\FavorisRepository")
 */
class Favoris
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
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="favuserid", type="integer")
     */
    private $favuserid;

    /**
     * @var string
     *
     * @ORM\Column(name="favusername", type="string", length=255)
     */
    private $favusername;

    /**
     * @var string
     *
     * @ORM\Column(name="favemail", type="string", length=255)
     */
    private $favemail;

	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Userfav", cascade={"persist"})
	*/		
	Private $userfav;

    /**
     * @var boolean
     *
     * @ORM\Column(name="toutpart", type="boolean", nullable=true)
     */
    private $toutpart;

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
     * @return Favoris
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
     * @return Favoris
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
     * Set favuserid
     *
     * @param integer $favuserid
     *
     * @return Favoris
     */
    public function setFavuserid($favuserid)
    {
        $this->favuserid = $favuserid;

        return $this;
    }

    /**
     * Get favuserid
     *
     * @return integer
     */
    public function getFavuserid()
    {
        return $this->favuserid;
    }

    /**
     * Set favusername
     *
     * @param string $favusername
     *
     * @return Favoris
     */
    public function setFavusername($favusername)
    {
        $this->favusername = $favusername;

        return $this;
    }

    /**
     * Get favusername
     *
     * @return string
     */
    public function getFavusername()
    {
        return $this->favusername;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userfav = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add userfav
     *
     * @param \Bacloo\CrmBundle\Entity\Userfav $userfav
     *
     * @return Favoris
     */
    public function addUserfav(\Bacloo\CrmBundle\Entity\Userfav $userfav)
    {
        $this->userfav[] = $userfav;

        return $this;
    }

    /**
     * Remove userfav
     *
     * @param \Bacloo\CrmBundle\Entity\Userfav $userfav
     */
    public function removeUserfav(\Bacloo\CrmBundle\Entity\Userfav $userfav)
    {
        $this->userfav->removeElement($userfav);
    }

    /**
     * Get userfav
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserfav()
    {
        return $this->userfav;
    }

    /**
     * Set favemail
     *
     * @param string $favemail
     *
     * @return Favoris
     */
    public function setFavemail($favemail)
    {
        $this->favemail = $favemail;

        return $this;
    }

    /**
     * Get favemail
     *
     * @return string
     */
    public function getFavemail()
    {
        return $this->favemail;
    }

    /**
     * Set toutpart
     *
     * @param boolean $toutpart
     *
     * @return Favoris
     */
    public function setAll($toutpart)
    {
        $this->toutpart = $toutpart;
    
        return $this;
    }

    /**
     * Get toutpart
     *
     * @return boolean
     */
    public function getAll()
    {
        return $this->toutpart;
    }
	
    /**
     * Set toutpart
     *
     * @param boolean $toutpart
     *
     * @return Favoris
     */
    public function setToutpart($toutpart)
    {
        $this->toutpart = $toutpart;
    
        return $this;
    }

    /**
     * Get toutpart
     *
     * @return boolean
     */
    public function getToutpart()
    {
        return $this->toutpart;
    }
}
