<?php

namespace Bacloo\UserBundle\Entity;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="Bacloo\UserBundle\Entity\UserRepository")
 */

class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     *
     */
    protected $nom;	

    /**
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    protected $prenom;	

    /**
     * @ORM\Column(name="activite", type="string", length=255, nullable=true)
     */
    protected $activite;

    /**
     * @ORM\Column(name="desc_rech", type="string", length=512, nullable=true)
     */
    protected $desc_rech;
	
    /**
     * @ORM\Column(name="tags", type="string", length=512, nullable=true)
     */
    protected $tags;

    /**
     * @ORM\Column(name="actvise", type="string", length=512, nullable=true)
     */
    protected $actvise;

    /**
     * @var integer
     *
     * @ORM\Column(name="credits", type="integer", nullable=true)
     */
    protected $credits;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    protected $note;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="point", type="integer", nullable=true)
     */
    protected $point;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="plein", type="integer", nullable=true)
     */
    protected $plein;
	
    /**
     * @var string
     *
     * @ORM\Column(name="actconnexes", type="string", length=512, nullable=true))
     */
    protected $actconnexes;

    /**
     * @ORM\Column(name="parrain", type="string", length=255, nullable=true)
     *
     */
    protected $parrain;	

    /**
     * @ORM\Column(name="typeuser", type="string", length=255, nullable=true)
     *
     */
    protected $typeuser;	

    /**
     * @ORM\Column(name="usersociete", type="string", length=255, nullable=true)
     *
     */
    protected $usersociete;		

    /**
     * @ORM\Column(name="nomrep", type="string", length=255, nullable=true)
     *
     */
    protected $nomrep;			

    /**
     * @ORM\Column(name="typebacloo", type="string", length=255, nullable=true)
     *
     */
    protected $typebacloo;				

    /**
     * @ORM\Column(name="roleuser", type="string", length=255, nullable=true)
     *
     */
    protected $roleuser;	

    /**
     * @ORM\Column(name="textaccueil", type="string", length=255, nullable=true)
     */
    protected $textaccueil;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="fichelimit", type="integer", nullable=true)
     */
    protected $fichelimit;

    /**
     * @var string
     *
     * @ORM\Column(name="logged", type="string", length=255, nullable=true)
     */
    private $logged;

    /**
     *
     * @ORM\Column(name="cp", type="string", length=255, nullable=true)
     */
    protected $cp;

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
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }


    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set activite
     *
     * @param string $activite
     * @return User
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
     * Set desc_rech
     *
     * @param string $descRech
     * @return User
     */
    public function setDescRech($descRech)
    {
        $this->desc_rech = $descRech;

        return $this;
    }

    /**
     * Get desc_rech
     *
     * @return string 
     */
    public function getDescRech()
    {
        return $this->desc_rech;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return User
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
     * Set actvise
     *
     * @param string $actvise
     * @return User
     */
    public function setActvise($actvise)
    {
        $this->actvise = $actvise;

        return $this;
    }

    /**
     * Get actvise
     *
     * @return string 
     */
    public function getActvise()
    {
        return $this->actvise;
    }

    /**
     * Set credits
     *
     * @param integer $credits
     * @return User
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return integer 
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return User
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set actconnexes
     *
     * @param string $actconnexes
     *
     * @return User
     */
    public function setActconnexes($actconnexes)
    {
        $this->actconnexes = $actconnexes;
    
        return $this;
    }

    /**
     * Get actconnexes
     *
     * @return string
     */
    public function getActconnexes()
    {
        return $this->actconnexes;
    }

    /**
     * Set parrain
     *
     * @param string $parrain
     *
     * @return User
     */
    public function setParrain($parrain)
    {
        $this->parrain = $parrain;
    
        return $this;
    }

    /**
     * Get parrain
     *
     * @return string
     */
    public function getParrain()
    {
        return $this->parrain;
    }

    /**
     * Set plein
     *
     * @param integer $plein
     *
     * @return User
     */
    public function setPlein($plein)
    {
        $this->plein = $plein;
    
        return $this;
    }

    /**
     * Get plein
     *
     * @return integer
     */
    public function getPlein()
    {
        return $this->plein;
    }

    /**
     * Set point
     *
     * @param integer $point
     *
     * @return User
     */
    public function setPoint($point)
    {
        $this->point = $point;
    
        return $this;
    }

    /**
     * Get point
     *
     * @return integer
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set usersociete
     *
     * @param string $usersociete
     *
     * @return User
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
     * Set nomrep
     *
     * @param string $nomrep
     *
     * @return User
     */
    public function setNomrep($nomrep)
    {
        $this->nomrep = $nomrep;
    
        return $this;
    }

    /**
     * Get nomrep
     *
     * @return string
     */
    public function getNomrep()
    {
        return $this->nomrep;
    }

    /**
     * Set typebacloo
     *
     * @param string $typebacloo
     *
     * @return User
     */
    public function setTypebacloo($typebacloo)
    {
        $this->typebacloo = $typebacloo;
    
        return $this;
    }

    /**
     * Get typebacloo
     *
     * @return string
     */
    public function getTypebacloo()
    {
        return $this->typebacloo;
    }

    /**
     * Set roleuser
     *
     * @param string $roleuser
     *
     * @return User
     */
    public function setRoleuser($roleuser)
    {
        $this->roleuser = $roleuser;
    
        return $this;
    }

    /**
     * Get roleuser
     *
     * @return string
     */
    public function getRoleuser()
    {
        return $this->roleuser;
    }

    /**
     * Set textaccueil
     *
     * @param string $textaccueil
     *
     * @return User
     */
    public function setTextaccueil($textaccueil)
    {
        $this->textaccueil = $textaccueil;
    
        return $this;
    }

    /**
     * Get textaccueil
     *
     * @return string
     */
    public function getTextaccueil()
    {
        return $this->textaccueil;
    }

    /**
     * Set logged
     *
     * @param boolean $logged
     *
     * @return User
     */
    public function setLogged($logged)
    {
        $this->logged = $logged;
    
        return $this;
    }

    /**
     * Get logged
     *
     * @return boolean
     */
    public function getLogged()
    {
        return $this->logged;
    }
	
    /**
     * Set cp
     *
     * @param boolean $cp
     *
     * @return User
     */
    public function setcp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return boolean
     */
    public function getcp()
    {
        return $this->cp;
    }
	
    /**
     * Set fichelimit
     *
     * @param boolean $fichelimit
     *
     * @return User
     */
    public function setfichelimit($fichelimit)
    {
        $this->fichelimit = $fichelimit;
    
        return $this;
    }

    /**
     * Get fichelimit
     *
     * @return boolean
     */
    public function getfichelimit()
    {
        return $this->fichelimit;
    }

    /**
     * Set typeuser
     *
     * @param string $typeuser
     *
     * @return User
     */
    public function setTypeuser($typeuser)
    {
        $this->typeuser = $typeuser;

        return $this;
    }

    /**
     * Get typeuser
     *
     * @return string
     */
    public function getTypeuser()
    {
        return $this->typeuser;
    }
}
