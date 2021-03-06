<?php

namespace Crm\VentasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Venta
 */
class Venta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaVenta;

    /**
    * @var boolean
    **/
    private  $noDisponible;


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
     * Set noDisponible
     *
     * @param boolean $noDisponible
     * @return Venta
     */
    public function setNoDisponible($noDisponible)
    {
        $this->noDisponible = $noDisponible;

        return $this;
    }

    /**
     * Get noDisponible
     *
     * @return boolean 
     */
    public function getNoDisponible()
    {
        return $this->noDisponible;
    }

    protected $usuarios;
 
    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
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
    /**
     * @var \Crm\EquipoBundle\Entity\Equipo
     */
    private $equipo;


    /**
     * Get equipo
     *
     * @return \Crm\EquipoBundle\Entity\Equipo 
     */
    public function getEquipo()
    {
        return $this->equipo;
    }
    /**
     * @var \Crm\ProductoBundle\Entity\Termino
     */
    private $termino;


    /**
     * Set termino
     *
     * @param \Crm\ProductoBundle\Entity\Termino $termino
     * @return Venta
     */
    public function setTermino(\Crm\ProductoBundle\Entity\Termino $termino = null)
    {
        $this->termino = $termino;

        return $this;
    }

    /**
     * Get termino
     *
     * @return \Crm\ProductoBundle\Entity\Termino 
     */
    public function getTermino()
    {
        return $this->termino;
    }
}
