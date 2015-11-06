<?php

namespace Crm\EquipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Procedencia
 */
class Procedencia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaLlegada;

    /**
     * @var string
     */
    private $numeroSerieFabricante;

    /**
     * @var string
     */
    private $numeroSerieWarriors;

    /**
     * @var \DateTime
     */
    private $fechaSalida;


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
     * Set fechaLlegada
     *
     * @param \DateTime $fechaLlegada
     * @return Procedencia
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

    /**
     * Set numeroSerieFabricante
     *
     * @param string $numeroSerieFabricante
     * @return Procedencia
     */
    public function setNumeroSerieFabricante($numeroSerieFabricante)
    {
        $this->numeroSerieFabricante = $numeroSerieFabricante;

        return $this;
    }

    /**
     * Get numeroSerieFabricante
     *
     * @return string 
     */
    public function getNumeroSerieFabricante()
    {
        return $this->numeroSerieFabricante;
    }

    /**
     * Set numeroSerieWarriors
     *
     * @param string $numeroSerieWarriors
     * @return Procedencia
     */
    public function setNumeroSerieWarriors($numeroSerieWarriors)
    {
        $this->numeroSerieWarriors = $numeroSerieWarriors;

        return $this;
    }

    /**
     * Get numeroSerieWarriors
     *
     * @return string 
     */
    public function getNumeroSerieWarriors()
    {
        return $this->numeroSerieWarriors;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     * @return Procedencia
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }
    /**
     * @var \Crm\FabricanteBundle\Entity\Fabricante
     */
    private $fabricante;


    /**
     * Set fabricante
     *
     * @param \Crm\FabricanteBundle\Entity\Fabricante $fabricante
     * @return Procedencia
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
}
