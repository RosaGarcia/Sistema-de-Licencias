<?php

namespace Crm\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avisos
 */
class Avisos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $avisos;

    /**
     * @var integer
     */
    private $usuarioCreo;

   /**
     * @var \DateTime
     */
    private $fechaCreacion;


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
     * Set avisos
     *
     * @param string $avisos
     * @return Avisos
     */
    public function setAvisos($avisos)
    {
        $this->avisos = $avisos;

        return $this;
    }

    /**
     * Get avisos
     *
     * @return string 
     */
    public function getAvisos()
    {
        return $this->avisos;
    }

    /**
     * Set usuarioCreo
     *
     * @param integer $usuarioCreo
     *
     * @return Avisos
     */
    public function setUsuarioCreo($usuarioCreo)
    {
        $this->usuarioCreo = $usuarioCreo;

        return $this;
    }

    /**
     * Get usuarioCreo
     *
     * @return integer
     */
    public function getUsuarioCreo()
    {
        return $this->usuarioCreo;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Avisos
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }
    /**
     * @var \Crm\UsuariosBundle\Entity\Usuarios
     */
    private $usuarios;


    /**
     * Set usuarios
     *
     * @param \Crm\UsuariosBundle\Entity\Usuarios $usuarios
     * @return Avisos
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
}
