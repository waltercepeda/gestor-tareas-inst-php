<?php
require_once 'MenuTarea.php';
require_once 'MenuEstado.php';

$menuTarea = new MenuTarea();
$menuEstado = new MenuEstado();

echo "===== SISTEMA DE GESTIÓN DE TAREAS =====\n";

while (true) {
    echo "\nSeleccione una opción:\n";
    echo "1. Agregar tarea\n";
    echo "2. Listar tareas\n";
    echo "3. Editar tarea\n";
    echo "4. Borrar tarea\n";
    echo "5. Asignar estado a tarea\n";
    echo "6. Listar tareas por estado\n";
    echo "0. Salir\n";

    $opcion = readline("Opción: ");

    switch ($opcion) {
        case 1:
            $fecha = readline("Fecha de inicio: ");
            $titulo = readline("Título: ");
            $descripcion = readline("Descripción: ");
            $menuTarea->agregarTarea($fecha, $titulo, $descripcion);
            break;
        case 2:
            $menuTarea->listarTareas();
            break;
        case 3:
            $menuTarea->listarTareas();
            $indice = readline("Índice de la tarea a editar: ");
            $titulo = readline("Nuevo título: ");
            $descripcion = readline("Nueva descripción: ");
            $menuTarea->editarTarea($indice, $titulo, $descripcion);
            break;
        case 4:
            $menuTarea->listarTareas();
            $indice = readline("Índice de la tarea a borrar: ");
            $menuTarea->borrarTarea($indice);
            break;
        
        case 5:
            $menuTarea->listarTareas();
            $indice = readline("Índice de la tarea a asignar estado: ");
            $estado = readline("Estado a asignar: ");
            $menuEstado->asignarEstadoATarea($menuTarea, $indice, $estado);
            break;
        case 6:
            $estado = readline("Estado a buscar: ");
            $menuEstado->listarTareasPorEstado($menuTarea, $estado);
            break;
        case 0:
            echo "👋 Saliendo del sistema...\n";
            exit;
        default:
            echo "⚠️ Opción inválida.\n";
    }
}
?>
