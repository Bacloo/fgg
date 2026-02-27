<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logisrep
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LogisrepRepository")
 */
class Logisrep
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
     * @ORM\Column(name="etatlog", type="string", length=255, nullable=true)
     */
    private $etatlog;

	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Logistiquerep", cascade={"persist"}, orphanRemoval=true)
	* @ORM\OrderBy({"id" = "DESC"})
	*/		
	Private $logistiquerep;


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
     * Set etatlog
     *
     * @param string $etatlog
     *
     * @return Logisrep
     */
    public function setEtatlog($etatlog)
    {
        $this->etatlog = $etatlog;

        return $this;
    }

    /**
     * Get etatlog
     *
     * @return string
     */
    public function getEtatlog()
    {
        return $this->etatlog;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->logistiquerep = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add logistiquerep
     *
     * @param \Bacloo\CrmBundle\Entity\Logistiquerep $logistiquerep
     *
     * @return Logisrep
     */
    public function addLogistiquerep(\Bacloo\CrmBundle\Entity\Logistiquerep $logistiquerep)
    {
        $this->logistiquerep[] = $logistiquerep;

        return $this;
    }

    /**
     * Remove logistiquerep
     *
     * @param \Bacloo\CrmBundle\Entity\Logistiquerep $logistiquerep
     */
    public function removeLogistiquerep(\Bacloo\CrmBundle\Entity\Logistiquerep $logistiquerep)
    {
        $this->logistiquerep->removeElement($logistiquerep);
    }

    /**
     * Get logistiquerep
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLogistiquerep()
    {
        return $this->logistiquerep;
    }
}
