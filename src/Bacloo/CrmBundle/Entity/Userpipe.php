<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userpipe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\UserpipeRepository")
 */
class Userpipe
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
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Pipeline", cascade={"persist"})
	* @ORM\OrderBy({"pipeorder" = "DESC"})
	*/		
	Private $pipeline;


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
     * @return Userpipe
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
     * Constructor
     */
    public function __construct()
    {
        $this->pipeline = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pipeline
     *
     * @param \Bacloo\CrmBundle\Entity\Pipeline $pipeline
     *
     * @return Userpipe
     */
    public function addPipeline(\Bacloo\CrmBundle\Entity\Pipeline $pipeline)
    {
        $this->pipeline[] = $pipeline;
    
        return $this;
    }

    /**
     * Remove pipeline
     *
     * @param \Bacloo\CrmBundle\Entity\Pipeline $pipeline
     */
    public function removePipeline(\Bacloo\CrmBundle\Entity\Pipeline $pipeline)
    {
        $this->pipeline->removeElement($pipeline);
    }

    /**
     * Get pipeline
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPipeline()
    {
        return $this->pipeline;
    }
}
