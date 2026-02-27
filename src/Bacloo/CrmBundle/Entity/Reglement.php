<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Reglement
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
     * @ORM\Column(name="numfacture", type="string", length=255)
     */
    private $numfacture;

    /**
     * @var string
     *
     * @ORM\Column(name="typedoc", type="string", length=255)
     */
    private $typedoc;

    /**
     * @var string
     *
     * @ORM\Column(name="echeance", type="string", length=255, nullable=true)
     */
    private $echeance;

    /**
     * @var decimal
     *
     * @ORM\Column(name="totalttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $totalttc;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montanttroppercu", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montanttroppercu;

    /**
     * @var decimal
     *
     * @ORM\Column(name="aimputer", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $aimputer;

    /**
     * @var decimal
     *
     * @ORM\Column(name="restedu", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $restedu;

    /**
     * @var string
     *
     * @ORM\Column(name="selection", type="boolean", nullable=true)
     */
    private $selection;

    /**
     * @var string
     *
     * @ORM\Column(name="troppercu", type="boolean", nullable=true)
     */
    private $troppercu;

    /**
     * @var string
     *
     * @ORM\Column(name="regler", type="boolean", length=255, nullable=true)
     */
    private $regler;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantavoir", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantavoir;

    /**
     * @var integer
     *
     * @ORM\Column(name="escompte", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $escompte;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Regla", cascade={"persist"}, orphanRemoval=true)
     */
    Public $regla;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regla = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set numfacture
     *
     * @param string $numfacture
     *
     * @return Reglement
     */
    public function setNumfacture($numfacture)
    {
        $this->numfacture = $numfacture;

        return $this;
    }

    /**
     * Get numfacture
     *
     * @return string
     */
    public function getNumfacture()
    {
        return $this->numfacture;
    }

    /**
     * Set totalttc
     *
     * @param string $totalttc
     *
     * @return Reglement
     */
    public function setTotalttc($totalttc)
    {
        $this->totalttc = $totalttc;

        return $this;
    }

    /**
     * Get totalttc
     *
     * @return string
     */
    public function getTotalttc()
    {
        return $this->totalttc;
    }

    /**
     * Set selection
     *
     * @param boolean $selection
     *
     * @return Reglement
     */
    public function setSelection($selection)
    {
        $this->selection = $selection;

        return $this;
    }

    /**
     * Get selection
     *
     * @return boolean
     */
    public function getSelection()
    {
        return $this->selection;
    }

    /**
     * Add regla
     *
     * @param \Bacloo\CrmBundle\Entity\Regla $regla
     *
     * @return Reglement
     */
    public function addRegla(\Bacloo\CrmBundle\Entity\Regla $regla)
    {
        $this->regla[] = $regla;

        return $this;
    }

    /**
     * Remove regla
     *
     * @param \Bacloo\CrmBundle\Entity\Regla $regla
     */
    public function removeRegla(\Bacloo\CrmBundle\Entity\Regla $regla)
    {
        $this->regla->removeElement($regla);
    }

    /**
     * Get regla
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegla()
    {
        return $this->regla;
    }

    /**
     * Set typedoc
     *
     * @param string $typedoc
     *
     * @return Reglement
     */
    public function setTypedoc($typedoc)
    {
        $this->typedoc = $typedoc;

        return $this;
    }

    /**
     * Get typedoc
     *
     * @return string
     */
    public function getTypedoc()
    {
        return $this->typedoc;
    }

    /**
     * Set echeance
     *
     * @param string $echeance
     *
     * @return Reglement
     */
    public function setEcheance($echeance)
    {
        $this->echeance = $echeance;

        return $this;
    }

    /**
     * Get echeance
     *
     * @return string
     */
    public function getEcheance()
    {
        return $this->echeance;
    }

    /**
     * Set troppercu
     *
     * @param boolean $troppercu
     *
     * @return Reglement
     */
    public function setTroppercu($troppercu)
    {
        $this->troppercu = $troppercu;

        return $this;
    }

    /**
     * Get troppercu
     *
     * @return boolean
     */
    public function getTroppercu()
    {
        return $this->troppercu;
    }

    /**
     * Set montanttroppercu
     *
     * @param string $montanttroppercu
     *
     * @return Reglement
     */
    public function setMontanttroppercu($montanttroppercu)
    {
        $this->montanttroppercu = $montanttroppercu;

        return $this;
    }

    /**
     * Get montanttroppercu
     *
     * @return string
     */
    public function getMontanttroppercu()
    {
        return $this->montanttroppercu;
    }

    /**
     * Set montantavoir
     *
     * @param string $montantavoir
     *
     * @return Reglement
     */
    public function setMontantavoir($montantavoir)
    {
        $this->montantavoir = $montantavoir;

        return $this;
    }

    /**
     * Get montantavoir
     *
     * @return string
     */
    public function getMontantavoir()
    {
        return $this->montantavoir;
    }

    /**
     * Set escompte
     *
     * @param string $escompte
     *
     * @return Reglement
     */
    public function setEscompte($escompte)
    {
        $this->escompte = $escompte;

        return $this;
    }

    /**
     * Get escompte
     *
     * @return string
     */
    public function getEscompte()
    {
        return $this->escompte;
    }

    /**
     * Set aimputer
     *
     * @param string $aimputer
     *
     * @return Reglement
     */
    public function setAimputer($aimputer)
    {
        $this->aimputer = $aimputer;

        return $this;
    }

    /**
     * Get aimputer
     *
     * @return string
     */
    public function getAimputer()
    {
        return $this->aimputer;
    }

    /**
     * Set restedu
     *
     * @param string $restedu
     *
     * @return Reglement
     */
    public function setRestedu($restedu)
    {
        $this->restedu = $restedu;

        return $this;
    }

    /**
     * Get restedu
     *
     * @return string
     */
    public function getRestedu()
    {
        return $this->restedu;
    }

    /**
     * Set regler
     *
     * @param boolean $regler
     *
     * @return Reglement
     */
    public function setRegler($regler)
    {
        $this->regler = $regler;

        return $this;
    }

    /**
     * Get regler
     *
     * @return boolean
     */
    public function getRegler()
    {
        return $this->regler;
    }
}
