<?php

namespace crm\licenciaBundle\Entity;

/**
 * Estado
 */
class Estado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreEstado;


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
     * Set nombreEstado
     *
     * @param string $nombreEstado
     *
     * @return Estado
     */
    public function setNombreEstado($nombreEstado)
    {
        $this->nombreEstado = $nombreEstado;

        return $this;
    }

    /**
     * Get nombreEstado
     *
     * @return string
     */
    public function getNombreEstado()
    {
        return $this->nombreEstado;
    }
}

