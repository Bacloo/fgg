<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depensesmachine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\DepensesmachineRepository")
 */
class Depensesmachine
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
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var decimal
     *
     * @ORM\Column(name="totalht", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $totalht;

    /**
     * @var decimal
     *
     * @ORM\Column(name="totalttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $totalttc;

    /**
     * @var integer
     *
     * @ORM\Column(name="codelocationfrs", type="integer", nullable=true)
     */
    private $codelocationfrs;

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
     * Set date
     *
     * @param string $date
     *
     * @return Depensesmachine
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
     * Set description
     *
     * @param string $description
     *
     * @return Depensesmachine
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set totalht
     *
     * @param string $totalht
     *
     * @return Depensesmachine
     */
    public function setTotalht($totalht)
    {
        $this->totalht = $totalht;

        return $this;
    }

    /**
     * Get totalht
     *
     * @return string
     */
    public function getTotalht()
    {
        return $this->totalht;
    }

    /**
     * Set totalttc
     *
     * @param string $totalttc
     *
     * @return Depensesmachine
     */
    public function setTotalttc($totalttc)
    {
        $this->totalttc = $totalttc;

        return $this;
    }

    /**
     * Get totalttc
     *
     * @return string
     */
    public function getTotalttc()
    {
        return $this->totalttc;
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
     * @return Depensesmachine
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

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Depensesmachine
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
     * Set codelocatafrs
     *
     * @param integer $codelocatafrs
     *
     * @return Depensesmachine
     */
    public function setCodelocatafrs($codelocatafrs)
    {
        $this->codelocatafrs = $codelocatafrs;

        return $this;
    }

    /**
     * Get codelocatafrs
     *
     * @return integer
     */
    public function getCodelocatafrs()
    {
        return $this->codelocatafrs;
    }

    /**
     * Set codelocationfrs
     *
     * @param integer $codelocationfrs
     *
     * @return Depensesmachine
     */
    public function setCodelocationfrs($codelocationfrs)
    {
        $this->codelocationfrs = $codelocationfrs;

        return $this;
    }

    /**
     * Get codelocationfrs
     *
     * @return integer
     */
    public function getCodelocationfrs()
    {
        return $this->codelocationfrs;
    }
}
