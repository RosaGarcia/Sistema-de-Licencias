<?php

namespace Crm\ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DireccionCliente
 */
class DireccionCliente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var string
     */
    private $numeroExt;

    /**
     * @var string
     */
    private $numeroInt;

    /**
     * @var string
     */
    private $colonia;

    /**
     * @var string
     */
    private $codigoPostal;
    /**
     * @var integer
     */
    private $localidad;

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
     * Set calle
     *
     * @param string $calle
     * @return DireccionCliente
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numeroExt
     *
     * @param string $numeroExt
     * @return DireccionCliente
     */
    public function setNumeroExt($numeroExt)
    {
        $this->numeroExt = $numeroExt;

        return $this;
    }

    /**
     * Get numeroExt
     *
     * @return string 
     */
    public function getNumeroExt()
    {
        return $this->numeroExt;
    }

    /**
     * Set numeroInt
     *
     * @param string $numeroInt
     * @return DireccionCliente
     */
    public function setNumeroInt($numeroInt)
    {
        $this->numeroInt = $numeroInt;

        return $this;
    }

    /**
     * Get numeroInt
     *
     * @return string 
     */
    public function getNumeroInt()
    {
        return $this->numeroInt;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     * @return DireccionCliente
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string 
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     * @return DireccionCliente
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }


     /**
     * Set localidad
     *
     * @param string $localidad
     * @return DireccionCliente
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }
    /**
     * @var \Crm\ClienteBundle\Entity\Cliente
     */
    private $cliente;


    /**
     * Set cliente
     *
     * @param \Crm\ClienteBundle\Entity\Cliente $cliente
     * @return DireccionCliente
     */
    public function setCliente(\Crm\ClienteBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Crm\ClienteBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
    /**
     * @var \Crm\GeneralBundle\Entity\Estado
     */
    private $estado;

    /**
     * @var \Crm\GeneralBundle\Entity\Pais
     */
    private $pais;

    /**
     * Set estado
     *
     * @param \Crm\GeneralBundle\Entity\Estado $estado
     * @return DireccionCliente
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
     * Set pais
     *
     * @param \Crm\GeneralBundle\Entity\Pais $pais
     * @return DireccionCliente
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
     * @var \Crm\GeneralBundle\Entity\Municipio
     */
    private $municipio;


    /**
     * Set municipio
     *
     * @param \Crm\GeneralBundle\Entity\Municipio $municipio
     * @return DireccionCliente
     */
    public function setMunicipio(\Crm\GeneralBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return \Crm\GeneralBundle\Entity\Municipio 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }
}
