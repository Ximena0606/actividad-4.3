<?php
abstract class UsuarioCorreo {
    protected $nombre;
    protected $apellidoPaterno;
    protected $apellidoMaterno;
    protected $edad;
    protected $departamento;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento) {
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->edad = $edad;
        $this->departamento = $departamento;
    }

    public function getCorreoInstitucional() {
        return strtolower($this->nombre . '.' . $this->apellidoPaterno . '@institucion.edu.mx');
    }

    abstract public function obtenerNombreCompleto();
}
?>
