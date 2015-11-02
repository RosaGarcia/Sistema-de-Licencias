<?php

namespace crm\licenciaBundle\Entity;

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
    private $terminoProducto;


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
     *
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
     * Set terminoProducto
     *
     * @param string $terminoProducto
     *
     * @return Producto
     */
    public function setTerminoProducto($terminoProducto)
    {
        $this->terminoProducto = $terminoProducto;

        return $this;
    }

    /**
     * Get terminoProducto
     *
     * @return string
     */
    public function getTerminoProducto()
    {
        return $this->terminoProducto;
    }
}

