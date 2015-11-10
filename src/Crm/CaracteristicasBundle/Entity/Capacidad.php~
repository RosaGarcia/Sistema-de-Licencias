<?php

namespace Crm\CaracteristicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capacidad
 */
class Capacidad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $capacidad;


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
     * Set capacidad
     *
     * @param integer $capacidad
     * @return Capacidad
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return integer 
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

     public function __toString()
    {
        return (string)$this->capacidad;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $especificacionesEquipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->especificacionesEquipo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add especificacionesEquipo
     *
     * @param \Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo
     * @return Capacidad
     */
    public function addEspecificacionesEquipo(\Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo)
    {
        $this->especificacionesEquipo[] = $especificacionesEquipo;

        return $this;
    }

    /**
     * Remove especificacionesEquipo
     *
     * @param \Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo
     */
    public function removeEspecificacionesEquipo(\Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo)
    {
        $this->especificacionesEquipo->removeElement($especificacionesEquipo);
    }

    /**
     * Get especificacionesEquipo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEspecificacionesEquipo()
    {
        return $this->especificacionesEquipo;
    }
}
