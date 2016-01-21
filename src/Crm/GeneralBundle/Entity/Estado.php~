<?php

namespace Crm\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 */
class Estado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreEstado;


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
     * Set nombreEstado
     *
     * @param string $nombreEstado
     * @return Estado
     */
    public function setNombreEstado($nombreEstado)
    {
        $this->nombreEstado = $nombreEstado;

        return $this;
    }

    /**
     * Get nombreEstado
     *
     * @return string 
     */
    public function getNombreEstado()
    {
        return $this->nombreEstado;
    }
    /**
     * @var \Crm\GeneralBundle\Entity\Pais
     */
    private $pais;


    /**
     * Set pais
     *
     * @param \Crm\GeneralBundle\Entity\Pais $pais
     * @return Estado
     */
    public function setPais(\Crm\GeneralBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \Crm\GeneralBundle\Entity\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }
    public function __toString()
    {
        return $this->nombreEstado;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionCliente;


    /**
     * Add direccionCliente
     *
     * @param \Crm\ClienteBundle\Entity\DireccionCliente $direccionCliente
     * @return Estado
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
    private $direcionEmpresa;


    /**
     * Add direcionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DireccionEmpresa $direcionEmpresa
     * @return Estado
     */
    public function addDirecionEmpresa(\Crm\EmpresaBundle\Entity\DireccionEmpresa $direcionEmpresa)
    {
        $this->direcionEmpresa[] = $direcionEmpresa;

        return $this;
    }

    /**
     * Remove direcionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DireccionEmpresa $direcionEmpresa
     */
    public function removeDirecionEmpresa(\Crm\EmpresaBundle\Entity\DireccionEmpresa $direcionEmpresa)
    {
        $this->direcionEmpresa->removeElement($direcionEmpresa);
    }

    /**
     * Get direcionEmpresa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDirecionEmpresa()
    {
        return $this->direcionEmpresa;
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
     * @return Estado
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
     * @return Estado
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
     * @return Estado
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
    private $direccionEmpresa;


    /**
     * Add direccionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa
     * @return Estado
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
    private $municipio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->municipio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->direccionCliente = new \Doctrine\Common\Collections\ArrayCollection();
        $this->direccionEmpresa = new \Doctrine\Common\Collections\ArrayCollection();
        $this->direccionFabricante = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ubicacion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->direccionPersonal = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add municipio
     *
     * @param \Crm\GeneralBundle\Entity\Municipio $municipio
     * @return Estado
     */
    public function addMunicipio(\Crm\GeneralBundle\Entity\Municipio $municipio)
    {
        $this->municipio[] = $municipio;

        return $this;
    }

    /**
     * Remove municipio
     *
     * @param \Crm\GeneralBundle\Entity\Municipio $municipio
     */
    public function removeMunicipio(\Crm\GeneralBundle\Entity\Municipio $municipio)
    {
        $this->municipio->removeElement($municipio);
    }

    /**
     * Get municipio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }
}
