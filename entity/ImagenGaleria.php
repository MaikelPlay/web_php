<?php   
class ImagenGaleria
{
    /**
     * @var string
     */
    private $nombre;
    /**
     * @var string
     */
    private $descripcion;
    /**
     * @var int
     */
    private $numVisualizaciones;
    /**
     * @var int
     */
    private $numLikes;
    /**
     * @var int
     */
    private $numDescargas;

    const RUTA_IMAGENES_PORTFOLIO = 'images/index/portfolio/';
    const RUTA_IMAGENES_GALERIA ='images/index/gallery/';

    //Constructor ----------------------------------------------------------------
    public function __construct(string $nombre, string $descripcion, int $numVisualizaciones=0, int $numLikes=0, int $numDescargas=0)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->numVisualizaciones = $numVisualizaciones;
        $this->numLikes = $numLikes;
        $this->numDescargas = $numDescargas;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getDescripcion();
    }


    //Getters y Setters ----------------------------------------------------------
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /** 
    * @param string $nombre
    * @return ImagenGaleria
    * **/
    public function setNombre(string $nombre): ImagenGaleria//devuelve el objeto
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     **/
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return ImagenGaleria
     */
    public function setDescripcion(string $descripcion):ImagenGaleria
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumVisualizaciones(): int
    {
        return $this->numVisualizaciones;
    }
    /**
     * @param int $numVisualizaciones
     * @return ImagenGaleria
     */
    public function setNumVisualizaciones(int $numVisualizaciones): ImagenGaleria
    {
        $this->numVisualizaciones = $numVisualizaciones;
        return $this;
    }
    /**
     * @return int
     */

    public function getNumLikes(): int
    {
        return $this->numLikes;
    }
    /**
     * @param int $numLikes
     * @return ImagenGaleria
     */

    public function setNumLikes(int $numLikes): ImagenGaleria
    {
        $this->numLikes = $numLikes;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumDownloads(): int
    {
        return $this->numDescargas;
    }
    
    /**
     * @param int $numDescargas
     * @return ImagenGaleria
     */
    public function setNumDownloads(int $numDescargas): ImagenGaleria
    {
        $this->numDescargas = $numDescargas;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlPortfolio(): string
    {
        return self::RUTA_IMAGENES_PORTFOLIO . $this->getNombre();
    }

    /**
     * @return string
     */
    public function getUrlGallery(): string
    {
        return self::RUTA_IMAGENES_GALERIA . $this->getNombre();
    }
}
?>