<?php

class Reservacion {
    private $archivo = 'reservaciones.txt';

    public function validarDatos($datos) {
        // Validación de que todos los campos no estén vacíos
        foreach ($datos as $campo) {
            if (empty($campo)) {
                return false;
            }
        }
        return true;
    }

    public function guardarReservacion($datos) {
        // Guardar los datos de la reservación en el archivo
        $linea = implode(',', $datos) . PHP_EOL;
        file_put_contents($this->archivo, $linea, FILE_APPEND);
    }

    public function obtenerReservaciones() {
        // Leer todas las reservaciones desde el archivo
        $reservaciones = [];
        if (file_exists($this->archivo)) {
            $archivo = file($this->archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($archivo as $linea) {
                $reservaciones[] = explode(',', $linea);
            }
        }
        return $reservaciones;
    }
}
?>
