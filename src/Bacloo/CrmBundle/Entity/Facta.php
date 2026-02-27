<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\FactaRepository")
 */
class Facta
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
     * @ORM\Column(name="controle", type="integer", nullable=true)
     */
    private $controle;

	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Factures", cascade={"persist"}, orphanRemoval=true)
	* @ORM\OrderBy({"id" = "DESC"})
	*/		
	Private $factures;


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
     * Set controle
     *
     * @param integer $controle
     *
     * @return Facta
     */
    public function setControle($controle)
    {
        $this->controle = $controle;

        return $this;
    }

    /**
     * Get controle
     *
     * @return integer
     */
    public function getControle()
    {
        return $this->controle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->factures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add facture
     *
     * @param \Bacloo\CrmBundle\Entity\Factures $facture
     *
     * @return Facta
     */
    public function addFacture(\Bacloo\CrmBundle\Entity\Factures $facture)
    {
        $this->factures[] = $facture;

        return $this;
    }

    /**
     * Remove facture
     *
     * @param \Bacloo\CrmBundle\Entity\Factures $facture
     */
    public function removeFacture(\Bacloo\CrmBundle\Entity\Factures $facture)
    {
        $this->factures->removeElement($facture);
    }

    /**
     * Get factures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFactures()
    {
        return $this->factures;
    }
}
