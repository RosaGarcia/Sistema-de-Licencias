<?php

namespace Crm\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 */
class Localidad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreLocalidad;


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
     * Set nombreLocalidad
     *
     * @param string $nombreLocalidad
     * @return Localidad
     */
    public function setNombreLocalidad($nombreLocalidad)
    {
        $this->nombreLocalidad = $nombreLocalidad;

        return $this;
    }

    /**
     * Get nombreLocalidad
     *
     * @return string 
     */
    public function getNombreLocalidad()
    {
        return $this->nombreLocalidad;
    }
    /**
     * @var \Crm\GeneralBundle\Entity\Estado
     */
    private $estado;


    /**
     * Set estado
     *
     * @param \Crm\GeneralBundle\Entity\Estado $estado
     * @return Localidad
     */
    public function setEstado(\Crm\GeneralBundle\Entity\Estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \Crm\GeneralBundle\Entity\Estado 
     */
    public function getEstado()
    {
        return $this->estado;
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
     * @return Localidad
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
        return $this->nombreLocalidad;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direcionEmpres;


    /**
     * Add direcionEmpres
     *
     * @param \Crm\EmpresaBundle\Entity\DirecionEmpres $direcionEmpres
     * @return Localidad
     */
    public function addDirecionEmpre(\Crm\EmpresaBundle\Entity\DirecionEmpres $direcionEmpres)
    {
        $this->direcionEmpres[] = $direcionEmpres;

        return $this;
    }

    /**
     * Remove direcionEmpres
     *
     * @param \Crm\EmpresaBundle\Entity\DirecionEmpres $direcionEmpres
     */
    public function removeDirecionEmpre(\Crm\EmpresaBundle\Entity\DirecionEmpres $direcionEmpres)
    {
        $this->direcionEmpres->removeElement($direcionEmpres);
    }

    /**
     * Get direcionEmpres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDirecionEmpres()
    {
        return $this->direcionEmpres;
    }
}
