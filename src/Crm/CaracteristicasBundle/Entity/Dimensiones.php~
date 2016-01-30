<?php

namespace Crm\CaracteristicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dimensiones
 */
class Dimensiones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $dimensiones;


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
     * Set dimensiones
     *
     * @param string $dimensiones
     * @return Dimensiones
     */
    public function setDimensiones($dimensiones)
    {
        $this->dimensiones = $dimensiones;

        return $this;
    }

    /**
     * Get dimensiones
     *
     * @return string 
     */
    public function getDimensiones()
    {
        return $this->dimensiones;
    }

     public function __toString()
    {
        return $this->dimensiones;
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
     * @return Dimensiones
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
