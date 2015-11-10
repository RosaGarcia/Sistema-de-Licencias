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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ubicacion;

    /**
     * @var \Crm\PersonalBundle\Entity\Personal
     */
    private $personal;

    /**
     * @var \Crm\GeneralBundle\Entity\Estatus
     */
    private $estatus;

    /**
     * @var \Crm\EquipoBundle\Entity\Procedencia
     */
    private $procedencia;

    /**
     * @var \Crm\ProductoBundle\Entity\Producto
     */
    private $producto;

    /**
     * @var \Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo
     */
    private $especificacionesEquipo;

    /**
     * @var \Crm\VentaBundle\Entity\Venta
     */
    private $venta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ubicacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ubicacion
     *
     * @param \Crm\EquipoBundle\Entity\Ubicacion $ubicacion
     * @return Equipo
     */
    public function addUbicacion(\Crm\EquipoBundle\Entity\Ubicacion $ubicacion)
    {
        $this->ubicacion[] = $ubicacion;

        return $this;
    }

    /**
     * Remove ubicacion
     *
     * @param \Crm\EquipoBundle\Entity\Ubicacion $ubicacion
     */
    public function removeUbicacion(\Crm\EquipoBundle\Entity\Ubicacion $ubicacion)
    {
        $this->ubicacion->removeElement($ubicacion);
    }

    /**
     * Get ubicacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set personal
     *
     * @param \Crm\PersonalBundle\Entity\Personal $personal
     * @return Equipo
     */
    public function setPersonal(\Crm\PersonalBundle\Entity\Personal $personal = null)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * Get personal
     *
     * @return \Crm\PersonalBundle\Entity\Personal 
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * Set estatus
     *
     * @param \Crm\GeneralBundle\Entity\Estatus $estatus
     * @return Equipo
     */
    public function setEstatus(\Crm\GeneralBundle\Entity\Estatus $estatus = null)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return \Crm\GeneralBundle\Entity\Estatus 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set procedencia
     *
     * @param \Crm\EquipoBundle\Entity\Procedencia $procedencia
     * @return Equipo
     */
    public function setProcedencia(\Crm\EquipoBundle\Entity\Procedencia $procedencia = null)
    {
        $this->procedencia = $procedencia;

        return $this;
    }

    /**
     * Get procedencia
     *
     * @return \Crm\EquipoBundle\Entity\Procedencia 
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Set producto
     *
     * @param \Crm\ProductoBundle\Entity\Producto $producto
     * @return Equipo
     */
    public function setProducto(\Crm\ProductoBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \Crm\ProductoBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set especificacionesEquipo
     *
     * @param \Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo
     * @return Equipo
     */
    public function setEspecificacionesEquipo(\Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo = null)
    {
        $this->especificacionesEquipo = $especificacionesEquipo;

        return $this;
    }

    /**
     * Get especificacionesEquipo
     *
     * @return \Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo 
     */
    public function getEspecificacionesEquipo()
    {
        return $this->especificacionesEquipo;
    }

    /**
     * Set venta
     *
     * @param \Crm\VentaBundle\Entity\Venta $venta
     * @return Equipo
     */
    public function setVenta(\Crm\VentaBundle\Entity\Venta $venta = null)
    {
        $this->venta = $venta;

        return $this;
    }

    /**
     * Get venta
     *
     * @return \Crm\VentaBundle\Entity\Venta 
     */
    public function getVenta()
    {
        return $this->venta;
    }
}
