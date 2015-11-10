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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $equipo;


    /**
     * Add equipo
     *
     * @param \Crm\EquipoBundle\Entity\Equipo $equipo
     * @return Venta
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
}
