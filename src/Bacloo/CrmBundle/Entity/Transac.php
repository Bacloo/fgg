<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transac
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\TransacRepository")
 */
class Transac
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
     * @ORM\Column(name="vendeur", type="string", length=255)
     */
    private $vendeur;

    /**
     * @var string
     *
     * @ORM\Column(name="acheteur", type="string", length=255)
     */
    private $acheteur;

	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Transaction", cascade={"persist"})
	* @ORM\OrderBy({"id" = "DESC"})
	*/		
	Private $transaction;

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
     * Set vendeur
     *
     * @param string $vendeur
     * @return Transac
     */
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return string 
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * Set acheteur
     *
     * @param string $acheteur
     * @return Transac
     */
    public function setAcheteur($acheteur)
    {
        $this->acheteur = $acheteur;

        return $this;
    }

    /**
     * Get acheteur
     *
     * @return string 
     */
    public function getAcheteur()
    {
        return $this->acheteur;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->transaction = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add transaction
     *
     * @param \Bacloo\CrmBundle\Entity\Transaction $transaction
     * @return Transac
     */
    public function addTransaction(\Bacloo\CrmBundle\Entity\Transaction $transaction)
    {
        $this->transaction[] = $transaction;

        return $this;
    }

    /**
     * Remove transaction
     *
     * @param \Bacloo\CrmBundle\Entity\Transaction $transaction
     */
    public function removeTransaction(\Bacloo\CrmBundle\Entity\Transaction $transaction)
    {
        $this->transaction->removeElement($transaction);
    }

    /**
     * Get transaction
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
