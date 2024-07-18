<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservaciones de Hotel</title>
</head>
<body>
    <h2>Ingreso de Reservaciones</h2>
    <form action="procesar_reserva.php" method="post">
        <label for="hotel">Hotel:</label>
        <select name="hotel" id="hotel">
            <option value="Hotel Herradura">Hotel Herradura</option>
            <option value="Hotel Fiesta">Hotel Fiesta</option>
            <option value="Tropical Beach Hotel">Tropical Beach Hotel</option>
            <option value="Hotel Las Brumas">Hotel Las Brumas</option>
            <option value="Hotel Tioga">Hotel Tioga</option>
        </select><br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br><br>
        <label for="fecha">Fecha de Reservación:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>
        <label for="observaciones">Observaciones:</label><br>
        <textarea id="observaciones" name="observaciones"></textarea><br><br>
        <input type="submit" value="Procesar Reservación">
    </form>

    <h2>Reservaciones Realizadas</h2>
    <table border="1">
        <tr>
            <th>Hotel</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Fecha</th>
            <th>Observaciones</th>
        </tr>
        <?php
        include 'reservacion.php';
        $reservacion = new Reservacion();
        $reservaciones = $reservacion->obtenerReservaciones();
        foreach ($reservaciones as $reserva) {
            echo "<tr>";
            foreach ($reserva as $campo) {
                echo "<td>$campo</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
