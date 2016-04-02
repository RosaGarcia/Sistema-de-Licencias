<?php

namespace Crm\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 */
class Ticket
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cola;

    /**
     * @var string
     */
    private $solicitante;

    /**
     * @var string
     */
    private $contenido;

    /**
     * @var integer
     */
    private $propietario;

    /**
     * @var integer
     */
    private $prioridad;

    /**
     * @var integer
     */
    private $fechaCreacion;


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
     * Set cola
     *
     * @param string $cola
     * @return Ticket
     */
    public function setCola($cola)
    {
        $this->cola = $cola;

        return $this;
    }

    /**
     * Get cola
     *
     * @return string 
     */
    public function getCola()
    {
        return $this->cola;
    }

    /**
     * Set solicitante
     *
     * @param string $solicitante
     * @return Ticket
     */
    public function setSolicitante($solicitante)
    {
        $this->solicitante = $solicitante;

        return $this;
    }

    /**
     * Get solicitante
     *
     * @return string 
     */
    public function getSolicitante()
    {
        return $this->solicitante;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     * @return Ticket
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set propietario
     *
     * @param integer $propietario
     * @return Ticket
     */
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;

        return $this;
    }

    /**
     * Get propietario
     *
     * @return integer 
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return Ticket
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime  $fechaCreacion
     * @return Ticket
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime  
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comentarios;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comentarios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comentarios
     *
     * @param \Crm\TicketBundle\Entity\Comentarios $comentarios
     * @return Ticket
     */
    public function addComentario(\Crm\TicketBundle\Entity\Comentarios $comentarios)
    {
        $this->comentarios[] = $comentarios;

        return $this;
    }

    /**
     * Remove comentarios
     *
     * @param \Crm\TicketBundle\Entity\Comentarios $comentarios
     */
    public function removeComentario(\Crm\TicketBundle\Entity\Comentarios $comentarios)
    {
        $this->comentarios->removeElement($comentarios);
    }

    /**
     * Get comentarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }
}
