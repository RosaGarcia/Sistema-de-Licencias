<?php

namespace Crm\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarios
 */
class Comentarios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $comentario;

    /**
     * @var integer
     */
    private $usuarioCreo;

    /**
     * @var \DateTime
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
     * Set comentario
     *
     * @param string $comentario
     * @return Comentarios
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set usuarioCreo
     *
     * @param integer $usuarioCreo
     * @return Comentarios
     */
    public function setUsuarioCreo($usuarioCreo)
    {
        $this->usuarioCreo = $usuarioCreo;

        return $this;
    }

    /**
     * Get usuarioCreo
     *
     * @return integer 
     */
    public function getUsuarioCreo()
    {
        return $this->usuarioCreo;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Comentarios
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
     * @var \Crm\TicketBundle\Entity\Ticket
     */
    private $ticket;


    /**
     * Set ticket
     *
     * @param \Crm\TicketBundle\Entity\Ticket $ticket
     * @return Comentarios
     */
    public function setTicket(\Crm\TicketBundle\Entity\Ticket $ticket = null)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \Crm\TicketBundle\Entity\Ticket 
     */
    public function getTicket()
    {
        return $this->ticket;
    }
}
