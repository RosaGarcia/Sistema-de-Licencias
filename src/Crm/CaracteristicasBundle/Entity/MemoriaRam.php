<?php

namespace Crm\CaracteristicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memoria_ram
 */
class MemoriaRam
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
     * @var integer
     */
    private $capacidad;

    /**
     * @var string
     */
    private $unidad;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $terminoMemoria;


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
     * @return MemoriaRam
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
     * @return MemoriaRam
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
     * Set capacidad
     *
     * @param integer $capacidad
     * @return MemoriaRam
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

    /**
     * Set unidad
     *
     * @param string $unidad
     * @return MemoriaRam
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

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return MemoriaRam
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

     /**
     * Set terminoMemoria
     *
     * @param string $terminoMemoria
     * @return MemoriaRam
     */
    public function setTerminoMemoria($terminoMemoria)
    {
        $this->terminoMemoria = $terminoMemoria;

        return $this;
    }

    /**
     * Get terminoMemoria
     *
     * @return string 
     */
    public function getTerminoMemoria()
    {
        return $this->terminoMemoria;
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
     * @return MemoriaRam
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

    public function __toString()
    {
        return $this->terminoMemoria;
    }
}
