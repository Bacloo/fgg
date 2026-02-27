<?php

namespace Bacloo\CrmBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Prospects
 * @ORM\Entity
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ProspectsRepository")
 */
class Prospects
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
     * @ORM\Column(name="userid", type="string", length=255, nullable=true)
     */
    private $userid;
	
    /**
     * @var string
     *
     * @ORM\Column(name="prosp", type="string", length=255, nullable=true)
     */
    private $prosp;	

	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Prospot", cascade={"persist"})
	* @ORM\OrderBy({"id" = "DESC"})
	*/		
	Private $prospot;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->prospot = new \Doctrine\Common\Collections\ArrayCollection();
    }	

    /**
     * Add prospot
     *
     * @param \Bacloo\CrmBundle\Entity\Prospot $prospot
     * @return Prospects
     */
    public function addProspot(\Bacloo\CrmBundle\Entity\Prospot $prospot=null)
    {       
		if ($prospot) {
			$this->prospot[] = $prospot;
		}
        return $this;
    }

    /**
     * Remove prospot
     *
     * @param \Bacloo\CrmBundle\Entity\Prospot $prospot
     */
    public function removeProspot(\Bacloo\CrmBundle\Entity\Prospot $prospot)
    {
        $this->prospot->removeElement($prospot);
    }

    /**
     * Get prospot
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProspot()
    {
        return $this->prospot;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return Prospects
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }
	
    /**
     * Set prosp
     *
     * @param string $userid
     * @return Prospects
     */
    public function setProsp($prosp)
    {
        $this->prosp = $prosp;

        return $this;
    }

    /**
     * Get prosp
     *
     * @return string 
     */
    public function getProsp()
    {
        return $this->prosp;
    }	
}
