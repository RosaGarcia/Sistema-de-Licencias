<?php

namespace Crm\CaracteristicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VersionSoftware
 */
class VersionSoftware
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $versionSoftware;


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
     * Set versionSoftware
     *
     * @param string $versionSoftware
     * @return Version_software
     */
    public function setVersionSoftware($versionSoftware)
    {
        $this->versionSoftware = $versionSoftware;

        return $this;
    }

    /**
     * Get versionSoftware
     *
     * @return string 
     */
    public function getVersionSoftware()
    {
        return $this->versionSoftware;
    }

     public function __toString()
    {
        return $this->versionSoftware;
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
     * @return VersionSoftware
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
}
