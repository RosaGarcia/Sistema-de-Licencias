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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $localidad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->localidad = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add localidad
     *
     * @param \Crm\GeneralBundle\Entity\Localidad $localidad
     * @return Estado
     */
    public function addLocalidad(\Crm\GeneralBundle\Entity\Localidad $localidad)
    {
        $this->localidad[] = $localidad;

        return $this;
    }

    /**
     * Remove localidad
     *
     * @param \Crm\GeneralBundle\Entity\Localidad $localidad
     */
    public function removeLocalidad(\Crm\GeneralBundle\Entity\Localidad $localidad)
    {
        $this->localidad->removeElement($localidad);
    }

    /**
     * Get localidad
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLocalidad()
    {
        return $this->localidad;
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
}
