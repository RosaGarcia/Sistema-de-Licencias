<?php

namespace Crm\ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 */
class Cliente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $razonSocial;

    /**
     * @var string
     */
    private $rfc;

    /**
     * @var string
     */
    private $telefono1;

    /**
     * @var integer
     */
    private $ext1;

    /**
     * @var string
     */
    private $telefono2;

    /**
     * @var integer
     */
    private $ext2;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $paginaWeb;


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
     * Set razonSocial
     *
     * @param string $razonSocial
     * @return Cliente
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     * @return Cliente
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string 
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     * @return Cliente
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set ext1
     *
     * @param integer $ext1
     * @return Cliente
     */
    public function setExt1($ext1)
    {
        $this->ext1 = $ext1;

        return $this;
    }

    /**
     * Get ext1
     *
     * @return integer 
     */
    public function getExt1()
    {
        return $this->ext1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     * @return Cliente
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set ext2
     *
     * @param integer $ext2
     * @return Cliente
     */
    public function setExt2($ext2)
    {
        $this->ext2 = $ext2;

        return $this;
    }

    /**
     * Get ext2
     *
     * @return integer 
     */
    public function getExt2()
    {
        return $this->ext2;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set paginaWeb
     *
     * @param string $paginaWeb
     * @return Cliente
     */
    public function setPaginaWeb($paginaWeb)
    {
        $this->paginaWeb = $paginaWeb;

        return $this;
    }

    /**
     * Get paginaWeb
     *
     * @return string 
     */
    public function getPaginaWeb()
    {
        return $this->paginaWeb;
    }
    /**
     * @var \Crm\GeneralBundle\Entity\Estatus
     */
    private $estatus;


    /**
     * Set estatus
     *
     * @param \Crm\GeneralBundle\Entity\Estatus $estatus
     * @return Cliente
     */
    public function setEstatus(\Crm\GeneralBundle\Entity\Estatus $estatus = null)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return \Crm\GeneralBundle\Entity\Estatus 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionCliente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->direccionCliente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add direccionCliente
     *
     * @param \Crm\ClienteBundle\Entity\DireccionCliente $direccionCliente
     * @return Cliente
     */
    public function addDireccionCliente(\Crm\ClienteBundle\Entity\DireccionCliente $direccionCliente)
    {
        $this->direccionCliente[] = $direccionCliente;

        return $this;
    }

    /**
     * Remove direccionCliente
     *
     * @param \Crm\ClienteBundle\Entity\DireccionCliente $direccionCliente
     */
    public function removeDireccionCliente(\Crm\ClienteBundle\Entity\DireccionCliente $direccionCliente)
    {
        $this->direccionCliente->removeElement($direccionCliente);
    }

    /**
     * Get direccionCliente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDireccionCliente()
    {
        return $this->direccionCliente;
    }

      public function __toString()
    {
        return $this->razonSocial;
    }
}
