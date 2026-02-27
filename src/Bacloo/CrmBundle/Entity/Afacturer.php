<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Afacturer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\AfacturerRepository")
 */
class Afacturer
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
     * @var DateTime
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=255)
     */
    private $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="compte", type="string", length=255)
     */
    private $compte;

    /**
     * @var integer
     *
     * @ORM\Column(name="debit", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $debit;

    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $credit;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="piece", type="string", length=255)
     */
    private $piece;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="echeance", type="string", length=255)
     */
    private $echeance;

    /**
     * @var string
     *
     * @ORM\Column(name="analytique", type="string", length=255)
     */
    private $analytique;

    /**
     * @var string
     *
     * @ORM\Column(name="modepaiement", type="string", length=255, nullable=true)
     */
    private $modepaiement;

    /**
     * @var integer
     *
     * @ORM\Column(name="codegroupe", type="integer", length=255, nullable=true)
     */
    private $codegroupe;

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
     * @param string $date
     *
     * @return Afacturer
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set journal
     *
     * @param string $journal
     *
     * @return Afacturer
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;

        return $this;
    }

    /**
     * Get journal
     *
     * @return string
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Set compte
     *
     * @param string $compte
     *
     * @return Afacturer
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return string
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set debit
     *
     * @param integer $debit
     *
     * @return Afacturer
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;

        return $this;
    }

    /**
     * Get debit
     *
     * @return integer
     */
    public function getDebit()
    {
        return $this->debit;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     *
     * @return Afacturer
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Afacturer
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set piece
     *
     * @param string $piece
     *
     * @return Afacturer
     */
    public function setPiece($piece)
    {
        $this->piece = $piece;

        return $this;
    }

    /**
     * Get piece
     *
     * @return string
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * Set analytique
     *
     * @param string $analytique
     *
     * @return Afacturer
     */
    public function setAnalytique($analytique)
    {
        $this->analytique = $analytique;

        return $this;
    }

    /**
     * Get analytique
     *
     * @return string
     */
    public function getAnalytique()
    {
        return $this->analytique;
    }

    /**
     * Set echeance
     *
     * @param string $echeance
     *
     * @return Afacturer
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
     * Set modepaiement
     *
     * @param string $modepaiement
     *
     * @return Afacturer
     */
    public function setModepaiement($modepaiement)
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }

    /**
     * Get modepaiement
     *
     * @return string
     */
    public function getModepaiement()
    {
        return $this->modepaiement;
    }

    /**
     * Set codegroupe
     *
     * @param integer $codegroupe
     *
     * @return Afacturer
     */
    public function setCodegroupe($codegroupe)
    {
        $this->codegroupe = $codegroupe;

        return $this;
    }

    /**
     * Get codegroupe
     *
     * @return integer
     */
    public function getCodegroupe()
    {
        return $this->codegroupe;
    }
}
