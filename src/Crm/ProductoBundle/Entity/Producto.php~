<?php

namespace Crm\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 */
class Producto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $termino;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set termino
     *
     * @param string $termino
     * @return Producto
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;

        return $this;
    }

    /**
     * Get termino
     *
     * @return string 
     */
    public function getTermino()
    {
        return $this->termino;
    }
    /**
     * @var \Crm\CaracteristicasBundle\Entity\ModeloEquipo
     */
    private $modeloEquipo;


    /**
     * Set modeloEquipo
     *
     * @param \Crm\CaracteristicasBundle\Entity\ModeloEquipo $modeloEquipo
     * @return Producto
     */
    public function setModeloEquipo(\Crm\CaracteristicasBundle\Entity\ModeloEquipo $modeloEquipo = null)
    {
        $this->modeloEquipo = $modeloEquipo;

        return $this;
    }

    /**
     * Get modeloEquipo
     *
     * @return \Crm\CaracteristicasBundle\Entity\ModeloEquipo 
     */
    public function getModeloEquipo()
    {
        return $this->modeloEquipo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $equipo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tipoLicencia;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tipoLicencia = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add equipo
     *
     * @param \Crm\EquipoBundle\Entity\Equipo $equipo
     * @return Producto
     */
    public function addEquipo(\Crm\EquipoBundle\Entity\Equipo $equipo)
    {
        $this->equipo[] = $equipo;

        return $this;
    }

    /**
     * Remove equipo
     *
     * @param \Crm\EquipoBundle\Entity\Equipo $equipo
     */
    public function removeEquipo(\Crm\EquipoBundle\Entity\Equipo $equipo)
    {
        $this->equipo->removeElement($equipo);
    }

    /**
     * Get equipo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * Add tipoLicencia
     *
     * @param \Crm\ProductoBundle\Entity\TipoLicencia $tipoLicencia
     * @return Producto
     */
    public function addTipoLicencium(\Crm\ProductoBundle\Entity\TipoLicencia $tipoLicencia)
    {
        $this->tipoLicencia[] = $tipoLicencia;

        return $this;
    }

    /**
     * Remove tipoLicencia
     *
     * @param \Crm\ProductoBundle\Entity\TipoLicencia $tipoLicencia
     */
    public function removeTipoLicencium(\Crm\ProductoBundle\Entity\TipoLicencia $tipoLicencia)
    {
        $this->tipoLicencia->removeElement($tipoLicencia);
    }

    /**
     * Get tipoLicencia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTipoLicencia()
    {
        return $this->tipoLicencia;
    }
}
