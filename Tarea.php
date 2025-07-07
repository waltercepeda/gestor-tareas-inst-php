<?php
// Clase que representa una Tarea con fecha, título, descripción y estado
class Tarea {
    public $fechaInicio;
    public $titulo;
    public $descripcion;
    public $estado;

    public function __construct($fechaInicio, $titulo, $descripcion, $estado = "Sin asignar") {
        $this->fechaInicio = $fechaInicio;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
    }
}
?>
