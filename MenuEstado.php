<?php
require_once 'Estado.php';
require_once 'MenuTarea.php';

// Clase que gestiona los estados de las tareas y permite listar por estado o agregar nuevos estados
class MenuEstado {
    public $estados = [];


    public function listarTareasPorEstado($menuTarea, $estadoBuscado) {
        $encontradas = false;
        foreach ($menuTarea->tareas as $tarea) {
            if ($tarea->estado === $estadoBuscado) {
                echo "🔎 {$tarea->titulo} | {$tarea->descripcion} | Fecha: {$tarea->fechaInicio}\n";
                $encontradas = true;
            }
        }

        if (!$encontradas) {
            echo "⚠️ No hay tareas con el estado '$estadoBuscado'.\n";
        }
    }

    public function asignarEstadoATarea($menuTarea, $indiceTarea, $nuevoEstado) {
        if (isset($menuTarea->tareas[$indiceTarea])) {
            $menuTarea->tareas[$indiceTarea]->estado = $nuevoEstado;
            echo " Estado asignado a la tarea '{$menuTarea->tareas[$indiceTarea]->titulo}'.\n";
        } else {
            echo " Tarea no encontrada.\n";
        }
    }
}
?>
