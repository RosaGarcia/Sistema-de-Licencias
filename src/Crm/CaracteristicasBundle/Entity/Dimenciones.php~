<?php

namespace Crm\CaracteristicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dimenciones
 */
class Dimenciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $dimenciones;


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
     * Set dimenciones
     *
     * @param string $dimenciones
     * @return Dimenciones
     */
    public function setDimenciones($dimenciones)
    {
        $this->dimenciones = $dimenciones;

        return $this;
    }

    /**
     * Get dimenciones
     *
     * @return string 
     */
    public function getDimenciones()
    {
        return $this->dimenciones;
    }

     public function __toString()
    {
        return $this->dimenciones;
    }
   
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $caracteristicasEquipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->caracteristicasEquipo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add caracteristicasEquipo
     *
     * @param \Crm\EquipoBundle\Entity\CaracteristicasEquipo $caracteristicasEquipo
     * @return Dimenciones
     */
    public function addCaracteristicasEquipo(\Crm\EquipoBundle\Entity\CaracteristicasEquipo $caracteristicasEquipo)
    {
        $this->caracteristicasEquipo[] = $caracteristicasEquipo;

        return $this;
    }

    /**
     * Remove caracteristicasEquipo
     *
     * @param \Crm\EquipoBundle\Entity\CaracteristicasEquipo $caracteristicasEquipo
     */
    public function removeCaracteristicasEquipo(\Crm\EquipoBundle\Entity\CaracteristicasEquipo $caracteristicasEquipo)
    {
        $this->caracteristicasEquipo->removeElement($caracteristicasEquipo);
    }

    /**
     * Get caracteristicasEquipo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCaracteristicasEquipo()
    {
        return $this->caracteristicasEquipo;
    }
}
