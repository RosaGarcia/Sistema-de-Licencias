<?php

namespace Crm\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 */
class Producto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $termino;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set termino
     *
     * @param string $termino
     * @return Producto
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;

        return $this;
    }

    /**
     * Get termino
     *
     * @return string 
     */
    public function getTermino()
    {
        return $this->termino;
    }
    /**
     * @var \Crm\CaracteristicasBundle\Entity\ModeloEquipo
     */
    private $modeloEquipo;


    /**
     * Set modeloEquipo
     *
     * @param \Crm\CaracteristicasBundle\Entity\ModeloEquipo $modeloEquipo
     * @return Producto
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
}
