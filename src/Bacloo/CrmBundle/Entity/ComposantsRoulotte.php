<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComposantsRoulotte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ComposantsRoulotteRepository")
 */
class ComposantsRoulotte
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="decimal")
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="pu", type="decimal")
     */
    private $pu;

    /**
     * @var string
     *
     * @ORM\Column(name="codifvente", type="string", length=255)
     */
    private $codifvente;


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
     * Set description
     *
     * @param string $description
     *
     * @return ComposantsRoulotte
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
     * @param string $quantite
     *
     * @return ComposantsRoulotte
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
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
     * @return ComposantsRoulotte
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
     * Set codifvente
     *
     * @param string $codifvente
     *
     * @return ComposantsRoulotte
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
}
