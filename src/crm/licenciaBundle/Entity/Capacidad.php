<?php

namespace crm\licenciaBundle\Entity;

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
     * @var string
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
     * @param string $capacidad
     *
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
     * @return string
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }
}

