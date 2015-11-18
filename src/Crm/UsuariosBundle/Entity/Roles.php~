<?php

namespace Crm\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 */
class Roles
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $roles;


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
     * Set roles
     *
     * @param string $roles
     * @return Roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string 
     */
    public function getRoles()
    {
        return $this->roles;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuarios;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add usuarios
     *
     * @param \Crm\UsuariosBundle\Entity\Usuarios $usuarios
     * @return Roles
     */
    public function addUsuario(\Crm\UsuariosBundle\Entity\Usuarios $usuarios)
    {
        $this->usuarios[] = $usuarios;

        return $this;
    }

    /**
     * Remove usuarios
     *
     * @param \Crm\UsuariosBundle\Entity\Usuarios $usuarios
     */
    public function removeUsuario(\Crm\UsuariosBundle\Entity\Usuarios $usuarios)
    {
        $this->usuarios->removeElement($usuarios);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

    public function __toString()
    {
        return $this->roles;
    }
}
