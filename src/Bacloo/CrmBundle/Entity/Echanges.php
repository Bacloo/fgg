<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echanges
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\EchangesRepository")
 */
class Echanges
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
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientid", type="integer")
     */
    private $clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;

    /**
     * @var integer
     *
     * @ORM\Column(name="chantierid", type="integer")
     */
    private $chantierid;

    /**
     * @var string
     *
     * @ORM\Column(name="chantier", type="string", length=255)
     */
    private $chantier;

    /**
     * @var integer
     *
     * @ORM\Column(name="cp", type="integer", nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="materielinitial", type="string", length=255)
     */
    private $materielinitial;

    /**
     * @var string
     *
     * @ORM\Column(name="materielremplacement", type="string", length=255)
     */
    private $materielremplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="typeloc", type="string", length=255)
     */
    private $typeloc;

    /**
     * @var string
     *
     * @ORM\Column(name="transportaller", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $transportaller;

    /**
     * @var string
     *
     * @ORM\Column(name="transportretour", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $transportretour;

    /**
     * @var integer
     *
     * @ORM\Column(name="codecontrat", type="integer", nullable=true)
     */
    private $codecontrat;


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
     * @return Echanges
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
     * Set clientid
     *
     * @param integer $clientid
     *
     * @return Echanges
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
     * @return Echanges
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
     * Set chantierid
     *
     * @param integer $chantierid
     *
     * @return Echanges
     */
    public function setChantierid($chantierid)
    {
        $this->chantierid = $chantierid;

        return $this;
    }

    /**
     * Get chantierid
     *
     * @return integer
     */
    public function getChantierid()
    {
        return $this->chantierid;
    }

    /**
     * Set chantier
     *
     * @param string $chantier
     *
     * @return Echanges
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
     * Set cp
     *
     * @param integer $cp
     *
     * @return Echanges
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
     * Set materielinitial
     *
     * @param string $materielinitial
     *
     * @return Echanges
     */
    public function setMaterielinitial($materielinitial)
    {
        $this->materielinitial = $materielinitial;

        return $this;
    }

    /**
     * Get materielinitial
     *
     * @return string
     */
    public function getMaterielinitial()
    {
        return $this->materielinitial;
    }

    /**
     * Set materielremplacement
     *
     * @param string $materielremplacement
     *
     * @return Echanges
     */
    public function setMaterielremplacement($materielremplacement)
    {
        $this->materielremplacement = $materielremplacement;

        return $this;
    }

    /**
     * Get materielremplacement
     *
     * @return string
     */
    public function getMaterielremplacement()
    {
        return $this->materielremplacement;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Echanges
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
     * Set typeloc
     *
     * @param string $typeloc
     *
     * @return Echanges
     */
    public function setTypeloc($typeloc)
    {
        $this->typeloc = $typeloc;

        return $this;
    }

    /**
     * Get typeloc
     *
     * @return string
     */
    public function getTypeloc()
    {
        return $this->typeloc;
    }

    /**
     * Set transportaller
     *
     * @param string $transportaller
     *
     * @return Echanges
     */
    public function setTransportaller($transportaller)
    {
        $this->transportaller = $transportaller;

        return $this;
    }

    /**
     * Get transportaller
     *
     * @return string
     */
    public function getTransportaller()
    {
        return $this->transportaller;
    }

    /**
     * Set transportretour
     *
     * @param string $transportretour
     *
     * @return Echanges
     */
    public function setTransportretour($transportretour)
    {
        $this->transportretour = $transportretour;

        return $this;
    }

    /**
     * Get transportretour
     *
     * @return string
     */
    public function getTransportretour()
    {
        return $this->transportretour;
    }

    /**
     * Set codecontrat
     *
     * @param integer $codecontrat
     *
     * @return Echanges
     */
    public function setCodecontrat($codecontrat)
    {
        $this->codecontrat = $codecontrat;

        return $this;
    }

    /**
     * Get codecontrat
     *
     * @return integer
     */
    public function getCodecontrat()
    {
        return $this->codecontrat;
    }
}
