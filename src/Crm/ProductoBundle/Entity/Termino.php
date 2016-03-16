<?php

namespace Crm\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Termino
 */
class Termino
{
    /**
     * @var integer
     */
    private $id;

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
     * Set termino
     *
     * @param string $termino
     * @return Termino
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

     public function __toString()
    {
        return $this->termino;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $venta;

    /**
     * @var \Crm\ProductoBundle\Entity\Producto
     */
    private $producto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->venta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add venta
     *
     * @param \Crm\VentasBundle\Entity\Venta $venta
     * @return Termino
     */
    public function addVentum(\Crm\VentasBundle\Entity\Venta $venta)
    {
        $this->venta[] = $venta;

        return $this;
    }

    /**
     * Remove venta
     *
     * @param \Crm\VentasBundle\Entity\Venta $venta
     */
    public function removeVentum(\Crm\VentasBundle\Entity\Venta $venta)
    {
        $this->venta->removeElement($venta);
    }

    /**
     * Get venta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVenta()
    {
        return $this->venta;
    }

    /**
     * Set producto
     *
     * @param \Crm\ProductoBundle\Entity\Producto $producto
     * @return Termino
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
}
