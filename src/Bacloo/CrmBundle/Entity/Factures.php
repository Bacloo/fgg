<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factures
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\FacturesRepository")
 */
class Factures
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
     * @ORM\Column(name="numfacture", type="string", nullable=true)
     */
    private $numfacture;

    /**
     * @var string
     *
     * @ORM\Column(name="numfacfrs", type="string", nullable=true)
     */
    private $numfacfrs;

    /**
     * @var string
     *
     * @ORM\Column(name="codelocata", type="string", nullable=true)
     */
    private $codelocata;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientid", type="integer", nullable=true)
     */
    private $clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255, nullable=true)
     */
    private $client;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="echeance", type="string", length=255, nullable=true)
     */
    private $echeance;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalht", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $totalht;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $totalttc;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantavoir", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantavoir;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantreg", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantreg;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantdejareg", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantdejareg;

    /**
     * @var string
     *
     * @ORM\Column(name="chantier", type="string", length=255, nullable=true)
     */
    private $chantier;

    /**
     * @var integer
     *
     * @ORM\Column(name="reglement", length=255, type="boolean", nullable=true)
     */
    private $reglement;

    /**
     * @var string
     *
     * @ORM\Column(name="selection", length=255, type="boolean", nullable=true)
     */
    private $selection;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepaiement", type="string", nullable=true)
     */
    private $datepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="modepaiement", type="string", length=255, nullable=true)
     */
    private $modepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="typedoc", type="string", length=255, nullable=true)
     */
    private $typedoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecrea", type="string", length=255, nullable=true)
     */
    private $datecrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterelance1", type="string", length=255, nullable=true)
     */
    private $daterelance1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterelance2", type="string", length=255, nullable=true)
     */
    private $daterelance2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterelance3", type="string", length=255, nullable=true)
     */
    private $daterelance3;

    /**
     * @var string
     *
     * @ORM\Column(name="encompta", type="boolean", length=255, nullable=true)
     */
    private $encompta;

    /**
     * @var integer
     *
     * @ORM\Column(name="locatacloneid", type="integer", nullable=true)
     */
    private $locatacloneid;

    /**
     * @var integer
     *
     * @ORM\Column(name="compteurfac", type="integer", nullable=true)
     */
    private $compteurfac;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="encaisse", type="string", length=255, nullable=true)
     */
    private $encaisse;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255, nullable=true)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=255, nullable=true)
     */
    private $mois;

    /**
     * @var integer
     *
     * @ORM\Column(name="codegroupe", type="integer", nullable=true)
     */
    private $codegroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="ttcgroupe", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ttcgroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    public $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="commentairefrs", type="text", nullable=true)
     */
    public $commentairefrs;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation1", type="integer", nullable=true)
     */
    private $validation1;

    /**
     * @var decimal
     *
     * @ORM\Column(name="troppercu", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $troppercu;

    /**
     * @var decimal
     *
     * @ORM\Column(name="troppercuapplique", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $Troppercuapplique;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation2", type="integer", nullable=true)
     */
    private $validation2;

    /**
     * @var integer
     *
     * @ORM\Column(name="achatsimple", type="integer", nullable=true)
     */
    private $achatsimple;

    /**
     * @var string
     *
     * @ORM\Column(name="avoir", type="boolean", length=255, nullable=true)
     */
    private $avoir;

    /**
     * @var integer
     *
     * @ORM\Column(name="acompte", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $acompte;

    /**
     * @var integer
     *
     * @ORM\Column(name="alerte", type="integer", nullable=true)
     */
    private $alerte;

    /**
     * @var string
     *
     * @ORM\Column(name="numbdcloueur", type="string", nullable=true)
     */
    public $numbdcloueur;

    /**
     * @var string
     *
     * @ORM\Column(name="loueur", type="string", length=255, nullable=true)
     */
    private $loueur;

    /**
     * @var integer
     *
     * @ORM\Column(name="loueurid", type="integer", type="integer", nullable=true)
     */
    Public $loueurid;

    /**
     * @var integer
     *
     * @ORM\Column(name="locationsslcloneid", type="integer", type="integer", nullable=true)
     */
    Public $locationsslcloneid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datereprise", type="string", nullable=true)
     */
    Public $datereprise;

    /**
     * @var string
     *
     * @ORM\Column(name="prixcarb", type="decimal", precision=12, scale=2, nullable=true, options={"default" : "2.05"})
     */
    private $prixcarb;
    	
   /**
   * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Fiche", cascade={"persist"})
   */		
	Private $fiche;


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
     * @param integer $numfacture
     *
     * @return Factures
     */
    public function setNumfacture($numfacture)
    {
        $this->numfacture = $numfacture;

        return $this;
    }

    /**
     * Get numfacture
     *
     * @return integer
     */
    public function getNumfacture()
    {
        return $this->numfacture;
    }

    /**
     * Set codelocata
     *
     * @param integer $codelocata
     *
     * @return Factures
     */
    public function setCodelocata($codelocata)
    {
        $this->codelocata = $codelocata;

        return $this;
    }

    /**
     * Get codelocata
     *
     * @return integer
     */
    public function getCodelocata()
    {
        return $this->codelocata;
    }

    /**
     * Set clientid
     *
     * @param integer $clientid
     *
     * @return Factures
     */
    public function setClientid($clientid)
    {
        $this->clientid = $clientid;

        return $this;
    }

    /**
     * Get clientid
     *
     * @return integer
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Factures
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set echeance
     *
     * @param string $echeance
     *
     * @return Factures
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
     * Set chantier
     *
     * @param string $chantier
     *
     * @return Factures
     */
    public function setChantier($chantier)
    {
        $this->chantier = $chantier;

        return $this;
    }

    /**
     * Get chantier
     *
     * @return string
     */
    public function getChantier()
    {
        return $this->chantier;
    }

    /**
     * Set reglement
     *
     * @param boolean $reglement
     *
     * @return Factures
     */
    public function setReglement($reglement)
    {
        $this->reglement = $reglement;

        return $this;
    }

    /**
     * Get reglement
     *
     * @return boolean
     */
    public function getReglement()
    {
        return $this->reglement;
    }

    /**
     * Set datepaiement
     *
     * @param string $datepaiement
     *
     * @return Factures
     */
    public function setDatepaiement($datepaiement)
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    /**
     * Get datepaiement
     *
     * @return string
     */
    public function getDatepaiement()
    {
        return $this->datepaiement;
    }

    /**
     * Set modepaiement
     *
     * @param string $modepaiement
     *
     * @return Factures
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
     * Constructor
     */
    public function __construct()
    {
        $this->fiche = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set selection
     *
     * @param boolean $selection
     *
     * @return Factures
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
     * Set typedoc
     *
     * @param string $typedoc
     *
     * @return Factures
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
     * Set datecrea
     *
     * @param string $datecrea
     *
     * @return Factures
     */
    public function setDatecrea($datecrea)
    {
        $this->datecrea = $datecrea;

        return $this;
    }

    /**
     * Get datecrea
     *
     * @return string
     */
    public function getDatecrea()
    {
        return $this->datecrea;
    }

    /**
     * Set totalht
     *
     * @param integer $totalht
     *
     * @return Factures
     */
    public function setTotalht($totalht)
    {
        $this->totalht = $totalht;

        return $this;
    }

    /**
     * Get totalht
     *
     * @return integer
     */
    public function getTotalht()
    {
        return $this->totalht;
    }

    /**
     * Set totalttc
     *
     * @param integer $totalttc
     *
     * @return Factures
     */
    public function setTotalttc($totalttc)
    {
        $this->totalttc = $totalttc;

        return $this;
    }

    /**
     * Get totalttc
     *
     * @return integer
     */
    public function getTotalttc()
    {
        return $this->totalttc;
    }

    /**
     * Set encompta
     *
     * @param boolean $encompta
     *
     * @return Factures
     */
    public function setEncompta($encompta)
    {
        $this->encompta = $encompta;

        return $this;
    }

    /**
     * Get encompta
     *
     * @return boolean
     */
    public function getEncompta()
    {
        return $this->encompta;
    }

    /**
     * Set locatacloneid
     *
     * @param integer $locatacloneid
     *
     * @return Factures
     */
    public function setLocatacloneid($locatacloneid)
    {
        $this->locatacloneid = $locatacloneid;

        return $this;
    }

    /**
     * Get locatacloneid
     *
     * @return integer
     */
    public function getLocatacloneid()
    {
        return $this->locatacloneid;
    }

    /**
     * Set daterelance1
     *
     * @param string $daterelance1
     *
     * @return Factures
     */
    public function setDaterelance1($daterelance1)
    {
        $this->daterelance1 = $daterelance1;

        return $this;
    }

    /**
     * Get daterelance1
     *
     * @return string
     */
    public function getDaterelance1()
    {
        return $this->daterelance1;
    }

    /**
     * Set daterelance2
     *
     * @param string $daterelance2
     *
     * @return Factures
     */
    public function setDaterelance2($daterelance2)
    {
        $this->daterelance2 = $daterelance2;

        return $this;
    }

    /**
     * Get daterelance2
     *
     * @return string
     */
    public function getDaterelance2()
    {
        return $this->daterelance2;
    }

    /**
     * Set daterelance3
     *
     * @param string $daterelance3
     *
     * @return Factures
     */
    public function setDaterelance3($daterelance3)
    {
        $this->daterelance3 = $daterelance3;

        return $this;
    }

    /**
     * Get daterelance3
     *
     * @return string
     */
    public function getDaterelance3()
    {
        return $this->daterelance3;
    }

    /**
     * Set montantreg
     *
     * @param string $montantreg
     *
     * @return Factures
     */
    public function setMontantreg($montantreg)
    {
        $this->montantreg = $montantreg;

        return $this;
    }

    /**
     * Get montantreg
     *
     * @return string
     */
    public function getMontantreg()
    {
        return $this->montantreg;
    }

    /**
     * Set montantdejareg
     *
     * @param string $montantdejareg
     *
     * @return Factures
     */
    public function setMontantdejareg($montantdejareg)
    {
        $this->montantdejareg = $montantdejareg;

        return $this;
    }

    /**
     * Get montantdejareg
     *
     * @return string
     */
    public function getMontantdejareg()
    {
        return $this->montantdejareg;
    }

    /**
     * Set compteurfac
     *
     * @param integer $compteurfac
     *
     * @return Factures
     */
    public function setCompteurfac($compteurfac)
    {
        $this->compteurfac = $compteurfac;

        return $this;
    }

    /**
     * Get compteurfac
     *
     * @return integer
     */
    public function getCompteurfac()
    {
        return $this->compteurfac;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Factures
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
     * Set encaisse
     *
     * @param string $encaisse
     *
     * @return Factures
     */
    public function setEncaisse($encaisse)
    {
        $this->encaisse = $encaisse;

        return $this;
    }

    /**
     * Get encaisse
     *
     * @return string
     */
    public function getEncaisse()
    {
        return $this->encaisse;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Factures
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
     * Set montantavoir
     *
     * @param string $montantavoir
     *
     * @return Factures
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
     * Set codegroupe
     *
     * @param integer $codegroupe
     *
     * @return Factures
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

    /**
     * Set ttcgroupe
     *
     * @param string $ttcgroupe
     *
     * @return Factures
     */
    public function setTtcgroupe($ttcgroupe)
    {
        $this->ttcgroupe = $ttcgroupe;

        return $this;
    }

    /**
     * Get ttcgroupe
     *
     * @return string
     */
    public function getTtcgroupe()
    {
        return $this->ttcgroupe;
    }

    /**
     * Add fiche
     *
     * @param \Bacloo\CrmBundle\Entity\Fiche $fiche
     *
     * @return Factures
     */
    public function addFiche(\Bacloo\CrmBundle\Entity\Fiche $fiche)
    {
        $this->fiche[] = $fiche;

        return $this;
    }

    /**
     * Remove fiche
     *
     * @param \Bacloo\CrmBundle\Entity\Fiche $fiche
     */
    public function removeFiche(\Bacloo\CrmBundle\Entity\Fiche $fiche)
    {
        $this->fiche->removeElement($fiche);
    }

    /**
     * Get fiche
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Set numfacfrs
     *
     * @param string $numfacfrs
     *
     * @return Factures
     */
    public function setNumfacfrs($numfacfrs)
    {
        $this->numfacfrs = $numfacfrs;

        return $this;
    }

    /**
     * Get numfacfrs
     *
     * @return string
     */
    public function getNumfacfrs()
    {
        return $this->numfacfrs;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return Factures
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set mois
     *
     * @param string $mois
     *
     * @return Factures
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Add factum
     *
     * @param \Bacloo\CrmBundle\Entity\Facta $factum
     *
     * @return Factures
     */
    public function addFactum(\Bacloo\CrmBundle\Entity\Facta $factum)
    {
        $this->facta[] = $factum;

        return $this;
    }

    /**
     * Remove factum
     *
     * @param \Bacloo\CrmBundle\Entity\Facta $factum
     */
    public function removeFactum(\Bacloo\CrmBundle\Entity\Facta $factum)
    {
        $this->facta->removeElement($factum);
    }

    /**
     * Get facta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFacta()
    {
        return $this->facta;
    }

    /**
     * Set validation1
     *
     * @param integer $validation1
     *
     * @return Factures
     */
    public function setValidation1($validation1)
    {
        $this->validation1 = $validation1;

        return $this;
    }

    /**
     * Get validation1
     *
     * @return integer
     */
    public function getValidation1()
    {
        return $this->validation1;
    }

    /**
     * Set validation2
     *
     * @param integer $validation2
     *
     * @return Factures
     */
    public function setValidation2($validation2)
    {
        $this->validation2 = $validation2;

        return $this;
    }

    /**
     * Get validation2
     *
     * @return integer
     */
    public function getValidation2()
    {
        return $this->validation2;
    }

    /**
     * Set achatsimple
     *
     * @param integer $achatsimple
     *
     * @return Factures
     */
    public function setAchatsimple($achatsimple)
    {
        $this->achatsimple = $achatsimple;

        return $this;
    }

    /**
     * Get achatsimple
     *
     * @return integer
     */
    public function getAchatsimple()
    {
        return $this->achatsimple;
    }

    /**
     * Set avoir
     *
     * @param boolean $avoir
     *
     * @return Factures
     */
    public function setAvoir($avoir)
    {
        $this->avoir = $avoir;

        return $this;
    }

    /**
     * Get avoir
     *
     * @return boolean
     */
    public function getAvoir()
    {
        return $this->avoir;
    }

    /**
     * Set acompte
     *
     * @param string $acompte
     *
     * @return Factures
     */
    public function setAcompte($acompte)
    {
        $this->acompte = $acompte;

        return $this;
    }

    /**
     * Get acompte
     *
     * @return string
     */
    public function getAcompte()
    {
        return $this->acompte;
    }

    /**
     * Set troppercu
     *
     * @param string $troppercu
     *
     * @return Factures
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
     * Set troppercuapplique
     *
     * @param string $troppercuapplique
     *
     * @return Factures
     */
    public function setTroppercuapplique($troppercuapplique)
    {
        $this->Troppercuapplique = $troppercuapplique;

        return $this;
    }

    /**
     * Get troppercuapplique
     *
     * @return string
     */
    public function getTroppercuapplique()
    {
        return $this->Troppercuapplique;
    }

    /**
     * Set alerte
     *
     * @param integer $alerte
     *
     * @return Factures
     */
    public function setAlerte($alerte)
    {
        $this->alerte = $alerte;

        return $this;
    }

    /**
     * Get alerte
     *
     * @return integer
     */
    public function getAlerte()
    {
        return $this->alerte;
    }

    /**
     * Set numbdcloueur
     *
     * @param string $numbdcloueur
     *
     * @return Factures
     */
    public function setNumbdcloueur($numbdcloueur)
    {
        $this->numbdcloueur = $numbdcloueur;

        return $this;
    }

    /**
     * Get numbdcloueur
     *
     * @return string
     */
    public function getNumbdcloueur()
    {
        return $this->numbdcloueur;
    }

    /**
     * Set commentairefrs
     *
     * @param string $commentairefrs
     *
     * @return Factures
     */
    public function setCommentairefrs($commentairefrs)
    {
        $this->commentairefrs = $commentairefrs;

        return $this;
    }

    /**
     * Get commentairefrs
     *
     * @return string
     */
    public function getCommentairefrs()
    {
        return $this->commentairefrs;
    }

    /**
     * Set loueur
     *
     * @param string $loueur
     *
     * @return Factures
     */
    public function setLoueur($loueur)
    {
        $this->loueur = $loueur;

        return $this;
    }

    /**
     * Get loueur
     *
     * @return string
     */
    public function getLoueur()
    {
        return $this->loueur;
    }

    /**
     * Set loueurid
     *
     * @param integer $loueurid
     *
     * @return Factures
     */
    public function setLoueurid($loueurid)
    {
        $this->loueurid = $loueurid;

        return $this;
    }

    /**
     * Get loueurid
     *
     * @return integer
     */
    public function getLoueurid()
    {
        return $this->loueurid;
    }

    /**
     * Set locationsslcloneid
     *
     * @param integer $locationsslcloneid
     *
     * @return Factures
     */
    public function setLocationsslcloneid($locationsslcloneid)
    {
        $this->locationsslcloneid = $locationsslcloneid;

        return $this;
    }

    /**
     * Get locationsslcloneid
     *
     * @return integer
     */
    public function getLocationsslcloneid()
    {
        return $this->locationsslcloneid;
    }

    /**
     * Set datereprise
     *
     * @param string $datereprise
     *
     * @return Factures
     */
    public function setDatereprise($datereprise)
    {
        $this->datereprise = $datereprise;

        return $this;
    }

    /**
     * Get datereprise
     *
     * @return string
     */
    public function getDatereprise()
    {
        return $this->datereprise;
    }

    /**
     * Set prixcarb
     *
     * @param string $prixcarb
     *
     * @return Factures
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
}
