<?php

class Asociado
{
    const RUTA_IMAGENES_ASOCIADOS = 'images/index/asociados/';

    private $nombre;
    private $logo;
    private $descripcion;

    //constructor
    public function __construct(string $nombre, string $logo, string $descripcion)
    {
        $this->nombre = $nombre;
        $this->logo = $logo;
        $this->descripcion = $descripcion;
    }

    //getters
    public function getNombre(): string
    {
        return $this->nombre;
    }
 
    
    public function getLogo(): string
    {
        return $this->logo;
    }
  
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }
    

    //setters
    public function setNombre(string $nombre): Asociado
    {
        $this->nombre = $nombre;
        return $this;
    }
 
    
    public function setLogo(string $logo): Asociado
    {
        $this->logo = $logo;
        return $this;
    }
   
    public function setDescripcion(string $descripcion): Asociado
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function getUrlAsociados()
    {
        return self::RUTA_IMAGENES_ASOCIADOS . $this->getLogo();
    }

}

?>