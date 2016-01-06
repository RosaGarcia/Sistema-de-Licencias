<?php

namespace Crm\FabricanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DireccionFabricante
 */
class DireccionFabricante
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
     * @var string
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
     * @return DireccionFabricante
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
     * @return DireccionFabricante
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
     * @return DireccionFabricante
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
     * @return DireccionFabricante
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
     * @return DireccionFabricante
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

<<<<<<< HEAD
     /**
=======
    /**
>>>>>>> proyecto
     * Set localidad
     *
     * @param string $localidad
     * @return DireccionFabricante
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
     * @var \Crm\FabricanteBundle\Entity\Fabricante
     */
    private $fabricante;


    /**
     * Set fabricante
     *
     * @param \Crm\FabricanteBundle\Entity\Fabricante $fabricante
     * @return DireccionFabricante
     */
    public function setFabricante(\Crm\FabricanteBundle\Entity\Fabricante $fabricante = null)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get fabricante
     *
     * @return \Crm\FabricanteBundle\Entity\Fabricante 
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }
<<<<<<< HEAD
    
=======
>>>>>>> proyecto

    /**
     * @var \Crm\GeneralBundle\Entity\Estado
     */
    private $estado;

    /**
     * @var \Crm\GeneralBundle\Entity\Pais
     */
    private $pais;

<<<<<<< HEAD

=======
>>>>>>> proyecto
    /**
     * Set estado
     *
     * @param \Crm\GeneralBundle\Entity\Estado $estado
     * @return DireccionFabricante
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
     * @return DireccionFabricante
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
     * @return DireccionFabricante
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
