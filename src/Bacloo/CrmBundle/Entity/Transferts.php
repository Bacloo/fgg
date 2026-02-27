<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transferts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\TransfertsRepository")
 */
class Transferts
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
     * @var string
     *
     * @ORM\Column(name="ecode", type="string", length=255)
     */
    private $ecode;

    /**
     * @var integer
     *
     * @ORM\Column(name="chantierid", type="integer")
     */
    private $chantierid;

    /**
     * @var string
     *
     * @ORM\Column(name="oldnomchantier", type="string", length=255)
     */
    private $oldnomchantier;

    /**
     * @var string
     *
     * @ORM\Column(name="oldadresse1", type="string", length=255)
     */
    private $oldadresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="oldadresse2", type="string", length=255, nullable=true)
     */
    private $oldadresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="oldadresse3", type="string", length=255, nullable=true)
     */
    private $oldadresse3;

    /**
     * @var integer
     *
     * @ORM\Column(name="oldcp", type="integer", length=255)
     */
    private $oldcp;

    /**
     * @var string
     *
     * @ORM\Column(name="oldville", type="string", length=255)
     */
    private $oldville;

    /**
     * @var string
     *
     * @ORM\Column(name="newnomchantier", type="string", length=255)
     */
    private $newnomchantier;

    /**
     * @var string
     *
     * @ORM\Column(name="newadresse1", type="string", length=255)
     */
    private $newadresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="newadresse2", type="string", length=255, nullable=true)
     */
    private $newadresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="newadresse3", type="string", length=255, nullable=true)
     */
    private $newadresse3;

    /**
     * @var integer
     *
     * @ORM\Column(name="newcp", type="integer")
     */
    private $newcp;

    /**
     * @var string
     *
     * @ORM\Column(name="newville", type="string", length=255)
     */
    private $newville;

    /**
     * @var string
     *
     * @ORM\Column(name="demandeur", type="string", length=255)
     */
    private $demandeur;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

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
     * @var string
     *
     * @ORM\Column(name="typeloc", type="string", length=255)
     */
    private $typeloc;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;


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
     * Set clientid
     *
     * @param integer $clientid
     *
     * @return Transferts
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
     * @return Transferts
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
     * Set ecode
     *
     * @param string $ecode
     *
     * @return Transferts
     */
    public function setEcode($ecode)
    {
        $this->ecode = $ecode;

        return $this;
    }

    /**
     * Get ecode
     *
     * @return string
     */
    public function getEcode()
    {
        return $this->ecode;
    }

    /**
     * Set oldnomchantier
     *
     * @param string $oldnomchantier
     *
     * @return Transferts
     */
    public function setOldnomchantier($oldnomchantier)
    {
        $this->oldnomchantier = $oldnomchantier;

        return $this;
    }

    /**
     * Get oldnomchantier
     *
     * @return string
     */
    public function getOldnomchantier()
    {
        return $this->oldnomchantier;
    }

    /**
     * Set oldadresse1
     *
     * @param string $oldadresse1
     *
     * @return Transferts
     */
    public function setOldadresse1($oldadresse1)
    {
        $this->oldadresse1 = $oldadresse1;

        return $this;
    }

    /**
     * Get oldadresse1
     *
     * @return string
     */
    public function getOldadresse1()
    {
        return $this->oldadresse1;
    }

    /**
     * Set oldadresse2
     *
     * @param string $oldadresse2
     *
     * @return Transferts
     */
    public function setOldadresse2($oldadresse2)
    {
        $this->oldadresse2 = $oldadresse2;

        return $this;
    }

    /**
     * Get oldadresse2
     *
     * @return string
     */
    public function getOldadresse2()
    {
        return $this->oldadresse2;
    }

    /**
     * Set oldadresse3
     *
     * @param string $oldadresse3
     *
     * @return Transferts
     */
    public function setOldadresse3($oldadresse3)
    {
        $this->oldadresse3 = $oldadresse3;

        return $this;
    }

    /**
     * Get oldadresse3
     *
     * @return string
     */
    public function getOldadresse3()
    {
        return $this->oldadresse3;
    }

    /**
     * Set oldcp
     *
     * @param string $oldcp
     *
     * @return Transferts
     */
    public function setOldcp($oldcp)
    {
        $this->oldcp = $oldcp;

        return $this;
    }

    /**
     * Get oldcp
     *
     * @return string
     */
    public function getOldcp()
    {
        return $this->oldcp;
    }

    /**
     * Set oldville
     *
     * @param string $oldville
     *
     * @return Transferts
     */
    public function setOldville($oldville)
    {
        $this->oldville = $oldville;

        return $this;
    }

    /**
     * Get oldville
     *
     * @return string
     */
    public function getOldville()
    {
        return $this->oldville;
    }

    /**
     * Set newnomchantier
     *
     * @param string $newnomchantier
     *
     * @return Transferts
     */
    public function setNewnomchantier($newnomchantier)
    {
        $this->newnomchantier = $newnomchantier;

        return $this;
    }

    /**
     * Get newnomchantier
     *
     * @return string
     */
    public function getNewnomchantier()
    {
        return $this->newnomchantier;
    }

    /**
     * Set newadresse1
     *
     * @param string $newadresse1
     *
     * @return Transferts
     */
    public function setNewadresse1($newadresse1)
    {
        $this->newadresse1 = $newadresse1;

        return $this;
    }

    /**
     * Get newadresse1
     *
     * @return string
     */
    public function getNewadresse1()
    {
        return $this->newadresse1;
    }

    /**
     * Set newadresse2
     *
     * @param string $newadresse2
     *
     * @return Transferts
     */
    public function setNewadresse2($newadresse2)
    {
        $this->newadresse2 = $newadresse2;

        return $this;
    }

    /**
     * Get newadresse2
     *
     * @return string
     */
    public function getNewadresse2()
    {
        return $this->newadresse2;
    }

    /**
     * Set newadresse3
     *
     * @param string $newadresse3
     *
     * @return Transferts
     */
    public function setNewadresse3($newadresse3)
    {
        $this->newadresse3 = $newadresse3;

        return $this;
    }

    /**
     * Get newadresse3
     *
     * @return string
     */
    public function getNewadresse3()
    {
        return $this->newadresse3;
    }

    /**
     * Set newcp
     *
     * @param integer $newcp
     *
     * @return Transferts
     */
    public function setNewcp($newcp)
    {
        $this->newcp = $newcp;

        return $this;
    }

    /**
     * Get newcp
     *
     * @return integer
     */
    public function getNewcp()
    {
        return $this->newcp;
    }

    /**
     * Set newville
     *
     * @param string $newville
     *
     * @return Transferts
     */
    public function setNewville($newville)
    {
        $this->newville = $newville;

        return $this;
    }

    /**
     * Get newville
     *
     * @return string
     */
    public function getNewville()
    {
        return $this->newville;
    }

    /**
     * Set transportaller
     *
     * @param string $transportaller
     *
     * @return Transferts
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
     * @return Transferts
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
     * Set date
     *
     * @param string $date
     *
     * @return Transferts
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
     * Set chantierid
     *
     * @param integer $chantierid
     *
     * @return Transferts
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
     * Set demandeur
     *
     * @param string $demandeur
     *
     * @return Transferts
     */
    public function setDemandeur($demandeur)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get demandeur
     *
     * @return string
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Transferts
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set codecontrat
     *
     * @param integer $codecontrat
     *
     * @return Transferts
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

    /**
     * Set typeloc
     *
     * @param string $typeloc
     *
     * @return Transferts
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
     * Set user
     *
     * @param string $user
     *
     * @return Transferts
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
}
