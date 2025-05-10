<?php
require_once 'UsuarioCorreo.php';

class Alumno extends UsuarioCorreo {
    private $promedio;
    private $semestre;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $promedio, $semestre) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->promedio = $promedio;
        $this->semestre = $semestre;
    }

    public function setPromedio($nuevoPromedio) {
        $this->promedio = $nuevoPromedio;
    }

    public function setSemestre($nuevoSemestre) {
        $this->semestre = $nuevoSemestre;
    }

    public function getPromedio() {
        return $this->promedio;
    }

    public function getSemestre() {
        return $this->semestre;
    }

    // Implementación correcta del método abstracto
    public function obtenerNombreCompleto() {
        return "Alumno {$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }
}
?>
