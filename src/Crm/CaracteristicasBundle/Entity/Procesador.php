<?php

namespace Crm\CaracteristicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Procesador
 */
class Procesador
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $marca;

    /**
     * @var string
     */
    private $modelo;

    /**
     * @var float
     */
    private $velocidad;

    /**
     * @var string
     */
    private $unidad;


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
     * Set marca
     *
     * @param string $marca
     * @return Procesador
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Procesador
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set velocidad
     *
     * @param float $velocidad
     * @return Procesador
     */
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;

        return $this;
    }

    /**
     * Get velocidad
     *
     * @return float 
     */
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     * @return Procesador
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    public function __toString()
    {
        return $this->marca;
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
     * @return Procesador
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
