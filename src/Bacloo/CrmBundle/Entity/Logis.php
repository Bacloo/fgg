<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logis
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LogisRepository")
 */
class Logis
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
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Logistique", cascade={"persist"}, orphanRemoval=true)
	* @ORM\OrderBy({"id" = "DESC"})
	*/		
	Private $logistique;


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
     * @return Logis
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
        $this->logistique = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add logistique
     *
     * @param \Bacloo\CrmBundle\Entity\Logistique $logistique
     *
     * @return Logis
     */
    public function addLogistique(\Bacloo\CrmBundle\Entity\Logistique $logistique)
    {
        $this->logistique[] = $logistique;

        return $this;
    }

    /**
     * Remove logistique
     *
     * @param \Bacloo\CrmBundle\Entity\Logistique $logistique
     */
    public function removeLogistique(\Bacloo\CrmBundle\Entity\Logistique $logistique)
    {
        $this->logistique->removeElement($logistique);
    }

    /**
     * Get logistique
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLogistique()
    {
        return $this->logistique;
    }
}
