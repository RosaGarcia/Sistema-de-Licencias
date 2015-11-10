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
}
