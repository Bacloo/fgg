<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grille
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Grille
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
     * @ORM\Column(name="codeclient", type="string", length=255, nullable=true)
     */
    private $codeclient;

    /**
     * @var string
     *
     * @ORM\Column(name="hauteur", type="string", length=255, nullable=true)
     */
    private $hauteur;

    /**
     * @var string
     *
     * @ORM\Column(name="codemachineinterne", type="string", length=255, nullable=true)
     */
    private $codemachineinterne;

    /**
     * @var string
     *
     * @ORM\Column(name="typemachine", type="string", length=255, nullable=true)
     */
    private $typemachine;

    /**
     * @var integer
     *
     * @ORM\Column(name="loyerp1", type="integer", nullable=true, nullable=true)
     */
    private $loyerp1;

    /**
     * @var integer
     *
     * @ORM\Column(name="loyerp2", type="integer", nullable=true, nullable=true)
     */
    private $loyerp2;

    /**
     * @var integer
     *
     * @ORM\Column(name="loyerp3", type="integer", nullable=true, nullable=true)
     */
    private $loyerp3;

    /**
     * @var integer
     *
     * @ORM\Column(name="loyerp4", type="integer", nullable=true, nullable=true)
     */
    private $loyerp4;

    /**
     * @var decimal
     *
     * @ORM\Column(name="loyermensuel", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $loyermensuel;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="energie", type="string", length=255, nullable=true)
     */
    private $energie;
	
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
     * Set codeclient
     *
     * @param string $codeclient
     *
     * @return Grille
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
     * Set codemachineinterne
     *
     * @param string $codemachineinterne
     *
     * @return Grille
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
     * @return Grille
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
     * Set loyerp1
     *
     * @param integer $loyerp1
     *
     * @return Grille
     */
    public function setLoyerp1($loyerp1)
    {
        $this->loyerp1 = $loyerp1;

        return $this;
    }

    /**
     * Get loyerp1
     *
     * @return integer
     */
    public function getLoyerp1()
    {
        return $this->loyerp1;
    }

    /**
     * Set loyerp2
     *
     * @param integer $loyerp2
     *
     * @return Grille
     */
    public function setLoyerp2($loyerp2)
    {
        $this->loyerp2 = $loyerp2;

        return $this;
    }

    /**
     * Get loyerp2
     *
     * @return integer
     */
    public function getLoyerp2()
    {
        return $this->loyerp2;
    }

    /**
     * Set loyerp3
     *
     * @param integer $loyerp3
     *
     * @return Grille
     */
    public function setLoyerp3($loyerp3)
    {
        $this->loyerp3 = $loyerp3;

        return $this;
    }

    /**
     * Get loyerp3
     *
     * @return integer
     */
    public function getLoyerp3()
    {
        return $this->loyerp3;
    }

    /**
     * Set loyerp4
     *
     * @param integer $loyerp4
     *
     * @return Grille
     */
    public function setLoyerp4($loyerp4)
    {
        $this->loyerp4 = $loyerp4;

        return $this;
    }

    /**
     * Get loyerp4
     *
     * @return integer
     */
    public function getLoyerp4()
    {
        return $this->loyerp4;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fiche = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fiche
     *
     * @param \Bacloo\CrmBundle\Entity\Fiche $fiche
     *
     * @return Grille
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
     * Set type
     *
     * @param string $type
     *
     * @return Grille
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set energie
     *
     * @param string $energie
     *
     * @return Grille
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
     * Set loyermensuel
     *
     * @param string $loyermensuel
     *
     * @return Grille
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
     * Set hauteur
     *
     * @param string $hauteur
     *
     * @return Grille
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return string
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }
}
