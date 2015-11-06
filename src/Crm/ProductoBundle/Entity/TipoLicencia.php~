<?php

namespace Crm\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoLicencia
 */
class TipoLicencia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $precio;

    /**
     * @var integer
     */
    private $meses;


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
     * Set precio
     *
     * @param integer $precio
     * @return TipoLicencia
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set meses
     *
     * @param integer $meses
     * @return TipoLicencia
     */
    public function setMeses($meses)
    {
        $this->meses = $meses;

        return $this;
    }

    /**
     * Get meses
     *
     * @return integer 
     */
    public function getMeses()
    {
        return $this->meses;
    }
    /**
     * @var \Crm\ProductoBundle\Entity\Producto
     */
    private $producto;


    /**
     * Set producto
     *
     * @param \Crm\ProductoBundle\Entity\Producto $producto
     * @return TipoLicencia
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
