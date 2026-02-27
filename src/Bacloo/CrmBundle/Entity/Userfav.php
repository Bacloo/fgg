<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userfav
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\UserfavRepository")
 */
class Userfav
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
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;

	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Favoris", cascade={"persist"})
	* @ORM\OrderBy({"favusername" = "DESC"})
	*/		
	Private $favoris;

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
     * Set userid
     *
     * @param integer $userid
     *
     * @return Userfav
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->favoris = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add favori
     *
     * @param \Bacloo\CrmBundle\Entity\Favoris $favori
     *
     * @return Userfav
     */
    public function addFavori(\Bacloo\CrmBundle\Entity\Favoris $favori)
    {
        $this->favoris[] = $favori;

        return $this;
    }

    /**
     * Remove favori
     *
     * @param \Bacloo\CrmBundle\Entity\Favoris $favori
     */
    public function removeFavori(\Bacloo\CrmBundle\Entity\Favoris $favori)
    {
        $this->favoris->removeElement($favori);
    }

    /**
     * Get favoris
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavoris()
    {
        return $this->favoris;
    }
}
