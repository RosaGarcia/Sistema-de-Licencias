<?php

namespace Crm\EquipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LicenciaEquipo
 */
class LicenciaEquipo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     */
    private $fechaFinal;


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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return LicenciaEquipo
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     * @return LicenciaEquipo
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

     public function __toString()
    {
        return (string)$this->id;
    }
    /**
     * @var \Crm\EquipoBundle\Entity\Equipo
     */
    private $equipo;


    /**
     * Set equipo
     *
     * @param \Crm\EquipoBundle\Entity\Equipo $equipo
     * @return LicenciaEquipo
     */
    public function setEquipo(\Crm\EquipoBundle\Entity\Equipo $equipo = null)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return \Crm\EquipoBundle\Entity\Equipo 
     */
    public function getEquipo()
    {
        return $this->equipo;
    }
}
