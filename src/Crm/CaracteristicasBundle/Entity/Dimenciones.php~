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
     * @return Dimenciones
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
