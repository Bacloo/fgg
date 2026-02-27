<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pipeline
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\PipelineRepository")
 */
class Pipeline
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
     * @var string
     *
     * @ORM\Column(name="pipename", type="string", length=255)
     */
    private $pipename;

    /**
     * @var integer
     *
     * @ORM\Column(name="pipeorder", type="integer")
     */
    private $pipeorder;		

    /**
     * @var string
     *
     * @ORM\Column(name="perdu", type="boolean", length=255, nullable=true)
     */
    private $perdu;		

    /**
     * @var string
     *
     * @ORM\Column(name="exclusion", type="boolean", length=255, nullable=true)
     */
    private $exclusion;		

    /**
     * @var string
     *
     * @ORM\Column(name="realise", type="boolean", length=255, nullable=true)
     */
    private $realise;

	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Userpipe", cascade={"persist"})
	*/		
	Private $userpipe;

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
     * @return Pipeline
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
     * @return Pipeline
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
     * Set pipename
     *
     * @param string $pipename
     *
     * @return Pipeline
     */
    public function setPipename($pipename)
    {
        $this->pipename = $pipename;
    
        return $this;
    }

    /**
     * Get pipename
     *
     * @return string
     */
    public function getPipename()
    {
        return $this->pipename;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Set pipeorder
     *
     * @param integer $pipeorder
     *
     * @return Pipeline
     */
    public function setPipeorder($pipeorder)
    {
        $this->pipeorder = $pipeorder;
    
        return $this;
    }

    /**
     * Get pipeorder
     *
     * @return integer
     */
    public function getPipeorder()
    {
        return $this->pipeorder;
    }

    /**
     * Add userpipe
     *
     * @param \Bacloo\CrmBundle\Entity\Userpipe $userpipe
     *
     * @return Pipeline
     */
    public function addUserpipe(\Bacloo\CrmBundle\Entity\Userpipe $userpipe)
    {
        $this->userpipe[] = $userpipe;
    
        return $this;
    }

    /**
     * Remove userpipe
     *
     * @param \Bacloo\CrmBundle\Entity\Userpipe $userpipe
     */
    public function removeUserpipe(\Bacloo\CrmBundle\Entity\Userpipe $userpipe)
    {
        $this->userpipe->removeElement($userpipe);
    }

    /**
     * Get userpipe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserpipe()
    {
        return $this->userpipe;
    }
	
	public function __toString()
	{
		return $this->pipename;
	}	

    /**
     * Set perdu
     *
     * @param boolean $perdu
     *
     * @return Pipeline
     */
    public function setPerdu($perdu)
    {
        $this->perdu = $perdu;
    
        return $this;
    }

    /**
     * Get perdu
     *
     * @return boolean
     */
    public function getPerdu()
    {
        return $this->perdu;
    }

    /**
     * Set exclusion
     *
     * @param boolean $exclusion
     *
     * @return Pipeline
     */
    public function setExclusion($exclusion)
    {
        $this->exclusion = $exclusion;
    
        return $this;
    }

    /**
     * Get exclusion
     *
     * @return boolean
     */
    public function getExclusion()
    {
        return $this->exclusion;
    }

    /**
     * Set realise
     *
     * @param boolean $realise
     *
     * @return Pipeline
     */
    public function setRealise($realise)
    {
        $this->realise = $realise;
    
        return $this;
    }

    /**
     * Get realise
     *
     * @return boolean
     */
    public function getRealise()
    {
        return $this->realise;
    }
}
