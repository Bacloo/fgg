<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\DocumentRepository")
 */
class Document
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    public $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="codecontrat", type="integer", length=255)
     */
    public $codecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    public $type;

    /**
     * @var string
     *
     * @ORM\Column(name="erreur", type="boolean", length=255, nullable=true)
     */
    public $erreur;

    /**
     * @var string
     *
     * @ORM\Column(name="base64", type="text", nullable=true)
     */
    public $base64;

    /**
     * @var string
     *
     * @ORM\Column(name="selection", type="boolean", length=255, nullable=true)
     */
    public $selection;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Doca", cascade={"persist"}, orphanRemoval=true)
     */
    Private $Doca;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Document
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set codecontrat
     *
     * @param integer $codecontrat
     *
     * @return Document
     */
    public function setCodecontrat($codecontrat)
    {
        $this->codecontrat = $codecontrat;

        return $this;
    }

    /**
     * Get codecontrat
     *
     * @return integer
     */
    public function getCodecontrat()
    {
        return $this->codecontrat;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Document
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Doca = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add doca
     *
     * @param \Bacloo\CrmBundle\Entity\Doca $doca
     *
     * @return Document
     */
    public function addDoca(\Bacloo\CrmBundle\Entity\Doca $doca)
    {
        $this->Doca[] = $doca;

        return $this;
    }

    /**
     * Remove doca
     *
     * @param \Bacloo\CrmBundle\Entity\Doca $doca
     */
    public function removeDoca(\Bacloo\CrmBundle\Entity\Doca $doca)
    {
        $this->Doca->removeElement($doca);
    }

    /**
     * Get doca
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDoca()
    {
        return $this->Doca;
    }

    /**
     * Set selection
     *
     * @param boolean $selection
     *
     * @return Document
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
     * Set base64
     *
     * @param string $base64
     *
     * @return Document
     */
    public function setBase64($base64)
    {
        $this->base64 = $base64;

        return $this;
    }

    /**
     * Get base64
     *
     * @return string
     */
    public function getBase64()
    {
        return $this->base64;
    }

    /**
     * Set erreur
     *
     * @param boolean $erreur
     *
     * @return Document
     */
    public function setErreur($erreur)
    {
        $this->erreur = $erreur;

        return $this;
    }

    /**
     * Get erreur
     *
     * @return boolean
     */
    public function getErreur()
    {
        return $this->erreur;
    }
}
