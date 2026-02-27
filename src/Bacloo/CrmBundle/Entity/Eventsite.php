<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventsite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\EventsiteRepository")
 */
class Eventsite
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
     * @ORM\Column(name="horametre", type="string", length=255, nullable=true)
     */
    private $horametre;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=255, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;
	
    /**
     * @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Machines", cascade={"persist"}, orphanRemoval=true)
     */ 		
	Private $machines;


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
     * Set horametre
     *
     * @param string $horametre
     *
     * @return Eventsite
     */
    public function setHorametre($horametre)
    {
        $this->horametre = $horametre;

        return $this;
    }

    /**
     * Get horametre
     *
     * @return string
     */
    public function getHorametre()
    {
        return $this->horametre;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Eventsite
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Eventsite
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
     * Set user
     *
     * @param string $user
     *
     * @return Eventsite
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
        $this->machines = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add machine
     *
     * @param \Bacloo\CrmBundle\Entity\Machines $machine
     *
     * @return Eventsite
     */
    public function addMachine(\Bacloo\CrmBundle\Entity\Machines $machine)
    {
        $this->machines[] = $machine;

        return $this;
    }

    /**
     * Remove machine
     *
     * @param \Bacloo\CrmBundle\Entity\Machines $machine
     */
    public function removeMachine(\Bacloo\CrmBundle\Entity\Machines $machine)
    {
        $this->machines->removeElement($machine);
    }

    /**
     * Get machines
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMachines()
    {
        return $this->machines;
    }
}
