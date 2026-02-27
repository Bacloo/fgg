<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 * @ORM\Entity
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\EventRepository")
 */
class Event
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
     * @ORM\Column(name="event_date", type="string", nullable=true)
     */
    private $eventDate;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="event_comment", type="string", length=2048, nullable=true)
     */
    private $eventComment;	

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="text", nullable=true)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255, nullable=true)
     */
    private $cp;		

    /**
     * @var string
     *
     * @ORM\Column(name="cr", type="boolean", length=255, nullable=true)
     */
    private $cr;
	
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
     * Set eventDate
     *
     * @param \DateTime $eventDate
     * @return Event
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime 
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Event
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
     * Set eventComment
     *
     * @param string $eventComment
     * @return Event
     */
    public function setEventComment($eventComment)
    {
        $this->eventComment = $eventComment;

        return $this;
    }

    /**
     * Get eventComment
     *
     * @return string 
     */
    public function getEventComment()
    {
        return $this->eventComment;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fiche = new \Doctrine\Common\Collections\ArrayCollection();
		// $this->user = 'JMR';
		$this->eventDate = new \Datetime('now'); // Par défaut, la date de l'évènement est la date d'aujourd'hui		
    }

    /**
     * Add fiche
     *
     * @param \Bacloo\CrmBundle\Entity\Fiche $fiche
     * @return Event
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
     * @return Event
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
     * Set cp
     *
     * @param string $cp
     *
     * @return Event
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

    /**
     * Set cr
     *
     * @param boolean $cr
     *
     * @return Event
     */
    public function setCr($cr)
    {
        $this->cr = $cr;

        return $this;
    }

    /**
     * Get cr
     *
     * @return boolean
     */
    public function getCr()
    {
        return $this->cr;
    }
}
