<?php

namespace Crm\EmpresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 */
class Empresa
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $razonSocial;

    /**
     * @var string
     */
    private $rcf;

    /**
     * @var string
     */
    private $telefono1;

    /**
     * @var integer
     */
    private $ext1;

    /**
     * @var string
     */
    private $telefono2;

    /**
     * @var integer
     */
    private $ext2;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $paginaWeb;


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
     * Set razonSocial
     *
     * @param string $razonSocial
     * @return Empresa
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set rcf
     *
     * @param string $rcf
     * @return Empresa
     */
    public function setRcf($rcf)
    {
        $this->rcf = $rcf;

        return $this;
    }

    /**
     * Get rcf
     *
     * @return string 
     */
    public function getRcf()
    {
        return $this->rcf;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     * @return Empresa
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
     * Set ext1
     *
     * @param integer $ext1
     * @return Empresa
     */
    public function setExt1($ext1)
    {
        $this->ext1 = $ext1;

        return $this;
    }

    /**
     * Get ext1
     *
     * @return integer 
     */
    public function getExt1()
    {
        return $this->ext1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     * @return Empresa
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
     * Set ext2
     *
     * @param integer $ext2
     * @return Empresa
     */
    public function setExt2($ext2)
    {
        $this->ext2 = $ext2;

        return $this;
    }

    /**
     * Get ext2
     *
     * @return integer 
     */
    public function getExt2()
    {
        return $this->ext2;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Empresa
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
     * Set paginaWeb
     *
     * @param string $paginaWeb
     * @return Empresa
     */
    public function setPaginaWeb($paginaWeb)
    {
        $this->paginaWeb = $paginaWeb;

        return $this;
    }

    /**
     * Get paginaWeb
     *
     * @return string 
     */
    public function getPaginaWeb()
    {
        return $this->paginaWeb;
    }
    /**
     * @var \Crm\GeneralBundle\Entity\Estatus
     */
    private $estatus;


    /**
     * Set estatus
     *
     * @param \Crm\GeneralBundle\Entity\Estatus $estatus
     * @return Empresa
     */
    public function setEstatus(\Crm\GeneralBundle\Entity\Estatus $estatus = null)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return \Crm\GeneralBundle\Entity\Estatus 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccionEmpresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->direccionEmpresa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add direccionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa
     * @return Empresa
     */
    public function addDireccionEmpresa(\Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa)
    {
        $this->direccionEmpresa[] = $direccionEmpresa;

        return $this;
    }

    /**
     * Remove direccionEmpresa
     *
     * @param \Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa
     */
    public function removeDireccionEmpresa(\Crm\EmpresaBundle\Entity\DireccionEmpresa $direccionEmpresa)
    {
        $this->direccionEmpresa->removeElement($direccionEmpresa);
    }

    /**
     * Get direccionEmpresa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDireccionEmpresa()
    {
        return $this->direccionEmpresa;
    }

     public function __toString()
    {
        return $this->razonSocial;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personal;


    /**
     * Add personal
     *
     * @param \Crm\PersonalBundle\Entity\Personal $personal
     * @return Empresa
     */
    public function addPersonal(\Crm\PersonalBundle\Entity\Personal $personal)
    {
        $this->personal[] = $personal;

        return $this;
    }

    /**
     * Remove personal
     *
     * @param \Crm\PersonalBundle\Entity\Personal $personal
     */
    public function removePersonal(\Crm\PersonalBundle\Entity\Personal $personal)
    {
        $this->personal->removeElement($personal);
    }

    /**
     * Get personal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonal()
    {
        return $this->personal;
    }
}
