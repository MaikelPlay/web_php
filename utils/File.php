<?php
require_once __DIR__ . '/../exceptions/FileException.php';


class File
{
    private $file;
    private $fileName;

    /**
     * @param string $fileName
     * @param array $arrTypes
     * @throws FileException
     */

    public function __construct(string $fileName, array $arrTypes)
    {
        $this->file = $_FILES[$fileName];
        $this->fileName = ''; 

        if (!isset($this->file))
        {
            throw new FileException('No se ha subido ningún archivo');
        }

        if ($this->file['error'] !== UPLOAD_ERR_OK)
        {
            switch ($this->file['error'])
            {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:// Error de tamaño
                    throw new FileException('El archivo es demasiado grande');
                    break;
                case UPLOAD_ERR_PARTIAL:// Error de archivo incompleto
                    throw new FileException('El archivo no se ha subido completo');
                    break;
                case UPLOAD_ERR_NO_FILE:// Error de archivo no subido
                    throw new Exception('No se ha subido ningún archivo');
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    throw new Exception('Falta carpeta temporal');
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    throw new Exception('No se puede escribir en el disco');
                    break;
                case UPLOAD_ERR_EXTENSION:
                    throw new Exception('Una extensión de PHP ha evitado la subida del archivo');
                    break;
                default:
                    throw new FileException('Error desconocido, no se ha podido subir el fichero');
                    break;
            }
        } 

        if (in_array($this->file['type'], $arrTypes) === false)
        {
            throw new FileException('Tipo de archivo no permitido');
        }
    }


    public function getFileName()
    {
        return $this->fileName;
    }

    public function saveUploadFile(string $rutaDestino)
    {
        if (is_uploaded_file($this->file['tmp_name']) === false)
        {
            throw new FileException('El archivo no se ha subido correctamente');
        }

        $this->fileName = $this->file['name'];
        $ruta = $rutaDestino . $this->fileName;

        if (is_file($ruta) === true)
        {
            $idUnico = time();
            $this->fileName = $idUnico . '_' . $this->fileName;
            $ruta = $rutaDestino . $this->fileName;
        }

        if (move_uploaded_file($this->file['tmp_name'], $ruta) === false)
        {
            throw new FileException('No se ha podido mover el archivo');
        }
    }

    public function copyFile(string $rutaOrigen, string $rutaDestino)
    {
        $origen = $rutaOrigen . $this->fileName;
        $destino = $rutaDestino . $this->fileName;

        if (is_file($origen) === false)
        {
            throw new FileException("El archivo no existe $origen");
        }

        if (is_file($destino) === true)
        {
            throw new FileException("El archivo $destino ya existe y no podemos sobrescribirlo");
        }

        if (copy($origen, $destino) === false)
        {
            throw new FileException("No se ha podido copiar el archivo $origen a $destino");
        }
    }





}

?>