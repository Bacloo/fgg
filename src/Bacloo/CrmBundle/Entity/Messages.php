<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\MessagesRepository")
 */
class Messages
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
     * @var integer
     *
     * @ORM\Column(name="idmsgoriginal", type="integer", nullable=true)
     */
    private $idmsgoriginal;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="from_id", type="integer", nullable=true)
     */
    private $fromId;

    /**
     * @var integer
     *
     * @ORM\Column(name="dest_id", type="integer", nullable=true)
     */
    private $destId;

    /**
     * @var string
     *
     * @ORM\Column(name="from_nom", type="string", length=255, nullable=true)
     */
    private $fromNom;

    /**
     * @var string
     *
     * @ORM\Column(name="from_prenom", type="string", length=255, nullable=true)
     */
    private $fromPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="destNom", type="string", length=255, nullable=true)
     */
    private $destNom;

    /**
     * @var string
     *
     * @ORM\Column(name="destprenom", type="string", length=255, nullable=true)
     */
    private $destPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire", type="string", length=255, nullable=true)
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255, nullable=true)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonsociale", type="string", length=255, nullable=true)
     */
    private $raisonsociale;

    /**
     * @var string
     *
     * @ORM\Column(name="proprio", type="string", length=255, nullable=true)
     */
    private $proprio;

    /**
     * @var string
     *
     * @ORM\Column(name="lu", type="text")
     */
    private $lu;


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
     * @return Messages
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
     * Set fromId
     *
     * @param integer $fromId
     * @return Messages
     */
    public function setFromId($fromId)
    {
        $this->fromId = $fromId;

        return $this;
    }

    /**
     * Get fromId
     *
     * @return integer 
     */
    public function getFromId()
    {
        return $this->fromId;
    }

    /**
     * Set fromNom
     *
     * @param string $fromNom
     * @return Messages
     */
    public function setFromNom($fromNom)
    {
        $this->fromNom = $fromNom;

        return $this;
    }

    /**
     * Get fromNom
     *
     * @return string 
     */
    public function getFromNom()
    {
        return $this->fromNom;
    }

    /**
     * Set fromPrenom
     *
     * @param string $fromPrenom
     * @return Messages
     */
    public function setFromPrenom($fromPrenom)
    {
        $this->fromPrenom = $fromPrenom;

        return $this;
    }

    /**
     * Get fromPrenom
     *
     * @return string 
     */
    public function getFromPrenom()
    {
        return $this->fromPrenom;
    }

    /**
     * Set destinataire
     *
     * @param string $destinataire
     * @return Messages
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string 
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set objet
     *
     * @param string $objet
     * @return Messages
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Messages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set lu
     *
     * @param string $lu
     * @return Messages
     */
    public function setLu($lu)
    {
        $this->lu = $lu;

        return $this;
    }

    /**
     * Get lu
     *
     * @return string 
     */
    public function getLu()
    {
        return $this->lu;
    }


    /**
     * Set raisonsociale
     *
     * @param string $raisonsociale
     * @return Messages
     */
    public function setRaisonsociale($raisonsociale)
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }

    /**
     * Get raisonsociale
     *
     * @return string 
     */
    public function getRaisonsociale()
    {
        return $this->raisonsociale;
    }

    /**
     * Set destId
     *
     * @param integer $destId
     * @return Messages
     */
    public function setDestId($destId)
    {
        $this->destId = $destId;

        return $this;
    }

    /**
     * Get destId
     *
     * @return integer 
     */
    public function getDestId()
    {
        return $this->destId;
    }

    /**
     * Set destNom
     *
     * @param string $destNom
     * @return Messages
     */
    public function setDestNom($destNom)
    {
        $this->destNom = $destNom;

        return $this;
    }

    /**
     * Get destNom
     *
     * @return string 
     */
    public function getDestNom()
    {
        return $this->destNom;
    }

    /**
     * Set destPrenom
     *
     * @param string $destPrenom
     * @return Messages
     */
    public function setDestPrenom($destPrenom)
    {
        $this->destPrenom = $destPrenom;

        return $this;
    }

    /**
     * Get destPrenom
     *
     * @return string 
     */
    public function getDestPrenom()
    {
        return $this->destPrenom;
    }

    /**
     * Set idmsgoriginal
     *
     * @param integer $idmsgoriginal
     * @return Messages
     */
    public function setIdmsgoriginal($idmsgoriginal)
    {
        $this->idmsgoriginal = $idmsgoriginal;

        return $this;
    }

    /**
     * Get idmsgoriginal
     *
     * @return integer 
     */
    public function getIdmsgoriginal()
    {
        return $this->idmsgoriginal;
    }

    /**
     * Set proprio
     *
     * @param string $proprio
     * @return Messages
     */
    public function setProprio($proprio)
    {
        $this->proprio = $proprio;

        return $this;
    }

    /**
     * Get proprio
     *
     * @return string 
     */
    public function getProprio()
    {
        return $this->proprio;
    }
}
