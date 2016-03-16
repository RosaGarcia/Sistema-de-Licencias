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

    public function __toString()
    {
        return $this->nombre;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $termino;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->termino = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add termino
     *
     * @param \Crm\ProductoBundle\Entity\Termino $termino
     * @return Producto
     */
    public function addTermino(\Crm\ProductoBundle\Entity\Termino $termino)
    {
        $this->termino[] = $termino;

        return $this;
    }

    /**
     * Remove termino
     *
     * @param \Crm\ProductoBundle\Entity\Termino $termino
     */
    public function removeTermino(\Crm\ProductoBundle\Entity\Termino $termino)
    {
        $this->termino->removeElement($termino);
    }

    /**
     * Get termino
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTermino()
    {
        return $this->termino;
    }
}
