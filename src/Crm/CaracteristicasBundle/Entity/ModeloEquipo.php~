<?php

namespace Crm\CaracteristicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModeloEquipo
 */
class ModeloEquipo
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
     * @return ModeloEquipo
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
     * @var \Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo
     */
    private $especificacionesEquipo;


    /**
     * Set especificacionesEquipo
     *
     * @param \Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo
     * @return ModeloEquipo
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $producto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->producto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add producto
     *
     * @param \Crm\ProductoBundle\Entity\Producto $producto
     * @return ModeloEquipo
     */
    public function addProducto(\Crm\ProductoBundle\Entity\Producto $producto)
    {
        $this->producto[] = $producto;

        return $this;
    }

    /**
     * Remove producto
     *
     * @param \Crm\ProductoBundle\Entity\Producto $producto
     */
    public function removeProducto(\Crm\ProductoBundle\Entity\Producto $producto)
    {
        $this->producto->removeElement($producto);
    }

    /**
     * Get producto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducto()
    {
        return $this->producto;
    }
}
