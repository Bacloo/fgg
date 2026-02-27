<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doca
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\DocaRepository")
 */
class Doca
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
     * @ORM\Column(name="typedoc", type="string", length=255)
     */
    public $typedoc;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire", type="string", length=255, nullable=true)
     */
    public $destinataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddoc", type="integer")
     */
    public $iddoc;

    /**
     * @var string
     *
     * @ORM\Column(name="envoidevis", type="boolean", length=255, nullable=true)
     */
    public $envoidevis;

    /**
     * @var string
     *
     * @ORM\Column(name="envoifacture", type="boolean", length=255, nullable=true)
     */
    public $envoifacture;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Document", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "DESC"})
     */
    Private $Document;


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
     * Set typedoc
     *
     * @param string $typedoc
     *
     * @return Doca
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
     * Set iddoc
     *
     * @param integer $iddoc
     *
     * @return Doca
     */
    public function setIddoc($iddoc)
    {
        $this->iddoc = $iddoc;

        return $this;
    }

    /**
     * Get iddoc
     *
     * @return integer
     */
    public function getIddoc()
    {
        return $this->iddoc;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Document = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add document
     *
     * @param \Bacloo\CrmBundle\Entity\Document $document
     *
     * @return Doca
     */
    public function addDocument(\Bacloo\CrmBundle\Entity\Document $document)
    {
        $this->Document[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \Bacloo\CrmBundle\Entity\Document $document
     */
    public function removeDocument(\Bacloo\CrmBundle\Entity\Document $document)
    {
        $this->Document->removeElement($document);
    }

    /**
     * Get document
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * Set destinataire
     *
     * @param string $destinataire
     *
     * @return Doca
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set envoidevis
     *
     * @param boolean $envoidevis
     *
     * @return Doca
     */
    public function setEnvoidevis($envoidevis)
    {
        $this->envoidevis = $envoidevis;

        return $this;
    }

    /**
     * Get envoidevis
     *
     * @return boolean
     */
    public function getEnvoidevis()
    {
        return $this->envoidevis;
    }

    /**
     * Set envoifacture
     *
     * @param boolean $envoifacture
     *
     * @return Doca
     */
    public function setEnvoifacture($envoifacture)
    {
        $this->envoifacture = $envoifacture;

        return $this;
    }

    /**
     * Get envoifacture
     *
     * @return boolean
     */
    public function getEnvoifacture()
    {
        return $this->envoifacture;
    }
}
