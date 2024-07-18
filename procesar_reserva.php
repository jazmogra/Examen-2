<?php
include 'reservacion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datos = [
        $_POST['hotel'],
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['telefono'],
        $_POST['fecha'],
        $_POST['observaciones']
    ];

    $reservacion = new Reservacion();

    // Validar datos antes de guardar
    if ($reservacion->validarDatos($datos)) {
        $reservacion->guardarReservacion($datos);
        header("Location: index.php"); // Redirigir a la página principal
        exit();
    } else {
        echo "Error: Todos los campos son requeridos.";
    }
} else {
    header("Location: index.php"); // Redirigir si no es una solicitud POST
    exit();
}
?>
