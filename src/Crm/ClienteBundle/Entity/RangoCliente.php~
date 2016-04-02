<?php

namespace Crm\ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RangoCliente
 */
class RangoCliente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $rango;

    /**
     * @var integer
     */
    private $dias;


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
     * Set rango
     *
     * @param string $rango
     * @return RangoCliente
     */
    public function setRango($rango)
    {
        $this->rango = $rango;

        return $this;
    }

    /**
     * Get rango
     *
     * @return string 
     */
    public function getRango()
    {
        return $this->rango;
    }

    /**
     * Set dias
     *
     * @param integer $dias
     * @return RangoCliente
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return integer 
     */
    public function getDias()
    {
        return $this->dias;
    }

     public function __toString()
    {
        return $this->rango;
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
     * @return RangoCliente
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
