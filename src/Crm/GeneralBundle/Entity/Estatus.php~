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
}
