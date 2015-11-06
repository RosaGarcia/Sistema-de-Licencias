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
