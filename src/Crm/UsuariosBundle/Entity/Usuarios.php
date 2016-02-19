<?php

namespace Crm\UsuariosBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 */
class Usuarios implements UserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $password;

    /**
    * @var string
    **/
    private $salt;


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
     * Set userName
     *
     * @param string $userName
     * @return Usuarios
     */
    public function setuserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getuserName()
    {
        return $this->userName;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Usuarios
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    public function eraseCredentials()
    {
    }
    /**
     * @var \Crm\PersonalBundle\Entity\Personal
     */
    private $personal;


    /**
     * Set personal
     *
     * @param \Crm\PersonalBundle\Entity\Personal $personal
     * @return Usuarios
     */
    public function setPersonal(\Crm\PersonalBundle\Entity\Personal $personal = null)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * Get personal
     *
     * @return \Crm\PersonalBundle\Entity\Personal 
     */
    public function getPersonal()
    {
        return $this->personal;
    }
    /**
     * @var \Crm\UsuariosBundle\Entity\Roles
     */
    private $rol;


    /**
     * Set rol
     *
     * @param \Crm\UsuariosBundle\Entity\Roles $rol
     * @return Usuarios
     */
    public function setRol(\Crm\UsuariosBundle\Entity\Roles $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \Crm\UsuariosBundle\Entity\Roles 
     */
    public function getRol()
    {
        return $this->rol;
    }

     public function __toString()
    {
        return $this->userName;
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
     public function getRoles()
    {
        $rol = $this->rol;
        $permisos = explode(",", $rol);
        return $permisos;
    }
}
