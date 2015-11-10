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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direcionFabricante;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ubicacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionPersonal;


    /**
     * Add direcionFabricante
     *
     * @param \Crm\FabricanteBundle\Entity\DirecionFabricante $direcionFabricante
     * @return Localidad
     */
    public function addDirecionFabricante(\Crm\FabricanteBundle\Entity\DirecionFabricante $direcionFabricante)
    {
        $this->direcionFabricante[] = $direcionFabricante;

        return $this;
    }

    /**
     * Remove direcionFabricante
     *
     * @param \Crm\FabricanteBundle\Entity\DirecionFabricante $direcionFabricante
     */
    public function removeDirecionFabricante(\Crm\FabricanteBundle\Entity\DirecionFabricante $direcionFabricante)
    {
        $this->direcionFabricante->removeElement($direcionFabricante);
    }

    /**
     * Get direcionFabricante
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDirecionFabricante()
    {
        return $this->direcionFabricante;
    }

    /**
     * Add ubicacion
     *
     * @param \Crm\EquipoBundle\Entity\Ubicacion $ubicacion
     * @return Localidad
     */
    public function addUbicacion(\Crm\EquipoBundle\Entity\Ubicacion $ubicacion)
    {
        $this->ubicacion[] = $ubicacion;

        return $this;
    }

    /**
     * Remove ubicacion
     *
     * @param \Crm\EquipoBundle\Entity\Ubicacion $ubicacion
     */
    public function removeUbicacion(\Crm\EquipoBundle\Entity\Ubicacion $ubicacion)
    {
        $this->ubicacion->removeElement($ubicacion);
    }

    /**
     * Get ubicacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Add direccionPersonal
     *
     * @param \Crm\PersonalBundle\Entity\DireccionPersonal $direccionPersonal
     * @return Localidad
     */
    public function addDireccionPersonal(\Crm\PersonalBundle\Entity\DireccionPersonal $direccionPersonal)
    {
        $this->direccionPersonal[] = $direccionPersonal;

        return $this;
    }

    /**
     * Remove direccionPersonal
     *
     * @param \Crm\PersonalBundle\Entity\DireccionPersonal $direccionPersonal
     */
    public function removeDireccionPersonal(\Crm\PersonalBundle\Entity\DireccionPersonal $direccionPersonal)
    {
        $this->direccionPersonal->removeElement($direccionPersonal);
    }

    /**
     * Get direccionPersonal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDireccionPersonal()
    {
        return $this->direccionPersonal;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionEmpres;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionFabricante;


    /**
     * Add direccionEmpres
     *
     * @param \Crm\EmpresaBundle\Entity\DirecionEmpres $direccionEmpres
     * @return Localidad
     */
    public function addDireccionEmpre(\Crm\EmpresaBundle\Entity\DirecionEmpres $direccionEmpres)
    {
        $this->direccionEmpres[] = $direccionEmpres;

        return $this;
    }

    /**
     * Remove direccionEmpres
     *
     * @param \Crm\EmpresaBundle\Entity\DirecionEmpres $direccionEmpres
     */
    public function removeDireccionEmpre(\Crm\EmpresaBundle\Entity\DirecionEmpres $direccionEmpres)
    {
        $this->direccionEmpres->removeElement($direccionEmpres);
    }

    /**
     * Get direccionEmpres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDireccionEmpres()
    {
        return $this->direccionEmpres;
    }

    /**
     * Add direccionFabricante
     *
     * @param \Crm\FabricanteBundle\Entity\DirecionFabricante $direccionFabricante
     * @return Localidad
     */
    public function addDireccionFabricante(\Crm\FabricanteBundle\Entity\DirecionFabricante $direccionFabricante)
    {
        $this->direccionFabricante[] = $direccionFabricante;

        return $this;
    }

    /**
     * Remove direccionFabricante
     *
     * @param \Crm\FabricanteBundle\Entity\DirecionFabricante $direccionFabricante
     */
    public function removeDireccionFabricante(\Crm\FabricanteBundle\Entity\DirecionFabricante $direccionFabricante)
    {
        $this->direccionFabricante->removeElement($direccionFabricante);
    }

    /**
     * Get direccionFabricante
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDireccionFabricante()
    {
        return $this->direccionFabricante;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionEmpresa;


    /**
     * Add direccionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DirecionEmpres $direccionEmpresa
     * @return Localidad
     */
    public function addDireccionEmpresa(\Crm\EmpresaBundle\Entity\DirecionEmpres $direccionEmpresa)
    {
        $this->direccionEmpresa[] = $direccionEmpresa;

        return $this;
    }

    /**
     * Remove direccionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DirecionEmpres $direccionEmpresa
     */
    public function removeDireccionEmpresa(\Crm\EmpresaBundle\Entity\DirecionEmpres $direccionEmpresa)
    {
        $this->direccionEmpresa->removeElement($direccionEmpresa);
    }

    /**
     * Get direccionEmpresa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDireccionEmpresa()
    {
        return $this->direccionEmpresa;
    }
}
