<?php

namespace Crm\PersonalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puesto
 */
class Puesto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $puesto;


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
     * Set puesto
     *
     * @param string $puesto
     * @return Puesto
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get puesto
     *
     * @return string 
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

     public function __toString()
    {
        return $this->puesto;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personal = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personal
     *
     * @param \Crm\PersonalBundle\Entity\Personal $personal
     * @return Puesto
     */
    public function addPersonal(\Crm\PersonalBundle\Entity\Personal $personal)
    {
        $this->personal[] = $personal;

        return $this;
    }

    /**
     * Remove personal
     *
     * @param \Crm\PersonalBundle\Entity\Personal $personal
     */
    public function removePersonal(\Crm\PersonalBundle\Entity\Personal $personal)
    {
        $this->personal->removeElement($personal);
    }

    /**
     * Get personal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonal()
    {
        return $this->personal;
    }
}
