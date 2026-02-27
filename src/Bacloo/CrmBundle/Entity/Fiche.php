<?php

namespace Bacloo\CrmBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 * @ORM\Entity
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\FicheRepository")
 */
class Fiche
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
     * @ORM\Column(name="raison_sociale", type="string", length=255)
     */
    private $raisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse1", type="string", length=255, nullable=true)
     */
    private $adresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2", type="string", length=255, nullable=true)
     */
    private $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse3", type="string", length=255, nullable=true)
     */
    private $adresse3;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse1f", type="string", length=255, nullable=true)
     */
    private $adresse1f;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2f", type="string", length=255, nullable=true)
     */
    private $adresse2f;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=255, nullable=true)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="villef", type="string", length=255, nullable=true)
     */
    private $villef;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="site_web", type="string", length=255, nullable=true)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=true)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=true)
     */
    private $activite;

    /**
     * @var string
     *
     * @ORM\Column(name="a_vendre", type="boolean", length=255, nullable=true)
     */
    private $aVendre;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixsscont", type="integer", nullable=true)
     */
    private $prixsscont;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixavcont", type="integer", nullable=true)
     */
    private $prixavcont;

    /**
     * @var integer
     *
     * @ORM\Column(name="potentiel", type="integer", nullable=true)
     */
    private $potentiel;

    /**
     * @var string
     *
     * @ORM\Column(name="a_vendrec", type="boolean", length=255, nullable=true)
     */
    private $aVendrec;

    /**
     * @var string
     *
     * @ORM\Column(name="assurance", type="boolean", length=255, nullable=true)
     */
    private $assurance;

    /**
     * @var string
     *
     * @ORM\Column(name="statutcompte", type="boolean", length=255, nullable=true)
     */
    private $statutcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="copyof", type="string", length=255, nullable=true)
     */
    private $copyof;

    /**
     * @var string
     *
     * @ORM\Column(name="compteurfiche", type="string", length=255, nullable=true)
     */
    private $compteurfiche;

    /**
     * @var decimal
     *
     * @ORM\Column(name="soldeimpayes", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $soldeimpayes;

    /**
     * @var string
     *
     * @ORM\Column(name="factor", type="boolean", length=255, nullable=true)
     */
    private $factor;

    /**
     * @ORM\OneToOne(targetEntity="Bacloo\CrmBundle\Entity\Memo", cascade={"persist"}, orphanRemoval=true)
     */
    private $memo;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Event", cascade={"persist"}, orphanRemoval=true)
     */
    Private $event;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Bcontacts", cascade={"persist"}, orphanRemoval=true)
     */
    Private $bcontacts;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Brappels", cascade={"persist"}, orphanRemoval=true)
     */
    Private $brappels;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Factures", cascade={"persist"})
     */
    Private $factures;


    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Alteruser", cascade={"persist"}, orphanRemoval=true)
     */
    Private $alteruser;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Commandes", cascade={"persist"}, orphanRemoval=true)
     */
    Private $Commandes;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Grille", cascade={"persist"}, orphanRemoval=true)
     */
    Private $grille;

    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Grillesl", cascade={"persist"}, orphanRemoval=true)
     */
    Private $grillesl;

    /**
     * @ORM\ManyToOne(targetEntity="Bacloo\CrmBundle\Entity\Pipeline", cascade={"persist"})
     * @ORM\JoinColumn(name="Pipeline_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     * @ORM\OrderBy({"pipeorder" = "ASC"})
     */
    Private $Pipeline;

    /**
     * @var string
     *
     * @ORM\Column(name="descbesoins", type="text", nullable=true)
     */
    private $descbesoins;

    /**
     * @var string
     *
     * @ORM\Column(name="useremail", type="text", nullable=true)
     */
    private $useremail;

    /**
     * @var string
     *
     * @ORM\Column(name="typefiche", type="text", nullable=true)
     */
    private $typefiche;

    /**
     * @var string
     *
     * @ORM\Column(name="typeclient", type="text", nullable=true)
     */
    private $typeclient;

    /**
     * @var string
     *
     * @ORM\Column(name="folderid", type="text", nullable=true)
     */
    private $folderid;

    /**
     * @var string
     *
     * @ORM\Column(name="usersociete", type="text", nullable=true)
     */
    private $usersociete;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastmodif", type="date", nullable=true)
     */
    private $lastmodif;

    /**
     * @var string
     *
     * @ORM\Column(name="cperso1", type="text", nullable=true)
     */
    private $cperso1;

    /**
     * @var string
     *
     * @ORM\Column(name="cperso2", type="text", nullable=true)
     */
    private $cperso2;

    /**
     * @var string
     *
     * @ORM\Column(name="cperso3", type="text", nullable=true)
     */
    private $cperso3;

    /**
     * @var string
     *
     * @ORM\Column(name="delaireglement", type="string", length=255, nullable=true)
     */
    private $delaireglement;

    /**
     * @var decimal
     *
     * @ORM\Column(name="encours", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $encours;

    /**
     * @var string
     *
     * @ORM\Column(name="chequeencoffre", type="boolean", length=255, nullable=true)
     */
    private $chequeencoffre;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantcheque", type="integer", length=255, nullable=true)
     */
    private $montantcheque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedepot", type="string", length=255, nullable=true)
     */
    private $datedepot;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonblocage", type="string", length=255, nullable=true)
     */
    private $raisonblocage;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantrc", type="decimal", precision=12, scale=2, nullable=true)
     */
    Public $montantrc;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montanteco", type="decimal", precision=12, scale=2, nullable=true)
     */
    Public $montanteco;

    /**
     * @var string
     *
     * @ORM\Column(name="uniterc", type="string", length=255, nullable=true)
     */
    private $uniterc;

    /**
     * @var string
     *
     * @ORM\Column(name="uniteeco", type="string", length=255, nullable=true)
     */
    private $uniteeco;

    /**
     * @var string
     *
     * @ORM\Column(name="basecalculrc", type="string", length=255, nullable=true)
     */
    private $basecalculrc;

    /**
     * @var string
     *
     * @ORM\Column(name="basecalculeco", type="string", length=255, nullable=true)
     */
    private $basecalculeco;

    /**
     * @var string
     *
     * @ORM\Column(name="frsrc", type="boolean", length=255, nullable=true)
     */
    private $frsrc;

    /**
     * @var string
     *
     * @ORM\Column(name="frseco", type="boolean", length=255, nullable=true)
     */
    private $frseco;

    /**
     * @var string
     *
     * @ORM\Column(name="newid", type="string", length=255, nullable=true)
     */
    private $newid;
    /**
     * @var string
     *
     * @ORM\Column(name="delaipaiement", type="string", length=255, nullable=true)
     */
    private $delaipaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="typepaiement", type="string", length=255, nullable=true)
     */
    private $typepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="prixcarb", type="decimal", precision=12, scale=2, nullable=true, options={"default" : "2.05"})
     */
    private $prixcarb;

    /**
     * @var string
     *
     * @ORM\Column(name="prixgnr", type="decimal", precision=12, scale=2, nullable=true, options={"default" : "2.05"})
     */
    private $prixgnr;

    /**
     * @var string
     *
     * @ORM\Column(name="dureemoypaiement", type="string", length=255, nullable=true)
     */
    private $dureemoypaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="facturesgroupees", type="boolean", length=255, nullable=true)
     */
    private $facturesgroupees;

    /**
     * @var decimal
     *
     * @ORM\Column(name="troppercu", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $troppercu;

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
     * Set raisonSociale
     *
     * @param string $raisonSociale
     * @return Fiche
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set adresse1
     *
     * @param string $adresse1
     * @return Fiche
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get adresse1
     *
     * @return string
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * Set adresse2
     *
     * @param string $adresse2
     * @return Fiche
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get adresse2
     *
     * @return string
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set adresse3
     *
     * @param string $adresse3
     * @return Fiche
     */
    public function setAdresse3($adresse3)
    {
        $this->adresse3 = $adresse3;

        return $this;
    }

    /**
     * Get adresse3
     *
     * @return string
     */
    public function getAdresse3()
    {
        return $this->adresse3;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     * @return Fiche
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Fiche
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Fiche
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     * @return Fiche
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return Fiche
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Fiche
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
     * Set aVendre
     *
     * @param string $aVendre
     * @return Fiche
     */
    public function setAVendre($aVendre)
    {
        $this->aVendre = $aVendre;

        return $this;
    }

    /**
     * Get aVendre
     *
     * @return string
     */
    public function getAVendre()
    {
        return $this->aVendre;
    }

    /**
     * Set memo
     *
     * @param \Bacloo\CrmBundle\Entity\Memo $memo
     * @return Fiche
     */
    public function setMemo(\Bacloo\CrmBundle\Entity\Memo $memo = null)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return \Bacloo\CrmBundle\Entity\Memo
     */
    public function getMemo()
    {
        return $this->memo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->event = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bcontacts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->brappels = new \Doctrine\Common\Collections\ArrayCollection();
        $this->alteruser = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->factures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add event
     *
     * @param \Bacloo\CrmBundle\Entity\Event $event
     * @return Fiche
     */
    public function addEvent(\Bacloo\CrmBundle\Entity\Event $event=null)
    {
        if ($event) {
            $this->event[] = $event;
        }
        return $this;
    }

    /**
     * Remove event
     *
     * @param \Bacloo\CrmBundle\Entity\Event $event
     */
    public function removeEvent(\Bacloo\CrmBundle\Entity\Event $event)
    {
        $this->event->removeElement($event);
    }

    /**
     * Get event
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Add bcontacts
     *
     * @param \Bacloo\CrmBundle\Entity\Bcontacts $bcontacts
     * @return Fiche
     */
    public function addBcontact(\Bacloo\CrmBundle\Entity\Bcontacts $bcontacts=null)
    {
        if ($bcontacts) {
            $this->bcontacts[] = $bcontacts;
        }
        return $this;
    }

    /**
     * Remove bcontacts
     *
     * @param \Bacloo\CrmBundle\Entity\Bcontacts $bcontacts
     */
    public function removeBcontact(\Bacloo\CrmBundle\Entity\Bcontacts $bcontacts)
    {
        $this->bcontacts->removeElement($bcontacts);
    }

    /**
     * Get bcontacts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBcontacts()
    {
        return $this->bcontacts;
    }

    /**
     * Add brappels
     *
     * @param \Bacloo\CrmBundle\Entity\Brappels $brappels
     * @return Fiche
     */
    public function addBrappel(\Bacloo\CrmBundle\Entity\Brappels $brappels=null)
    {
        if ($brappels) {
            $this->brappels[] = $brappels;
        }
        return $this;
    }

    /**
     * Remove brappels
     *
     * @param \Bacloo\CrmBundle\Entity\Brappels $brappels
     */
    public function removeBrappel(\Bacloo\CrmBundle\Entity\Brappels $brappels)
    {
        $this->brappels->removeElement($brappels);
    }

    /**
     * Get brappels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBrappels()
    {
        return $this->brappels;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Fiche
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set activite
     *
     * @param string $activite
     * @return Fiche
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return string
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set descbesoins
     *
     * @param string $descbesoins
     * @return Fiche
     */
    public function setDescbesoins($descbesoins)
    {
        $this->descbesoins = $descbesoins;

        return $this;
    }

    /**
     * Get descbesoins
     *
     * @return string
     */
    public function getDescbesoins()
    {
        return $this->descbesoins;
    }

    /**
     * Set prixsscont
     *
     * @param integer $prixsscont
     * @return Fiche
     */
    public function setPrixsscont($prixsscont)
    {
        $this->prixsscont = $prixsscont;

        return $this;
    }

    /**
     * Get prixsscont
     *
     * @return integer
     */
    public function getPrixsscont()
    {
        return $this->prixsscont;
    }

    /**
     * Set prixavcont
     *
     * @param integer $prixavcont
     * @return Fiche
     */
    public function setPrixavcont($prixavcont)
    {
        $this->prixavcont = $prixavcont;

        return $this;
    }

    /**
     * Get prixavcont
     *
     * @return integer
     */
    public function getPrixavcont()
    {
        return $this->prixavcont;
    }

    /**
     * Set aVendrec
     *
     * @param boolean $aVendrec
     * @return Fiche
     */
    public function setAVendrec($aVendrec)
    {
        $this->aVendrec = $aVendrec;

        return $this;
    }

    /**
     * Get aVendrec
     *
     * @return boolean
     */
    public function getAVendrec()
    {
        return $this->aVendrec;
    }

    /**
     * Set copyof
     *
     * @param string $copyof
     * @return Fiche
     */
    public function setCopyof($copyof)
    {
        $this->copyof = $copyof;

        return $this;
    }

    /**
     * Get copyof
     *
     * @return string
     */
    public function getCopyof()
    {
        return $this->copyof;
    }


    /**
     * Set lastmodif
     *
     * @param \DateTime $lastmodif
     *
     * @return Fiche
     */
    public function setLastmodif($lastmodif)
    {
        $this->lastmodif = $lastmodif;

        return $this;
    }

    /**
     * Get lastmodif
     *
     * @return \DateTime
     */
    public function getLastmodif()
    {
        return $this->lastmodif;
    }

    /**
     * Add alteruser
     *
     * @param \Bacloo\CrmBundle\Entity\Alteruser $alteruser
     *
     * @return Fiche
     */
    public function addAlteruser(\Bacloo\CrmBundle\Entity\Alteruser $alteruser)
    {
        $this->alteruser[] = $alteruser;

        return $this;
    }

    /**
     * Remove alteruser
     *
     * @param \Bacloo\CrmBundle\Entity\Alteruser $alteruser
     */
    public function removeAlteruser(\Bacloo\CrmBundle\Entity\Alteruser $alteruser)
    {
        $this->alteruser->removeElement($alteruser);
    }

    /**
     * Get alteruser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlteruser()
    {
        return $this->alteruser;
    }

    /**
     * Set useremail
     *
     * @param string $useremail
     *
     * @return Fiche
     */
    public function setUseremail($useremail)
    {
        $this->useremail = $useremail;

        return $this;
    }

    /**
     * Get useremail
     *
     * @return string
     */
    public function getUseremail()
    {
        return $this->useremail;
    }

    /**
     * Set typefiche
     *
     * @param string $typefiche
     *
     * @return Fiche
     */
    public function setTypefiche($typefiche)
    {
        $this->typefiche = $typefiche;

        return $this;
    }

    /**
     * Get typefiche
     *
     * @return string
     */
    public function getTypefiche()
    {
        return $this->typefiche;
    }

    /**
     * Add commande
     *
     * @param \Bacloo\CrmBundle\Entity\Commandes $commande
     *
     * @return Fiche
     */
    public function addCommande(\Bacloo\CrmBundle\Entity\Commandes $commande)
    {
        $this->Commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \Bacloo\CrmBundle\Entity\Commandes $commande
     */
    public function removeCommande(\Bacloo\CrmBundle\Entity\Commandes $commande)
    {
        $this->Commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->Commandes;
    }

    /**
     * Set folderid
     *
     * @param string $folderid
     *
     * @return Fiche
     */
    public function setFolderid($folderid)
    {
        $this->folderid = $folderid;

        return $this;
    }

    /**
     * Get folderid
     *
     * @return string
     */
    public function getFolderid()
    {
        return $this->folderid;
    }

    /**
     * Set usersociete
     *
     * @param string $usersociete
     *
     * @return Fiche
     */
    public function setUsersociete($usersociete)
    {
        $this->usersociete = $usersociete;

        return $this;
    }

    /**
     * Get usersociete
     *
     * @return string
     */
    public function getUsersociete()
    {
        return $this->usersociete;
    }


    /**
     * Set pipeline
     *
     * @param \Bacloo\CrmBundle\Entity\Pipeline $pipeline
     *
     * @return Fiche
     */
    public function setPipeline(\Bacloo\CrmBundle\Entity\Pipeline $pipeline = null)
    {
        $this->Pipeline = $pipeline;

        return $this;
    }

    /**
     * Get pipeline
     *
     * @return \Bacloo\CrmBundle\Entity\Pipeline
     */
    public function getPipeline()
    {
        return $this->Pipeline;
    }

    /**
     * Set potentiel
     *
     * @param integer $potentiel
     *
     * @return Fiche
     */
    public function setPotentiel($potentiel)
    {
        $this->potentiel = $potentiel;

        return $this;
    }

    /**
     * Get potentiel
     *
     * @return integer
     */
    public function getPotentiel()
    {
        return $this->potentiel;
    }

    /**
     * Set cperso1
     *
     * @param string $cperso1
     *
     * @return Fiche
     */
    public function setCperso1($cperso1)
    {
        $this->cperso1 = $cperso1;

        return $this;
    }

    /**
     * Get cperso1
     *
     * @return string
     */
    public function getCperso1()
    {
        return $this->cperso1;
    }

    /**
     * Set cperso2
     *
     * @param string $cperso2
     *
     * @return Fiche
     */
    public function setCperso2($cperso2)
    {
        $this->cperso2 = $cperso2;

        return $this;
    }

    /**
     * Get cperso2
     *
     * @return string
     */
    public function getCperso2()
    {
        return $this->cperso2;
    }

    /**
     * Set cperso3
     *
     * @param string $cperso3
     *
     * @return Fiche
     */
    public function setCperso3($cperso3)
    {
        $this->cperso3 = $cperso3;

        return $this;
    }

    /**
     * Get cperso3
     *
     * @return string
     */
    public function getCperso3()
    {
        return $this->cperso3;
    }

    /**
     * Add grille
     *
     * @param \Bacloo\CrmBundle\Entity\Grille $grille
     *
     * @return Fiche
     */
    public function addGrille(\Bacloo\CrmBundle\Entity\Grille $grille)
    {
        $this->grille[] = $grille;

        return $this;
    }

    /**
     * Remove grille
     *
     * @param \Bacloo\CrmBundle\Entity\Grille $grille
     */
    public function removeGrille(\Bacloo\CrmBundle\Entity\Grille $grille)
    {
        $this->grille->removeElement($grille);
    }

    /**
     * Get grille
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrille()
    {
        return $this->grille;
    }

    /**
     * Add grillesl
     *
     * @param \Bacloo\CrmBundle\Entity\Grillesl $grillesl
     *
     * @return Fiche
     */
    public function addGrillesl(\Bacloo\CrmBundle\Entity\Grillesl $grillesl)
    {
        $this->grillesl[] = $grillesl;

        return $this;
    }

    /**
     * Remove grillesl
     *
     * @param \Bacloo\CrmBundle\Entity\Grillesl $grillesl
     */
    public function removeGrillesl(\Bacloo\CrmBundle\Entity\Grillesl $grillesl)
    {
        $this->grillesl->removeElement($grillesl);
    }

    /**
     * Get grillesl
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrillesl()
    {
        return $this->grillesl;
    }

    /**
     * Set assurance
     *
     * @param boolean $assurance
     *
     * @return Fiche
     */
    public function setAssurance($assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return boolean
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * Set statutcompte
     *
     * @param boolean $statutcompte
     *
     * @return Fiche
     */
    public function setStatutcompte($statutcompte)
    {
        $this->statutcompte = $statutcompte;

        return $this;
    }

    /**
     * Get statutcompte
     *
     * @return boolean
     */
    public function getStatutcompte()
    {
        return $this->statutcompte;
    }

    /**
     * Set typeclient
     *
     * @param string $typeclient
     *
     * @return Fiche
     */
    public function setTypeclient($typeclient)
    {
        $this->typeclient = $typeclient;

        return $this;
    }

    /**
     * Get typeclient
     *
     * @return string
     */
    public function getTypeclient()
    {
        return $this->typeclient;
    }

    /**
     * Set delaireglement
     *
     * @param string $delaireglement
     *
     * @return Fiche
     */
    public function setDelaireglement($delaireglement)
    {
        $this->delaireglement = $delaireglement;

        return $this;
    }

    /**
     * Get delaireglement
     *
     * @return string
     */
    public function getDelaireglement()
    {
        return $this->delaireglement;
    }

    /**
     * Set encours
     *
     * @param integer $encours
     *
     * @return Fiche
     */
    public function setEncours($encours)
    {
        $this->encours = $encours;

        return $this;
    }

    /**
     * Get encours
     *
     * @return integer
     */
    public function getEncours()
    {
        return $this->encours;
    }

    /**
     * Set chequeencoffre
     *
     * @param boolean $chequeencoffre
     *
     * @return Fiche
     */
    public function setChequeencoffre($chequeencoffre)
    {
        $this->chequeencoffre = $chequeencoffre;

        return $this;
    }

    /**
     * Get chequeencoffre
     *
     * @return boolean
     */
    public function getChequeencoffre()
    {
        return $this->chequeencoffre;
    }

    /**
     * Set montantcheque
     *
     * @param integer $montantcheque
     *
     * @return Fiche
     */
    public function setMontantcheque($montantcheque)
    {
        $this->montantcheque = $montantcheque;

        return $this;
    }

    /**
     * Get montantcheque
     *
     * @return integer
     */
    public function getMontantcheque()
    {
        return $this->montantcheque;
    }

    /**
     * Set datedepot
     *
     * @param string $datedepot
     *
     * @return Fiche
     */
    public function setDatedepot($datedepot)
    {
        $this->datedepot = $datedepot;

        return $this;
    }

    /**
     * Get datedepot
     *
     * @return string
     */
    public function getDatedepot()
    {
        return $this->datedepot;
    }

    /**
     * Set raisonblocage
     *
     * @param string $raisonblocage
     *
     * @return Fiche
     */
    public function setRaisonblocage($raisonblocage)
    {
        $this->raisonblocage = $raisonblocage;

        return $this;
    }

    /**
     * Get raisonblocage
     *
     * @return string
     */
    public function getRaisonblocage()
    {
        return $this->raisonblocage;
    }

    /**
     * Set montantrc
     *
     * @param string $montantrc
     *
     * @return Fiche
     */
    public function setMontantrc($montantrc)
    {
        $this->montantrc = $montantrc;

        return $this;
    }

    /**
     * Get montantrc
     *
     * @return string
     */
    public function getMontantrc()
    {
        return $this->montantrc;
    }

    /**
     * Set montanteco
     *
     * @param string $montanteco
     *
     * @return Fiche
     */
    public function setMontanteco($montanteco)
    {
        $this->montanteco = $montanteco;

        return $this;
    }

    /**
     * Get montanteco
     *
     * @return string
     */
    public function getMontanteco()
    {
        return $this->montanteco;
    }

    /**
     * Set uniterc
     *
     * @param string $uniterc
     *
     * @return Fiche
     */
    public function setUniterc($uniterc)
    {
        $this->uniterc = $uniterc;

        return $this;
    }

    /**
     * Get uniterc
     *
     * @return string
     */
    public function getUniterc()
    {
        return $this->uniterc;
    }

    /**
     * Set uniteeco
     *
     * @param string $uniteeco
     *
     * @return Fiche
     */
    public function setUniteeco($uniteeco)
    {
        $this->uniteeco = $uniteeco;

        return $this;
    }

    /**
     * Get uniteeco
     *
     * @return string
     */
    public function getUniteeco()
    {
        return $this->uniteeco;
    }

    /**
     * Set basecalculrc
     *
     * @param string $basecalculrc
     *
     * @return Fiche
     */
    public function setBasecalculrc($basecalculrc)
    {
        $this->basecalculrc = $basecalculrc;

        return $this;
    }

    /**
     * Get basecalculrc
     *
     * @return string
     */
    public function getBasecalculrc()
    {
        return $this->basecalculrc;
    }

    /**
     * Set basecalculeco
     *
     * @param string $basecalculeco
     *
     * @return Fiche
     */
    public function setBasecalculeco($basecalculeco)
    {
        $this->basecalculeco = $basecalculeco;

        return $this;
    }

    /**
     * Get basecalculeco
     *
     * @return string
     */
    public function getBasecalculeco()
    {
        return $this->basecalculeco;
    }

    /**
     * Set frsrc
     *
     * @param boolean $frsrc
     *
     * @return Fiche
     */
    public function setFrsrc($frsrc)
    {
        $this->frsrc = $frsrc;

        return $this;
    }

    /**
     * Get frsrc
     *
     * @return boolean
     */
    public function getFrsrc()
    {
        return $this->frsrc;
    }

    /**
     * Set frseco
     *
     * @param boolean $frseco
     *
     * @return Fiche
     */
    public function setFrseco($frseco)
    {
        $this->frseco = $frseco;

        return $this;
    }

    /**
     * Get frseco
     *
     * @return boolean
     */
    public function getFrseco()
    {
        return $this->frseco;
    }

    /**
     * Set newid
     *
     * @param integer $newid
     *
     * @return Fiche
     */
    public function setNewid($newid)
    {
        $this->newid = $newid;

        return $this;
    }

    /**
     * Get newid
     *
     * @return integer
    /**
     * Set delaipaiement
     *
     * @param string $delaipaiement
     *
     * @return Fiche
     */
    public function setDelaipaiement($delaipaiement)
    {
        $this->delaipaiement = $delaipaiement;

        return $this;
    }

    /**
     * Get delaipaiement
     *
     * @return string
     */
    public function getDelaipaiement()
    {
        return $this->delaipaiement;
    }

    /**
     * Set typepaiement
     *
     * @param string $typepaiement
     *
     * @return Fiche
     */
    public function setTypepaiement($typepaiement)
    {
        $this->typepaiement = $typepaiement;

        return $this;
    }

    /**
     * Get typepaiement
     *
     * @return string
     */
    public function getTypepaiement()
    {
        return $this->typepaiement;
    }

    public function getNewid()
    {
        return $this->newid;
    }

    /**
     * Set compteurfiche
     *
     * @param string $compteurfiche
     *
     * @return Fiche
     */
    public function setCompteurfiche($compteurfiche)
    {
        $this->compteurfiche = $compteurfiche;

        return $this;
    }

    /**
     * Get compteurfiche
     *
     * @return string
     */
    public function getCompteurfiche()
    {
        return $this->compteurfiche;
    }

    /**
     * Set soldeimpayes
     *
     * @param integer $soldeimpayes
     *
     * @return Fiche
     */
    public function setSoldeimpayes($soldeimpayes)
    {
        $this->soldeimpayes = $soldeimpayes;

        return $this;
    }

    /**
     * Get soldeimpayes
     *
     * @return integer
     */
    public function getSoldeimpayes()
    {
        return $this->soldeimpayes;
    }

    /**
     * Set dureemoypaiement
     *
     * @param string $dureemoypaiement
     *
     * @return Fiche
     */
    public function setDureemoypaiement($dureemoypaiement)
    {
        $this->dureemoypaiement = $dureemoypaiement;

        return $this;
    }

    /**
     * Get dureemoypaiement
     *
     * @return string
     */
    public function getDureemoypaiement()
    {
        return $this->dureemoypaiement;
    }

    /**
     * Add facture
     *
     * @param \Bacloo\CrmBundle\Entity\Factures $facture
     *
     * @return Fiche
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

    /**
     * Set facturesgroupees
     *
     * @param boolean $facturesgroupees
     *
     * @return Fiche
     */
    public function setFacturesgroupees($facturesgroupees)
    {
        $this->facturesgroupees = $facturesgroupees;

        return $this;
    }

    /**
     * Get facturesgroupees
     *
     * @return boolean
     */
    public function getFacturesgroupees()
    {
        return $this->facturesgroupees;
    }

    /**
     * Set factor
     *
     * @param boolean $factor
     *
     * @return Fiche
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;

        return $this;
    }

    /**
     * Get factor
     *
     * @return boolean
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Set troppercu
     *
     * @param string $troppercu
     *
     * @return Fiche
     */
    public function setTroppercu($troppercu)
    {
        $this->troppercu = $troppercu;

        return $this;
    }

    /**
     * Get troppercu
     *
     * @return string
     */
    public function getTroppercu()
    {
        return $this->troppercu;
    }

    /**
     * Set prixcarb
     *
     * @param string $prixcarb
     *
     * @return Fiche
     */
    public function setPrixcarb($prixcarb)
    {
        $this->prixcarb = $prixcarb;

        return $this;
    }

    /**
     * Get prixcarb
     *
     * @return string
     */
    public function getPrixcarb()
    {
        return $this->prixcarb;
    }

    /**
     * Set prixgnr
     *
     * @param string $prixgnr
     *
     * @return Fiche
     */
    public function setPrixgnr($prixgnr)
    {
        $this->prixgnr = $prixgnr;

        return $this;
    }

    /**
     * Get prixgnr
     *
     * @return string
     */
    public function getPrixgnr()
    {
        return $this->prixgnr;
    }

    /**
     * Set adresse1f
     *
     * @param string $adresse1f
     *
     * @return Fiche
     */
    public function setAdresse1f($adresse1f)
    {
        $this->adresse1f = $adresse1f;

        return $this;
    }

    /**
     * Get adresse1f
     *
     * @return string
     */
    public function getAdresse1f()
    {
        return $this->adresse1f;
    }

    /**
     * Set adresse2f
     *
     * @param string $adresse2f
     *
     * @return Fiche
     */
    public function setAdresse2f($adresse2f)
    {
        $this->adresse2f = $adresse2f;

        return $this;
    }

    /**
     * Get adresse2f
     *
     * @return string
     */
    public function getAdresse2f()
    {
        return $this->adresse2f;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     *
     * @return Fiche
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set villef
     *
     * @param string $villef
     *
     * @return Fiche
     */
    public function setVillef($villef)
    {
        $this->villef = $villef;

        return $this;
    }

    /**
     * Get villef
     *
     * @return string
     */
    public function getVillef()
    {
        return $this->villef;
    }
}
