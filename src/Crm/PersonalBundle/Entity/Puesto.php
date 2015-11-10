<?php

namespace Crm\PersonalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puesto
 */
class Puesto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $puesto;


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
     * Set puesto
     *
     * @param string $puesto
     * @return Puesto
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get puesto
     *
     * @return string 
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

     public function __toString()
    {
        return $this->puesto;
    }
}