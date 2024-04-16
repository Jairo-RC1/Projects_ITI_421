<?php
include '../utils/database.php';

// Verificar si se han proporcionado parámetros de búsqueda
if (!isset($_GET['from']) && !isset($_GET['to'])) {
    // Consulta SQL para obtener todos los rides
    $sql = "SELECT users.username, rides.start, rides.end, rides.id
            FROM rides
            INNER JOIN users ON rides.user_id = users.id";
    $result = $connection->query($sql);

    // Array para almacenar los rides obtenidos
    $rides = array();

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Obtener cada fila de resultados como un array asociativo
        while ($row = $result->fetch_assoc()) {
            // Agregar la fila al array de rides
            $rides[] = $row;
        }
    } else {
        // Si no se encontraron resultados, mostrar un mensaje o realizar otra acción
        echo "No rides found";
    }

    // Cerrar la conexión a la base de datos
    $connection->close();
}
