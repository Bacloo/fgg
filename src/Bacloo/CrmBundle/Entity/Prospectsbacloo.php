<?php

namespace Bacloo\CrmBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Prospectsbacloo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ProspectsbaclooRepository")
 */
class Prospectsbacloo
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
     * @ORM\Column(name="userid", type="string", length=255)
     */
    private $userid;


	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Prospotbacloo", cascade={"persist"})
	* @ORM\OrderBy({"id" = "DESC"})
	*/		
	Private $prospotbacloo;	

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
     * @param string $userid
     *
     * @return Prospectsbacloo
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
     * Constructor
     */
    public function __construct()
    {
        $this->prospotbacloo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add prospotbacloo
     *
     * @param \Bacloo\CrmBundle\Entity\Prospotbacloo $prospotbacloo
     *
     * @return Prospectsbacloo
     */
    public function addProspotbacloo(\Bacloo\CrmBundle\Entity\Prospotbacloo $prospotbacloo)
    {
        $this->prospotbacloo[] = $prospotbacloo;

        return $this;
    }

    /**
     * Remove prospotbacloo
     *
     * @param \Bacloo\CrmBundle\Entity\Prospotbacloo $prospotbacloo
     */
    public function removeProspotbacloo(\Bacloo\CrmBundle\Entity\Prospotbacloo $prospotbacloo)
    {
        $this->prospotbacloo->removeElement($prospotbacloo);
    }

    /**
     * Get prospotbacloo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProspotbacloo()
    {
        return $this->prospotbacloo;
    }
	
	public function __toString()
	{
		return $this->userid;
	}
}
