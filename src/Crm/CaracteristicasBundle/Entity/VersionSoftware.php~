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
    private $especificacionesEquipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->especificacionesEquipo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add especificacionesEquipo
     *
     * @param \Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo
     * @return VersionSoftware
     */
    public function addEspecificacionesEquipo(\Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo)
    {
        $this->especificacionesEquipo[] = $especificacionesEquipo;

        return $this;
    }

    /**
     * Remove especificacionesEquipo
     *
     * @param \Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo
     */
    public function removeEspecificacionesEquipo(\Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo $especificacionesEquipo)
    {
        $this->especificacionesEquipo->removeElement($especificacionesEquipo);
    }

    /**
     * Get especificacionesEquipo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEspecificacionesEquipo()
    {
        return $this->especificacionesEquipo;
    }
}
