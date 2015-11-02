<?php

namespace crm\licenciaBundle\Entity;

/**
 * Caracteristicas_equipo
 */
class Caracteristicas_equipo
{
    /**
     * @var integer
     */
    private $id;

       /**
     * @var string
     */
    private $versionSoftware;

    /**
     * @var integer
     */
    private $numeroInterfaz;

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
     * Set versionSoftware
     *
     * @param string $versionSoftware
     *
     * @return Caracteristicas_equipo
     */
    public function setVersionSoftware($versionSoftware)
    {
        $this->versionSoftware = $versionSoftware;

        return $this;
    }

    /**
     * Get versionSoftware
     *
     * @return string
     */
    public function getVersionSoftware()
    {
        return $this->versionSoftware;
    }

    /**
     * Set numeroInterfaz
     *
     * @param integer $numeroInterfaz
     *
     * @return Caracteristicas_equipo
     */
    public function setNumeroInterfaz($numeroInterfaz)
    {
        $this->numeroInterfaz = $numeroInterfaz;

        return $this;
    }

    /**
     * Get numeroInterfaz
     *
     * @return integer
     */
    public function getNumeroInterfaz()
    {
        return $this->numeroInterfaz;
    }

    /**
     * Set dimenciones
     *
     * @param string $dimenciones
     *
     * @return Caracteristicas_equipo
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
}

