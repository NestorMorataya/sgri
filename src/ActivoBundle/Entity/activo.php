<?php

namespace ActivoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;


/**
 * activo
 */
class activo
{
    /**
     * @var int
     *
     */
    private $id;
    /**
    * @var string $codigo
    *
    * @ORM\Column(name="codigo", type="string", length=50)
    * 
    */
    private $codigo;
    /**
     * @var string
     */
    private $nombre;
    /**
     * @var string
     */
    private $descripcion;
    /**
     * @var string
     */
    private $unidadResponsable;
    /**
     * @var string
     */
    private $personaResponsable;
    /**
     * @var string
     */
    private $ubicacion;
    /**
     * @var int
     */
    private $cantidad;
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
     * Set codigo
     *
     * @param string $codigo
     * @return codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */

    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return activo
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return activo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set unidadResponsable
     *
     * @param string $unidadResponsable
     * @return activo
     */
    public function setUnidadResponsable($unidadResponsable)
    {
        $this->unidadResponsable = $unidadResponsable;
    
        return $this;
    }

    /**
     * Get unidadResponsable
     *
     * @return string 
     */
    public function getUnidadResponsable()
    {
        return $this->unidadResponsable;
    }

    /**
     * Set personaResponsable
     *
     * @param string $personaResponsable
     * @return activo
     */
    public function setPersonaResponsable($personaResponsable)
    {
        $this->personaResponsable = $personaResponsable;
    
        return $this;
    }

    /**
     * Get personaResponsable
     *
     * @return string 
     */
    public function getPersonaResponsable()
    {
        return $this->personaResponsable;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return activo
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    
        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return activo
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
