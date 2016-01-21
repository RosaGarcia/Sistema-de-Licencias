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

    public function __toString()
    {
        return $this->termino;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $venta;

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
     * @return Producto
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
}
