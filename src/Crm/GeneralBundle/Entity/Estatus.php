<?php

namespace Crm\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estatus
 */
class Estatus
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $estatus;


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
     * Set estatus
     *
     * @param string $estatus
     * @return Estatus
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return string 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

     public function __toString()
    {
        return $this->estatus;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cliente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cliente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cliente
     *
     * @param \Crm\ClienteBundle\Entity\Cliente $cliente
     * @return Estatus
     */
    public function addCliente(\Crm\ClienteBundle\Entity\Cliente $cliente)
    {
        $this->cliente[] = $cliente;

        return $this;
    }

    /**
     * Remove cliente
     *
     * @param \Crm\ClienteBundle\Entity\Cliente $cliente
     */
    public function removeCliente(\Crm\ClienteBundle\Entity\Cliente $cliente)
    {
        $this->cliente->removeElement($cliente);
    }

    /**
     * Get cliente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $empresa;


    /**
     * Add empresa
     *
     * @param \Crm\EmpresaBundle\Entity\Empresa $empresa
     * @return Estatus
     */
    public function addEmpresa(\Crm\EmpresaBundle\Entity\Empresa $empresa)
    {
        $this->empresa[] = $empresa;

        return $this;
    }

    /**
     * Remove empresa
     *
     * @param \Crm\EmpresaBundle\Entity\Empresa $empresa
     */
    public function removeEmpresa(\Crm\EmpresaBundle\Entity\Empresa $empresa)
    {
        $this->empresa->removeElement($empresa);
    }

    /**
     * Get empresa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $equipo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fabricante;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personal;


    /**
     * Add equipo
     *
     * @param \Crm\EquipoBundle\Entity\Equipo $equipo
     * @return Estatus
     */
    public function addEquipo(\Crm\EquipoBundle\Entity\Equipo $equipo)
    {
        $this->equipo[] = $equipo;

        return $this;
    }

    /**
     * Remove equipo
     *
     * @param \Crm\EquipoBundle\Entity\Equipo $equipo
     */
    public function removeEquipo(\Crm\EquipoBundle\Entity\Equipo $equipo)
    {
        $this->equipo->removeElement($equipo);
    }

    /**
     * Get equipo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * Add fabricante
     *
     * @param \Crm\FabricanteBundle\Entity\Fabricante $fabricante
     * @return Estatus
     */
    public function addFabricante(\Crm\FabricanteBundle\Entity\Fabricante $fabricante)
    {
        $this->fabricante[] = $fabricante;

        return $this;
    }

    /**
     * Remove fabricante
     *
     * @param \Crm\FabricanteBundle\Entity\Fabricante $fabricante
     */
    public function removeFabricante(\Crm\FabricanteBundle\Entity\Fabricante $fabricante)
    {
        $this->fabricante->removeElement($fabricante);
    }

    /**
     * Get fabricante
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Add personal
     *
     * @param \Crm\PersonalBundle\Entity\Personal $personal
     * @return Estatus
     */
    public function addPersonal(\Crm\PersonalBundle\Entity\Personal $personal)
    {
        $this->personal[] = $personal;

        return $this;
    }

    /**
     * Remove personal
     *
     * @param \Crm\PersonalBundle\Entity\Personal $personal
     */
    public function removePersonal(\Crm\PersonalBundle\Entity\Personal $personal)
    {
        $this->personal->removeElement($personal);
    }

    /**
     * Get personal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonal()
    {
        return $this->personal;
    }
}
