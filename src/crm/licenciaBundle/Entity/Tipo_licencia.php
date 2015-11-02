<?php

namespace crm\licenciaBundle\Entity;

/**
 * Tipo_licencia
 */
class Tipo_licencia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $precio;

    /**
     * @var integer
     */
    private $meses;


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
     * Set precio
     *
     * @param integer $precio
     *
     * @return Tipo_licencia
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set meses
     *
     * @param integer $meses
     *
     * @return Tipo_licencia
     */
    public function setMeses($meses)
    {
        $this->meses = $meses;

        return $this;
    }

    /**
     * Get meses
     *
     * @return integer
     */
    public function getMeses()
    {
        return $this->meses;
    }
}

