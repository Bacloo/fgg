<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 * @ORM\Entity
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ArticlesRepository")
 */
class Articles
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
     * @ORM\Column(name="date", type="string")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=500, nullable=true)
     */
    private $titre;
	
    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=500, nullable=true)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255, nullable=true)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="sharepartenaire", type="boolean", nullable=true)
     */
    private $sharepartenaire;

    /**
     * @var string
     *
     * @ORM\Column(name="shareall", type="boolean", nullable=true)
     */
    private $shareall;

    /**
     * @var string
     *
     * @ORM\Column(name="share", type="string", length=255, nullable=true)
     */
    private $share;

    /**
     * @var string
     *
     * @ORM\Column(name="transfereur", type="string", length=255, nullable=true)
     */
    private $transfereur;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="replytitre", type="string", length=255, nullable=true)
     */
    private $replytitre;

    /**
     * @var string
     *
     * @ORM\Column(name="replytexte", type="string", length=255, nullable=true)
     */
    private $replytexte;

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
     * @return Articles
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
     * Set texte
     *
     * @param string $texte
     *
     * @return Articles
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    
        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Articles
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set sharepartenaire
     *
     * @param integer $sharepartenaire
     *
     * @return Articles
     */
    public function setSharepartenaire($sharepartenaire)
    {
        $this->sharepartenaire = $sharepartenaire;
    
        return $this;
    }

    /**
     * Get sharepartenaire
     *
     * @return integer
     */
    public function getSharepartenaire()
    {
        return $this->sharepartenaire;
    }

    /**
     * Set shareall
     *
     * @param integer $shareall
     *
     * @return Articles
     */
    public function setShareall($shareall)
    {
        $this->shareall = $shareall;
    
        return $this;
    }

    /**
     * Get shareall
     *
     * @return integer
     */
    public function getShareall()
    {
        return $this->shareall;
    }


    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Articles
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set share
     *
     * @param string $share
     *
     * @return Articles
     */
    public function setShare($share)
    {
        $this->share = $share;
    
        return $this;
    }

    /**
     * Get share
     *
     * @return string
     */
    public function getShare()
    {
        return $this->share;
    }

    /**
     * Set transfereur
     *
     * @param string $transfereur
     *
     * @return Articles
     */
    public function setTransfereur($transfereur)
    {
        $this->transfereur = $transfereur;
    
        return $this;
    }

    /**
     * Get transfereur
     *
     * @return string
     */
    public function getTransfereur()
    {
        return $this->transfereur;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Articles
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set replytitre
     *
     * @param string $replytitre
     *
     * @return Articles
     */
    public function setReplytitre($replytitre)
    {
        $this->replytitre = $replytitre;
    
        return $this;
    }

    /**
     * Get replytitre
     *
     * @return string
     */
    public function getReplytitre()
    {
        return $this->replytitre;
    }

    /**
     * Set replytexte
     *
     * @param string $replytexte
     *
     * @return Articles
     */
    public function setReplytexte($replytexte)
    {
        $this->replytexte = $replytexte;
    
        return $this;
    }

    /**
     * Get replytexte
     *
     * @return string
     */
    public function getReplytexte()
    {
        return $this->replytexte;
    }
}
