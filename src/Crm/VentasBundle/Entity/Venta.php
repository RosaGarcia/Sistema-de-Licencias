<?php

namespace Crm\VentasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Venta
 */
class Venta
{
    protected $usuarios;
 
    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaVenta;


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
     * Set fechaVenta
     *
     * @param \DateTime $fechaVenta
     * @return Venta
     */
    public function setFechaVenta($fechaVenta)
    {
        $this->fechaVenta = $fechaVenta;

        return $this;
    }

    /**
     * Get fechaVenta
     *
     * @return \DateTime 
     */
    public function getFechaVenta()
    {
        return $this->fechaVenta;
    }

    /**
     * Set usuarios
     *
     * @param \Crm\UsuariosBundle\Entity\Usuarios $usuarios
     * @return Venta
     */
    public function setUsuarios(\Crm\UsuariosBundle\Entity\Usuarios $usuarios = null)
    {
        $this->usuarios = $usuarios;

        return $this;
    }

    /**
     * Get usuarios
     *
     * @return \Crm\UsuariosBundle\Entity\Usuarios 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
    /**
     * @var string
     */
    private $estatus;

    /**
     * @var \Crm\ProductoBundle\Entity\Producto
     */
    private $producto;


    /**
     * Set estatus
     *
     * @param string $estatus
     * @return Venta
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return string 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set producto
     *
     * @param \Crm\ProductoBundle\Entity\Producto $producto
     * @return Venta
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
     * Set equipo
     *
     * @param \Crm\EquipoBundle\Entity\Equipo $equipo
     * @return Venta
     */
    public function setEquipo(\Crm\EquipoBundle\Entity\Equipo $equipo = null)
    {
        $this->equipo = $equipo;

        return $this;
    }
    /**
     * @var \Crm\ClienteBundle\Entity\Cliente
     */
    private $cliente;


    /**
     * Set cliente
     *
     * @param \Crm\ClienteBundle\Entity\Cliente $cliente
     * @return Venta
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
