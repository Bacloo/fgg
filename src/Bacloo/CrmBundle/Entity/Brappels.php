<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brappels
 * @ORM\Entity
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\BrappelsRepository")
 */
class Brappels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
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
     * @ORM\Column(name="rap_texte", type="text", nullable=true)
     */
    private $rapTexte;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;		

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="text", nullable=true)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="afaire", type="boolean", length=255, nullable=true)
     */
    private $afaire;

    /**
     * @var string
     *
     * @ORM\Column(name="rdv", type="boolean", length=255, nullable=true)
     */
    private $rdv;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255, nullable=true)
     */
    private $cp;
	
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
     * Set date
     *
     * @param \DateTime $date
     * @return rappels
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
     * Set rapTexte
     *
     * @param string $rapTexte
     * @return rappels
     */
    public function setRapTexte($rapTexte)
    {
        $this->rapTexte = $rapTexte;

        return $this;
    }

    /**
     * Get rapTexte
     *
     * @return string 
     */
    public function getRapTexte()
    {
        return $this->rapTexte;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Brappels
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
        $this->fiche = new \Doctrine\Common\Collections\ArrayCollection();
		// $this->user = 'JMR';
    }

    /**
     * Add fiche
     *
     * @param \Bacloo\CrmBundle\Entity\Fiche $fiche
     * @return Brappels
     */
    public function addFiche(\Bacloo\CrmBundle\Entity\Fiche $fiche=null)
    {
		if ($fiche) {
			$this->fiche[] = $fiche;
		}
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
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return Brappels
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
     * Set afaire
     *
     * @param boolean $afaire
     *
     * @return Brappels
     */
    public function setAfaire($afaire)
    {
        $this->afaire = $afaire;
    
        return $this;
    }

    /**
     * Get afaire
     *
     * @return boolean
     */
    public function getAfaire()
    {
        return $this->afaire;
    }

    /**
     * Set rdv
     *
     * @param boolean $rdv
     *
     * @return Brappels
     */
    public function setRdv($rdv)
    {
        $this->rdv = $rdv;
    
        return $this;
    }

    /**
     * Get rdv
     *
     * @return boolean
     */
    public function getRdv()
    {
        return $this->rdv;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Brappels
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }
}
