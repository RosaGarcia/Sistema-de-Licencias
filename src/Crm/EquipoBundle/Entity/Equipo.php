<?php

namespace Crm\EquipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 */
class Equipo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $numeroSerie;

    /**
     * @var \DateTime
     */
    private $fechaInstalacion;


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
     * Set numeroSerie
     *
     * @param string $numeroSerie
     * @return Equipo
     */
    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    /**
     * Get numeroSerie
     *
     * @return string 
     */
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    /**
     * Set fechaInstalacion
     *
     * @param \DateTime $fechaInstalacion
     * @return Equipo
     */
    public function setFechaInstalacion($fechaInstalacion)
    {
        $this->fechaInstalacion = $fechaInstalacion;

        return $this;
    }

    /**
     * Get fechaInstalacion
     *
     * @return \DateTime 
     */
    public function getFechaInstalacion()
    {
        return $this->fechaInstalacion;
    }
    /**
     * @var \Crm\EquipoBundle\Entity\LicenciaEquipo
     */
    private $licenciaEquipo;

    /**
     * @var \Crm\ClienteBundle\Entity\Cliente
     */
    private $cliente;


    /**
     * Set licenciaEquipo
     *
     * @param \Crm\EquipoBundle\Entity\LicenciaEquipo $licenciaEquipo
     * @return Equipo
     */
    public function setLicenciaEquipo(\Crm\EquipoBundle\Entity\LicenciaEquipo $licenciaEquipo = null)
    {
        $this->licenciaEquipo = $licenciaEquipo;

        return $this;
    }

    /**
     * Get licenciaEquipo
     *
     * @return \Crm\EquipoBundle\Entity\LicenciaEquipo 
     */
    public function getLicenciaEquipo()
    {
        return $this->licenciaEquipo;
    }

    /**
     * Set cliente
     *
     * @param \Crm\ClienteBundle\Entity\Cliente $cliente
     * @return Equipo
     */
    public function setCliente(\Crm\ClienteBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Crm\ClienteBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
