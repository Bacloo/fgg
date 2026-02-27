<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moda
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ModaRepository")
 */
class Moda
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
     * @ORM\Column(name="societe", type="string", length=255)
     */
    private $societe;

	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Modules", cascade={"persist"})
	* @ORM\OrderBy({"id" = "DESC"})
	*/		
	Private $modules;


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
     * Set societe
     *
     * @param string $societe
     *
     * @return Moda
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    
        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add module
     *
     * @param \Bacloo\CrmBundle\Entity\Modules $module
     *
     * @return Moda
     */
    public function addModule(\Bacloo\CrmBundle\Entity\Modules $module)
    {
        $this->modules[] = $module;
    
        return $this;
    }

    /**
     * Remove module
     *
     * @param \Bacloo\CrmBundle\Entity\Modules $module
     */
    public function removeModule(\Bacloo\CrmBundle\Entity\Modules $module)
    {
        $this->modules->removeElement($module);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }
}
