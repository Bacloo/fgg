<?php

namespace Bacloo\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bacloo\CrmBundle\Entity\ArtaRepository")
 */
class Arta
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
     * @ORM\Column(name="groupir", type="string", length=255)
     */
    private $groupir;

	/**
	* @ORM\ManyToMany(targetEntity="Bacloo\CrmBundle\Entity\Articlesenvente", cascade={"persist"}, orphanRemoval=true)
	* @ORM\OrderBy({"id" = "DESC"})
	*/		
	Private $articlesenvente;


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
     * Set groupir
     *
     * @param string $groupir
     *
     * @return Arta
     */
    public function setGroupir($groupir)
    {
        $this->groupir = $groupir;

        return $this;
    }

    /**
     * Get groupir
     *
     * @return string
     */
    public function getGroupir()
    {
        return $this->groupir;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articlesenvente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add articlesenvente
     *
     * @param \Bacloo\CrmBundle\Entity\Articlesenvente $articlesenvente
     *
     * @return Arta
     */
    public function addArticlesenvente(\Bacloo\CrmBundle\Entity\Articlesenvente $articlesenvente)
    {
        $this->articlesenvente[] = $articlesenvente;

        return $this;
    }

    /**
     * Remove articlesenvente
     *
     * @param \Bacloo\CrmBundle\Entity\Articlesenvente $articlesenvente
     */
    public function removeArticlesenvente(\Bacloo\CrmBundle\Entity\Articlesenvente $articlesenvente)
    {
        $this->articlesenvente->removeElement($articlesenvente);
    }

    /**
     * Get articlesenvente
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticlesenvente()
    {
        return $this->articlesenvente;
    }
}
