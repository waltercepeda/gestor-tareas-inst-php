<?php
require_once 'Tarea.php';

// Clase que gestiona el menú de tareas: agregar, editar, listar y borrar
class MenuTarea {
    public $tareas = [];

    public function agregarTarea($fechaInicio, $titulo, $descripcion) {
        $tarea = new Tarea($fechaInicio, $titulo, $descripcion);
        $this->tareas[] = $tarea;
        echo " Tarea '$titulo' agregada correctamente.\n";
    }

    public function listarTareas() {
        if (empty($this->tareas)) {
            echo " No hay tareas registradas.\n";
            return;
        }

        foreach ($this->tareas as $indice => $tarea) {
            echo "[$indice] - {$tarea->titulo} | Estado: {$tarea->estado} | Fecha: {$tarea->fechaInicio}\n";
        }
    }

    public function editarTarea($indice, $titulo, $descripcion) {
        if (isset($this->tareas[$indice])) {
            $this->tareas[$indice]->titulo = $titulo;
            $this->tareas[$indice]->descripcion = $descripcion;
            echo "✏️ Tarea editada correctamente.\n";
        } else {
            echo " Tarea no encontrada.\n";
        }
    }

    public function borrarTarea($indice) {
        if (isset($this->tareas[$indice])) {
            unset($this->tareas[$indice]);
            $this->tareas = array_values($this->tareas); // Reindexar
            echo " Tarea eliminada.\n";
        } else {
            echo " Tarea no encontrada.\n";
        }
    }
}
?>
