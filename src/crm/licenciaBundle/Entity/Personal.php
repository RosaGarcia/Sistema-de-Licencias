<?php

namespace crm\licenciaBundle\Entity;

/**
 * Personal
 */
class Personal
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
    private $apePat;

    /**
     * @var string
     */
    private $apeMat;

    /**
     * @var string
     */
    private $telefono1;

    /**
     * @var string
     */
    private $telefono2;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var integer
     */
    private $idCreacion;

    /**
     * @var integer
     */
    private $idModificacion;


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
     * @return Personal
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
     * Set apePat
     *
     * @param string $apePat
     *
     * @return Personal
     */
    public function setApePat($apePat)
    {
        $this->apePat = $apePat;

        return $this;
    }

    /**
     * Get apePat
     *
     * @return string
     */
    public function getApePat()
    {
        return $this->apePat;
    }

    /**
     * Set apeMat
     *
     * @param string $apeMat
     *
     * @return Personal
     */
    public function setApeMat($apeMat)
    {
        $this->apeMat = $apeMat;

        return $this;
    }

    /**
     * Get apeMat
     *
     * @return string
     */
    public function getApeMat()
    {
        return $this->apeMat;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     *
     * @return Personal
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     *
     * @return Personal
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Personal
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Personal
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
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     *
     * @return Personal
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set idCreacion
     *
     * @param integer $idCreacion
     *
     * @return Personal
     */
    public function setIdCreacion($idCreacion)
    {
        $this->idCreacion = $idCreacion;

        return $this;
    }

    /**
     * Get idCreacion
     *
     * @return integer
     */
    public function getIdCreacion()
    {
        return $this->idCreacion;
    }

    /**
     * Set idModificacion
     *
     * @param integer $idModificacion
     *
     * @return Personal
     */
    public function setIdModificacion($idModificacion)
    {
        $this->idModificacion = $idModificacion;

        return $this;
    }

    /**
     * Get idModificacion
     *
     * @return integer
     */
    public function getIdModificacion()
    {
        return $this->idModificacion;
    }
}

