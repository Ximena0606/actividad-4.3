<?php
require_once 'UsuarioCorreo.php';

class Docente extends UsuarioCorreo {
    private $gradoAcademico;
    private $antiguedad;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $gradoAcademico, $antiguedad) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->gradoAcademico = $gradoAcademico;
        $this->antiguedad = $antiguedad;
    }

    public function setGradoAcademico($nuevoGrado) {
        $this->gradoAcademico = $nuevoGrado;
    }

    public function setAntiguedad($nuevaAntiguedad) {
        $this->antiguedad = $nuevaAntiguedad;
    }

    public function getGradoAcademico() {
        return $this->gradoAcademico;
    }

    public function getAntiguedad() {
        return $this->antiguedad;
    }

    // Implementación del método abstracto
    public function obtenerNombreCompleto() {
        return "{$this->gradoAcademico} {$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }
}
?>
