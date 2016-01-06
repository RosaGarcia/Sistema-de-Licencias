<?php

namespace Crm\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 */
class Municipio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $municipio;


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
     * Set municipio
     *
     * @param string $municipio
     * @return Municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionCliente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionEmpresa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionFabricante;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ubicacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionPersonal;

    /**
     * @var \Crm\GeneralBundle\Entity\Estado
     */
    private $estado;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->direccionCliente = new \Doctrine\Common\Collections\ArrayCollection();
        $this->direccionEmpresa = new \Doctrine\Common\Collections\ArrayCollection();
        $this->direccionFabricante = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ubicacion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->direccionPersonal = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add direccionCliente
     *
     * @param \Crm\ClienteBundle\Entity\DireccionCliente $direccionCliente
     * @return Municipio
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

    /**
     * Add direccionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa
     * @return Municipio
     */
    public function addDireccionEmpresa(\Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa)
    {
        $this->direccionEmpresa[] = $direccionEmpresa;

        return $this;
    }

    /**
     * Remove direccionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa
     */
    public function removeDireccionEmpresa(\Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa)
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

    /**
     * Add direccionFabricante
     *
     * @param \Crm\FabricanteBundle\Entity\DireccionFabricante $direccionFabricante
     * @return Municipio
     */
    public function addDireccionFabricante(\Crm\FabricanteBundle\Entity\DireccionFabricante $direccionFabricante)
    {
        $this->direccionFabricante[] = $direccionFabricante;

        return $this;
    }

    /**
     * Remove direccionFabricante
     *
     * @param \Crm\FabricanteBundle\Entity\DireccionFabricante $direccionFabricante
     */
    public function removeDireccionFabricante(\Crm\FabricanteBundle\Entity\DireccionFabricante $direccionFabricante)
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
     * Add ubicacion
     *
     * @param \Crm\EquipoBundle\Entity\Ubicacion $ubicacion
     * @return Municipio
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
     * @return Municipio
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
     * Set estado
     *
     * @param \Crm\GeneralBundle\Entity\Estado $estado
     * @return Municipio
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

    public function __toString()
    {
        return $this->municipio;
    }
}
