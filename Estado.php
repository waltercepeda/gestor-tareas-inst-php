<?php
// Clase que representa un Estado de una tarea, con su nombre y descripción
class Estado {
    public $estado;
    public $descripcion;

    public function __construct($estado, $descripcion) {
        $this->estado = $estado;
        $this->descripcion = $descripcion;
    }
}
?>
