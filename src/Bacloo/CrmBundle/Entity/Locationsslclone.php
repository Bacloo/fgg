<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationsslclone
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\LocationsslcloneRepository")
 */
class Locationsslclone
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
     * @ORM\Column(name="codeclient", type="string", length=255)
     */
    private $codeclient;

    /**
     * @var integer
     *
     * @ORM\Column(name="entid", type="integer", nullable=true)
     */
    private $entid;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=255)
     */
    private $entreprise;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="machineid", type="integer", nullable=true)
     */
    private $machineid;

    /**
     * @var string
     *
     * @ORM\Column(name="codemachine", type="string", length=255)
     */
    private $codemachine;

    /**
     * @var string
     *
     * @ORM\Column(name="codemachineinterne", type="string", length=255, nullable=true)
     */
    private $codemachineinterne;

    /**
     * @var string
     *
     * @ORM\Column(name="typemachine", type="string", length=255)
     */
    private $typemachine;

    /**
     * @var string
     *
     * @ORM\Column(name="typemachineinit", type="string", length=255, nullable=true)
     */
    private $typemachineinit;

    /**
     * @var decimal
     *
     * @ORM\Column(name="loyerp1", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $loyerp1;

    /**
     * @var decimal
     *
     * @ORM\Column(name="loyerp2", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $loyerp2;

    /**
     * @var decimal
     *
     * @ORM\Column(name="loyerp3", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $loyerp3;

    /**
     * @var decimal
     *
     * @ORM\Column(name="loyerp4", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $loyerp4;

    /**
     * @var decimal
     *
     * @ORM\Column(name="loyermensuel", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $loyermensuel;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantloc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantloc;

    /**
     * @var decimal
     *
     * @ORM\Column(name="litrescarb", type="decimal", precision=12, scale=2, nullable=true)
     */
    Public $litrescarb;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montantcarb", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $montantcarb;

    /**
     * @var string
     *
     * @ORM\Column(name="etatloc", type="string", length=255, nullable=true)
     */
    private $etatloc;

    /**
     * @var string
     *
     * @ORM\Column(name="etatlog", type="string", length=255, nullable=true)
     */
    private $etatlog;

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
     * @var \DateTime
     *
     * @ORM\Column(name="datereprise", type="string", nullable=true)
     */
    private $datereprise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debutloc", type="string", nullable=true)
     */
    private $debutloc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finloc", type="string", nullable=true)
     */
    private $finloc;

    /**
     * @var string
     *
     * @ORM\Column(name="energie", type="string", length=255, nullable=true)
     */
    private $energie;

    /**
     * @var string
     *
     * @ORM\Column(name="contributionverte", type="boolean", length=255, nullable=true)
     */
    private $contributionverte;

    /**
     * @var string
     *
     * @ORM\Column(name="transport", type="boolean", length=255, nullable=true)
     */
    private $transport;

    /**
     * @var string
     *
     * @ORM\Column(name="assurance", type="boolean", length=255, nullable=true)
     */
    private $assurance;

    /**
     * @var integer
     *
     * @ORM\Column(name="transportaller", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $transportaller;

    /**
     * @var integer
     *
     * @ORM\Column(name="transportretour", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $transportretour;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbjloc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbjloc;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbjlocass", type="decimal", precision=12, scale=2, nullable=true)
     */
    Public $nbjlocass;

    /**
     * @var integer
     *
     * @ORM\Column(name="jour50", type="integer", nullable=true)
     */
    private $jour50;

    /**
     * @var integer
     *
     * @ORM\Column(name="jour100", type="integer", nullable=true)
     */
    private $jour100;

    /**
     * @var integer
     *
     * @ORM\Column(name="oldid", type="integer", nullable=true)
     */
    private $oldid;

    /**
     * @var integer
     *
     * @ORM\Column(name="def", type="integer", type="integer", nullable=true)
     */
    private $def;

    /**
     * @var integer
     *
     * @ORM\Column(name="cloture", type="integer", nullable=true, options={"default" : "0"})
     */
    private $cloture = 0;

    /**
     * @var decimal
     *
     * @ORM\Column(name="remise", type="decimal", precision=12, scale=2, nullable=true)
     */
    public $remise;
	
    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Locataclone", cascade={"persist"}, orphanRemoval=true)
     */ 		
	Private $locataclone;
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locataclone = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeclient
     *
     * @param string $codeclient
     *
     * @return Locationsslclone
     */
    public function setCodeclient($codeclient)
    {
        $this->codeclient = $codeclient;

        return $this;
    }

    /**
     * Get codeclient
     *
     * @return string
     */
    public function getCodeclient()
    {
        return $this->codeclient;
    }

    /**
     * Set entid
     *
     * @param integer $entid
     *
     * @return Locationsslclone
     */
    public function setEntid($entid)
    {
        $this->entid = $entid;

        return $this;
    }

    /**
     * Get entid
     *
     * @return integer
     */
    public function getEntid()
    {
        return $this->entid;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return Locationsslclone
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set machineid
     *
     * @param integer $machineid
     *
     * @return Locationsslclone
     */
    public function setMachineid($machineid)
    {
        $this->machineid = $machineid;

        return $this;
    }

    /**
     * Get machineid
     *
     * @return integer
     */
    public function getMachineid()
    {
        return $this->machineid;
    }

    /**
     * Set codemachine
     *
     * @param string $codemachine
     *
     * @return Locationsslclone
     */
    public function setCodemachine($codemachine)
    {
        $this->codemachine = $codemachine;

        return $this;
    }

    /**
     * Get codemachine
     *
     * @return string
     */
    public function getCodemachine()
    {
        return $this->codemachine;
    }

    /**
     * Set codemachineinterne
     *
     * @param string $codemachineinterne
     *
     * @return Locationsslclone
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

    /**
     * Set typemachine
     *
     * @param string $typemachine
     *
     * @return Locationsslclone
     */
    public function setTypemachine($typemachine)
    {
        $this->typemachine = $typemachine;

        return $this;
    }

    /**
     * Get typemachine
     *
     * @return string
     */
    public function getTypemachine()
    {
        return $this->typemachine;
    }

    /**
     * Set typemachineinit
     *
     * @param string $typemachineinit
     *
     * @return Locationsslclone
     */
    public function setTypemachineinit($typemachineinit)
    {
        $this->typemachineinit = $typemachineinit;

        return $this;
    }

    /**
     * Get typemachineinit
     *
     * @return string
     */
    public function getTypemachineinit()
    {
        return $this->typemachineinit;
    }

    /**
     * Set loyerp1
     *
     * @param string $loyerp1
     *
     * @return Locationsslclone
     */
    public function setLoyerp1($loyerp1)
    {
        $this->loyerp1 = $loyerp1;

        return $this;
    }

    /**
     * Get loyerp1
     *
     * @return string
     */
    public function getLoyerp1()
    {
        return $this->loyerp1;
    }

    /**
     * Set loyerp2
     *
     * @param string $loyerp2
     *
     * @return Locationsslclone
     */
    public function setLoyerp2($loyerp2)
    {
        $this->loyerp2 = $loyerp2;

        return $this;
    }

    /**
     * Get loyerp2
     *
     * @return string
     */
    public function getLoyerp2()
    {
        return $this->loyerp2;
    }

    /**
     * Set loyerp3
     *
     * @param string $loyerp3
     *
     * @return Locationsslclone
     */
    public function setLoyerp3($loyerp3)
    {
        $this->loyerp3 = $loyerp3;

        return $this;
    }

    /**
     * Get loyerp3
     *
     * @return string
     */
    public function getLoyerp3()
    {
        return $this->loyerp3;
    }

    /**
     * Set loyerp4
     *
     * @param string $loyerp4
     *
     * @return Locationsslclone
     */
    public function setLoyerp4($loyerp4)
    {
        $this->loyerp4 = $loyerp4;

        return $this;
    }

    /**
     * Get loyerp4
     *
     * @return string
     */
    public function getLoyerp4()
    {
        return $this->loyerp4;
    }

    /**
     * Set montantloc
     *
     * @param string $montantloc
     *
     * @return Locationsslclone
     */
    public function setMontantloc($montantloc)
    {
        $this->montantloc = $montantloc;

        return $this;
    }

    /**
     * Get montantloc
     *
     * @return string
     */
    public function getMontantloc()
    {
        return $this->montantloc;
    }

    /**
     * Set montantcarb
     *
     * @param string $montantcarb
     *
     * @return Locationsslclone
     */
    public function setMontantcarb($montantcarb)
    {
        $this->montantcarb = $montantcarb;

        return $this;
    }

    /**
     * Get montantcarb
     *
     * @return string
     */
    public function getMontantcarb()
    {
        return $this->montantcarb;
    }

    /**
     * Set etatloc
     *
     * @param string $etatloc
     *
     * @return Locationsslclone
     */
    public function setEtatloc($etatloc)
    {
        $this->etatloc = $etatloc;

        return $this;
    }

    /**
     * Get etatloc
     *
     * @return string
     */
    public function getEtatloc()
    {
        return $this->etatloc;
    }

    /**
     * Set etatlog
     *
     * @param string $etatlog
     *
     * @return Locationsslclone
     */
    public function setEtatlog($etatlog)
    {
        $this->etatlog = $etatlog;

        return $this;
    }

    /**
     * Get etatlog
     *
     * @return string
     */
    public function getEtatlog()
    {
        return $this->etatlog;
    }

    /**
     * Set loueur
     *
     * @param string $loueur
     *
     * @return Locationsslclone
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
     * Set datereprise
     *
     * @param string $datereprise
     *
     * @return Locationsslclone
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
     * Set debutloc
     *
     * @param string $debutloc
     *
     * @return Locationsslclone
     */
    public function setDebutloc($debutloc)
    {
        $this->debutloc = $debutloc;

        return $this;
    }

    /**
     * Get debutloc
     *
     * @return string
     */
    public function getDebutloc()
    {
        return $this->debutloc;
    }

    /**
     * Set finloc
     *
     * @param string $finloc
     *
     * @return Locationsslclone
     */
    public function setFinloc($finloc)
    {
        $this->finloc = $finloc;

        return $this;
    }

    /**
     * Get finloc
     *
     * @return string
     */
    public function getFinloc()
    {
        return $this->finloc;
    }

    /**
     * Set energie
     *
     * @param string $energie
     *
     * @return Locationsslclone
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get energie
     *
     * @return string
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * Set contributionverte
     *
     * @param boolean $contributionverte
     *
     * @return Locationsslclone
     */
    public function setContributionverte($contributionverte)
    {
        $this->contributionverte = $contributionverte;

        return $this;
    }

    /**
     * Get contributionverte
     *
     * @return boolean
     */
    public function getContributionverte()
    {
        return $this->contributionverte;
    }

    /**
     * Set transport
     *
     * @param boolean $transport
     *
     * @return Locationsslclone
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return boolean
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set assurance
     *
     * @param boolean $assurance
     *
     * @return Locationsslclone
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
     * Set transportaller
     *
     * @param integer $transportaller
     *
     * @return Locationsslclone
     */
    public function setTransportaller($transportaller)
    {
        $this->transportaller = $transportaller;

        return $this;
    }

    /**
     * Get transportaller
     *
     * @return integer
     */
    public function getTransportaller()
    {
        return $this->transportaller;
    }

    /**
     * Set transportretour
     *
     * @param integer $transportretour
     *
     * @return Locationsslclone
     */
    public function setTransportretour($transportretour)
    {
        $this->transportretour = $transportretour;

        return $this;
    }

    /**
     * Get transportretour
     *
     * @return integer
     */
    public function getTransportretour()
    {
        return $this->transportretour;
    }

    /**
     * Set nbjloc
     *
     * @param integer $nbjloc
     *
     * @return Locationsslclone
     */
    public function setNbjloc($nbjloc)
    {
        $this->nbjloc = $nbjloc;

        return $this;
    }

    /**
     * Get nbjloc
     *
     * @return integer
     */
    public function getNbjloc()
    {
        return $this->nbjloc;
    }

    /**
     * Set jour50
     *
     * @param integer $jour50
     *
     * @return Locationsslclone
     */
    public function setJour50($jour50)
    {
        $this->jour50 = $jour50;

        return $this;
    }

    /**
     * Get jour50
     *
     * @return integer
     */
    public function getJour50()
    {
        return $this->jour50;
    }

    /**
     * Add locataclone
     *
     * @param \Bacloo\CrmBundle\Entity\Locataclone $locataclone
     *
     * @return Locationsslclone
     */
    public function addLocataclone(\Bacloo\CrmBundle\Entity\Locataclone $locataclone)
    {
        $this->locataclone[] = $locataclone;

        return $this;
    }

    /**
     * Remove locataclone
     *
     * @param \Bacloo\CrmBundle\Entity\Locataclone $locataclone
     */
    public function removeLocataclone(\Bacloo\CrmBundle\Entity\Locataclone $locataclone)
    {
        $this->locataclone->removeElement($locataclone);
    }

    /**
     * Get locataclone
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocataclone()
    {
        return $this->locataclone;
    }

    /**
     * Set oldid
     *
     * @param integer $oldid
     *
     * @return Locationsslclone
     */
    public function setOldid($oldid)
    {
        $this->oldid = $oldid;

        return $this;
    }

    /**
     * Get oldid
     *
     * @return integer
     */
    public function getOldid()
    {
        return $this->oldid;
    }

    /**
     * Set jour100
     *
     * @param integer $jour100
     *
     * @return Locationsslclone
     */
    public function setJour100($jour100)
    {
        $this->jour100 = $jour100;

        return $this;
    }

    /**
     * Get jour100
     *
     * @return integer
     */
    public function getJour100()
    {
        return $this->jour100;
    }

    /**
     * Set nbjlocass
     *
     * @param integer $nbjlocass
     *
     * @return Locationsslclone
     */
    public function setNbjlocass($nbjlocass)
    {
        $this->nbjlocass = $nbjlocass;

        return $this;
    }

    /**
     * Get nbjlocass
     *
     * @return integer
     */
    public function getNbjlocass()
    {
        return $this->nbjlocass;
    }

    /**
     * Set litrescarb
     *
     * @param string $litrescarb
     *
     * @return Locationsslclone
     */
    public function setLitrescarb($litrescarb)
    {
        $this->litrescarb = $litrescarb;

        return $this;
    }

    /**
     * Get litrescarb
     *
     * @return string
     */
    public function getLitrescarb()
    {
        return $this->litrescarb;
    }

    /**
     * Set loyermensuel
     *
     * @param string $loyermensuel
     *
     * @return Locationsslclone
     */
    public function setLoyermensuel($loyermensuel)
    {
        $this->loyermensuel = $loyermensuel;

        return $this;
    }

    /**
     * Get loyermensuel
     *
     * @return string
     */
    public function getLoyermensuel()
    {
        return $this->loyermensuel;
    }

    /**
     * Set cloture
     *
     * @param integer $cloture
     *
     * @return Locationsslclone
     */
    public function setCloture($cloture)
    {
        $this->cloture = $cloture;

        return $this;
    }

    /**
     * Get cloture
     *
     * @return integer
     */
    public function getCloture()
    {
        return $this->cloture;
    }

    /**
     * Set loueurid
     *
     * @param integer $loueurid
     *
     * @return Locationsslclone
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
     * Set def
     *
     * @param integer $def
     *
     * @return Locationsslclone
     */
    public function setDef($def)
    {
        $this->def = $def;

        return $this;
    }

    /**
     * Get def
     *
     * @return integer
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * Set remise
     *
     * @param string $remise
     *
     * @return Locationsslclone
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return string
     */
    public function getRemise()
    {
        return $this->remise;
    }
}
