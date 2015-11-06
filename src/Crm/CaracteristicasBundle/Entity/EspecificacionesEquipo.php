<?php

namespace Crm\CaracteristicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EspecificacionesEquipo
 */
class EspecificacionesEquipo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $numeroInterfaces;

    /**
     * @var integer
     */
    private $numeroUsb;

    /**
     * @var boolean
     */
    private $expansion;


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
     * Set numeroInterfaces
     *
     * @param integer $numeroInterfaces
     * @return EspecificacionesEquipo
     */
    public function setNumeroInterfaces($numeroInterfaces)
    {
        $this->numeroInterfaces = $numeroInterfaces;

        return $this;
    }

    /**
     * Get numeroInterfaces
     *
     * @return integer 
     */
    public function getNumeroInterfaces()
    {
        return $this->numeroInterfaces;
    }

    /**
     * Set numeroUsb
     *
     * @param integer $numeroUsb
     * @return EspecificacionesEquipo
     */
    public function setNumeroUsb($numeroUsb)
    {
        $this->numeroUsb = $numeroUsb;

        return $this;
    }

    /**
     * Get numeroUsb
     *
     * @return integer 
     */
    public function getNumeroUsb()
    {
        return $this->numeroUsb;
    }

    /**
     * Set expansion
     *
     * @param boolean $expansion
     * @return EspecificacionesEquipo
     */
    public function setExpansion($expansion)
    {
        $this->expansion = $expansion;

        return $this;
    }

    /**
     * Get expansion
     *
     * @return boolean 
     */
    public function getExpansion()
    {
        return $this->expansion;
    }
    /**
     * @var \Crm\CaracteristicasBundle\Entity\Procesador
     */
    private $procesador;


    /**
     * Set procesador
     *
     * @param \Crm\CaracteristicasBundle\Entity\Procesador $procesador
     * @return EspecificacionesEquipo
     */
    public function setProcesador(\Crm\CaracteristicasBundle\Entity\Procesador $procesador = null)
    {
        $this->procesador = $procesador;

        return $this;
    }

    /**
     * Get procesador
     *
     * @return \Crm\CaracteristicasBundle\Entity\Procesador 
     */
    public function getProcesador()
    {
        return $this->procesador;
    }

    /**
     * @var \Crm\CaracteristicasBundle\Entity\DiscoDuro
     */
    private $discoDuro;

    /**
     * Set discoDuro
     *
     * @param \Crm\CaracteristicasBundle\Entity\DiscoDuro $discoDuro
     * @return EspecificacionesEquipo
     */
    public function setDiscoDuro(\Crm\CaracteristicasBundle\Entity\DiscoDuro $discoDuro = null)
    {
        $this->discoDuro = $discoDuro;

        return $this;
    }

    /**
     * Get discoDuro
     *
     * @return \Crm\CaracteristicasBundle\Entity\DiscoDuro
     */
    public function getDiscoDuro()
    {
        return $this->discoDuro;
    }
    
}
