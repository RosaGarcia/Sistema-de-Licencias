<?php

namespace Crm\EquipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 */
class Equipo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $serieFabricante;

    /**
     * @var string
     */
    private $serieWarriors;

    /**
     * @var \DateTime
     */
    private $fechaLlegada;


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
     * Set serieFabricante
     *
     * @param string $serieFabricante
     * @return Equipo
     */
    public function setSerieFabricante($serieFabricante)
    {
        $this->serieFabricante = $serieFabricante;

        return $this;
    }

    /**
     * Get serieFabricante
     *
     * @return string 
     */
    public function getSerieFabricante()
    {
        return $this->serieFabricante;
    }

    /**
     * Set serieWarriors
     *
     * @param string $serieWarriors
     * @return Equipo
     */
    public function setSerieWarriors($serieWarriors)
    {
        $this->serieWarriors = $serieWarriors;

        return $this;
    }

    /**
     * Get serieWarriors
     *
     * @return string 
     */
    public function getSerieWarriors()
    {
        return $this->serieWarriors;
    }

    /**
     * Set fechaLlegada
     *
     * @param \DateTime $fechaLlegada
     * @return Equipo
     */
    public function setFechaLlegada($fechaLlegada)
    {
        $this->fechaLlegada = $fechaLlegada;

        return $this;
    }

    /**
     * Get fechaLlegada
     *
     * @return \DateTime 
     */
    public function getFechaLlegada()
    {
        return $this->fechaLlegada;
    }
    

    public function __toString()
    {
        return $this->serieWarriors;
    }
    /**
     * @var \Crm\CaracteristicasBundle\Entity\ModeloEquipo
     */
    private $modeloEquipo;

    /**
     * @var \Crm\FabricanteBundle\Entity\Fabricante
     */
    private $fabricante;


    /**
     * Set modeloEquipo
     *
     * @param \Crm\CaracteristicasBundle\Entity\ModeloEquipo $modeloEquipo
     * @return Equipo
     */
    public function setModeloEquipo(\Crm\CaracteristicasBundle\Entity\ModeloEquipo $modeloEquipo = null)
    {
        $this->modeloEquipo = $modeloEquipo;

        return $this;
    }

    /**
     * Get modeloEquipo
     *
     * @return \Crm\CaracteristicasBundle\Entity\ModeloEquipo 
     */
    public function getModeloEquipo()
    {
        return $this->modeloEquipo;
    }

    /**
     * Set fabricante
     *
     * @param \Crm\FabricanteBundle\Entity\Fabricante $fabricante
     * @return Equipo
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
    /**
     * @var \Crm\EquipoBundle\Entity\LicenciaEquipo
     */
    private $licenciaEquipo;


    /**
     * Set licenciaEquipo
     *
     * @param \Crm\EquipoBundle\Entity\LicenciaEquipo $licenciaEquipo
     * @return Equipo
     */
    public function setLicenciaEquipo(\Crm\EquipoBundle\Entity\LicenciaEquipo $licenciaEquipo = null)
    {
        $this->licenciaEquipo = $licenciaEquipo;

        return $this;
    }

    /**
     * Get licenciaEquipo
     *
     * @return \Crm\EquipoBundle\Entity\LicenciaEquipo 
     */
    public function getLicenciaEquipo()
    {
        return $this->licenciaEquipo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $caracteristicasEquipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->caracteristicasEquipo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add caracteristicasEquipo
     *
     * @param \Crm\EquipoBundle\Entity\CaracteristicasEquipo $caracteristicasEquipo
     * @return Equipo
     */
    public function addCaracteristicasEquipo(\Crm\EquipoBundle\Entity\CaracteristicasEquipo $caracteristicasEquipo)
    {
        $this->caracteristicasEquipo[] = $caracteristicasEquipo;

        return $this;
    }

    /**
     * Remove caracteristicasEquipo
     *
     * @param \Crm\EquipoBundle\Entity\CaracteristicasEquipo $caracteristicasEquipo
     */
    public function removeCaracteristicasEquipo(\Crm\EquipoBundle\Entity\CaracteristicasEquipo $caracteristicasEquipo)
    {
        $this->caracteristicasEquipo->removeElement($caracteristicasEquipo);
    }

    /**
     * Get caracteristicasEquipo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCaracteristicasEquipo()
    {
        return $this->caracteristicasEquipo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ubicacion;


    /**
     * Add ubicacion
     *
     * @param \Crm\EquipoBundle\Entity\Ubicacion $ubicacion
     * @return Equipo
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
}
