<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\TransactionRepository")
 */
class Transaction
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
     * @ORM\Column(name="raisonsociale", type="string", length=255)
     */
    private $raisonsociale;

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
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="typetransac", type="string", length=255)
     */
    private $typetransac;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="ficheid", type="integer", nullable=true)
     */
    private $ficheid;
 
 /**
     * @var integer
     *
     * @ORM\Column(name="nficheid", type="integer", nullable=true)
     */
    private $nficheid;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="controle", type="string", length=255, nullable=true)
     */
    private $controle;
	
	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Transac", cascade={"persist"})
	*/		
	Private $transac;
	
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
     * Set raisonsociale
     *
     * @param string $raisonsociale
     * @return Transaction
     */
    public function setRaisonsociale($raisonsociale)
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }

    /**
     * Get raisonsociale
     *
     * @return string 
     */
    public function getRaisonsociale()
    {
        return $this->raisonsociale;
    }

    /**
     * Set vendeur
     *
     * @param string $vendeur
     * @return Transaction
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
     * @return Transaction
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
     * Set date
     *
     * @param \DateTime $date
     * @return Transaction
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set typetransac
     *
     * @param string $typetransac
     * @return Transaction
     */
    public function setTypetransac($typetransac)
    {
        $this->typetransac = $typetransac;

        return $this;
    }

    /**
     * Get typetransac
     *
     * @return string 
     */
    public function getTypetransac()
    {
        return $this->typetransac;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Transaction
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set ficheid
     *
     * @param integer $ficheid
     * @return Transaction
     */
    public function setFicheid($ficheid)
    {
        $this->ficheid = $ficheid;

        return $this;
    }

    /**
     * Get ficheid
     *
     * @return integer 
     */
    public function getFicheid()
    {
        return $this->ficheid;
    }

    /**
     * Set nficheid
     *
     * @param integer $nficheid
     * @return Transaction
     */
    public function setNficheid($nficheid)
    {
        $this->nficheid = $nficheid;

        return $this;
    }

    /**
     * Get nficheid
     *
     * @return integer 
     */
    public function getNficheid()
    {
        return $this->nficheid;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Transaction
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Transaction
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->transac = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add transac
     *
     * @param \Bacloo\CrmBundle\Entity\Transac $transac
     * @return Transaction
     */
    public function addTransac(\Bacloo\CrmBundle\Entity\Transac $transac)
    {
        $this->transac[] = $transac;

        return $this;
    }

    /**
     * Remove transac
     *
     * @param \Bacloo\CrmBundle\Entity\Transac $transac
     */
    public function removeTransac(\Bacloo\CrmBundle\Entity\Transac $transac)
    {
        $this->transac->removeElement($transac);
    }

    /**
     * Get transac
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTransac()
    {
        return $this->transac;
    }

    /**
     * Set controle
     *
     * @param string $controle
     * @return Transaction
     */
    public function setControle($controle)
    {
        $this->controle = $controle;

        return $this;
    }

    /**
     * Get controle
     *
     * @return string 
     */
    public function getControle()
    {
        return $this->controle;
    }
	
    public function __toString() { 
        return $this->getVendeur(); 
    } 	
}
