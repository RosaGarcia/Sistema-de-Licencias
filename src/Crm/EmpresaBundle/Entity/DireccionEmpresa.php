<?php

namespace Crm\EmpresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DireccionEmpresa
 */
class DireccionEmpresa
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
     * @var integer
     */
    private $codigoPostal;


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
     * @return DireccionEmpresa
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
     * @return DireccionEmpresa
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
     * @return DireccionEmpresa
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
     * @return DireccionEmpresa
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
     * @param integer $codigoPostal
     * @return DireccionEmpresa
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return integer 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }
    /**
     * @var \Crm\EmpresaBundle\Entity\Empresa
     */
    private $empresa;


    /**
     * Set empresa
     *
     * @param \Crm\EmpresaBundle\Entity\Empresa $empresa
     * @return DireccionEmpresa
     */
    public function setEmpresa(\Crm\EmpresaBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \Crm\EmpresaBundle\Entity\Empresa 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
    /**
     * @var \Crm\GeneralBundle\Entity\Localidad
     */
    private $localidad;

    /**
     * @var \Crm\GenaralBundle\Entity\Estado
     */
    private $estado;

    /**
     * @var \Crm\GeneralBundle\Entity\Pais
     */
    private $pais;


    /**
     * Set localidad
     *
     * @param \Crm\GeneralBundle\Entity\Localidad $localidad
     * @return DireccionEmpresa
     */
    public function setLocalidad(\Crm\GeneralBundle\Entity\Localidad $localidad = null)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return \Crm\GeneralBundle\Entity\Localidad 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set estado
     *
     * @param \Crm\GenaralBundle\Entity\Estado $estado
     * @return DireccionEmpresa
     */
    public function setEstado(\Crm\GenaralBundle\Entity\Estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \Crm\GenaralBundle\Entity\Estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set pais
     *
     * @param \Crm\GeneralBundle\Entity\Pais $pais
     * @return DireccionEmpresa
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
}
