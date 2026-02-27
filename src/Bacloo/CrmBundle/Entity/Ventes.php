<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ventes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\VentesRepository")
 */
class Ventes
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="string", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="refarticle", type="string", length=255)
     */
    private $refarticle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="pu", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $pu;

    /**
     * @var string
     *
     * @ORM\Column(name="montantvente", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantvente;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="codifvente", type="string", nullable=true)
     */
    private $codifvente;

    /**
     * @var string
     *
     * @ORM\Column(name="codemachineinterne", type="string", length=255, nullable=true)
     */
    Public $codemachineinterne;
	
    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Venda", cascade={"persist"}, orphanRemoval=true)
     */ 		
	Private $venda;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Ventes
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
     * Set refarticle
     *
     * @param string $refarticle
     *
     * @return Ventes
     */
    public function setRefarticle($refarticle)
    {
        $this->refarticle = $refarticle;

        return $this;
    }

    /**
     * Get refarticle
     *
     * @return string
     */
    public function getRefarticle()
    {
        return $this->refarticle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ventes
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Ventes
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set pu
     *
     * @param string $pu
     *
     * @return Ventes
     */
    public function setPu($pu)
    {
        $this->pu = $pu;

        return $this;
    }

    /**
     * Get pu
     *
     * @return string
     */
    public function getPu()
    {
        return $this->pu;
    }

    /**
     * Set montantvente
     *
     * @param string $montantvente
     *
     * @return Ventes
     */
    public function setMontantvente($montantvente)
    {
        $this->montantvente = $montantvente;

        return $this;
    }

    /**
     * Get montantvente
     *
     * @return string
     */
    public function getMontantvente()
    {
        return $this->montantvente;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Ventes
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->venda = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add venda
     *
     * @param \Bacloo\CrmBundle\Entity\Venda $venda
     *
     * @return Ventes
     */
    public function addVenda(\Bacloo\CrmBundle\Entity\Venda $venda)
    {
        $this->venda[] = $venda;

        return $this;
    }

    /**
     * Remove venda
     *
     * @param \Bacloo\CrmBundle\Entity\Venda $venda
     */
    public function removeVenda(\Bacloo\CrmBundle\Entity\Venda $venda)
    {
        $this->venda->removeElement($venda);
    }

    /**
     * Get venda
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVenda()
    {
        return $this->venda;
    }

    /**
     * Set codifvente
     *
     * @param string $codifvente
     *
     * @return Ventes
     */
    public function setCodifvente($codifvente)
    {
        $this->codifvente = $codifvente;

        return $this;
    }

    /**
     * Get codifvente
     *
     * @return string
     */
    public function getCodifvente()
    {
        return $this->codifvente;
    }

    /**
     * Set codemachineinterne
     *
     * @param string $codemachineinterne
     *
     * @return Ventes
     */
    public function setCodemachineinterne($codemachineinterne)
    {
        $this->codemachineinterne = $codemachineinterne;

        return $this;
    }

    /**
     * Get codemachineinterne
     *
     * @return string
     */
    public function getCodemachineinterne()
    {
        return $this->codemachineinterne;
    }
}
