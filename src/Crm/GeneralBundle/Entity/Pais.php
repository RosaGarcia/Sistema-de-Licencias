<?php

namespace Crm\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 */
class Pais
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombrePais;


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
     * Set nombrePais
     *
     * @param string $nombrePais
     * @return Pais
     */
    public function setNombrePais($nombrePais)
    {
        $this->nombrePais = $nombrePais;

        return $this;
    }

    /**
     * Get nombrePais
     *
     * @return string 
     */
    public function getNombrePais()
    {
        return $this->nombrePais;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $estado;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estado = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add estado
     *
     * @param \Crm\GeneralBundle\Entity\Estado $estado
     * @return Pais
     */
    public function addEstado(\Crm\GeneralBundle\Entity\Estado $estado)
    {
        $this->estado[] = $estado;

        return $this;
    }

    /**
     * Remove estado
     *
     * @param \Crm\GeneralBundle\Entity\Estado $estado
     */
    public function removeEstado(\Crm\GeneralBundle\Entity\Estado $estado)
    {
        $this->estado->removeElement($estado);
    }

    /**
     * Get estado
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    public function __toString()
    {
        return $this->nombrePais;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionCliente;


    /**
     * Add direccionCliente
     *
     * @param \Crm\ClienteBundle\Entity\DireccionCliente $direccionCliente
     * @return Pais
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionEmpresa;


    /**
     * Add direccionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa
     * @return Pais
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
     * Add direccionFabricante
     *
     * @param \Crm\FabricanteBundle\Entity\DireccionFabricante $direccionFabricante
     * @return Pais
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
     * @return Pais
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
     * @return Pais
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
}
