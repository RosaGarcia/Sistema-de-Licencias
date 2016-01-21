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
     * @var string
     */
    private $terminoProcesador;


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
     * @param string $velocidad
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
     * @return string 
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

    /**
     * Get terminoProcesador
     *
     * @return string 
     */
    public function getTerminoProcesador()
    {
        return $this->terminoProcesador;
    }

    /**
     * Set terminoProcesador
     *
     * @param string $terminoProcesador
     * @return Procesador
     */
    public function setTerminoProcesador($terminoProcesador)
    {
        $this->terminoProcesador = $terminoProcesador;

        return $this;
    }

     public function __toString()
    {
        return $this->terminoProcesador;
    }
}
