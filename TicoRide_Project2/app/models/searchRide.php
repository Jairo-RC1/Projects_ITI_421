<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';

// Obtener los parámetros de búsqueda
$from = $_GET['from'] ?? '';
$to = $_GET['to'] ?? '';

// Consulta SQL para obtener los rides que coinciden con los parámetros de búsqueda
$sql = "SELECT users.username, rides.start, rides.end, rides.id
        FROM rides
        INNER JOIN users ON rides.user_id = users.id
        WHERE start LIKE '%$from%' AND end LIKE '%$to%'";

// Ejecutar la consulta
$search_result = $connection->query($sql);

// Verificar si se encontraron resultados
if ($search_result->num_rows > 0) {
    // Mostrar los resultados de la búsqueda
    while ($search_row = $search_result->fetch_assoc()) {
        echo "<div class='row row-light-gray'>";
        echo "<div class='col'>" . $search_row["username"] . "</div>";
        echo "<div class='col'>" . $search_row["start"] . "</div>";
        echo "<div class='col'>" . $search_row["end"] . "</div>";
        echo "<div class='col'><a href='viewRide" . $search_row['id'] . ".html'>View Ride " . $search_row['id'] . "</a></div>";
        echo "</div>";
    }
} else {
    // Si no se encontraron resultados, mostrar un mensaje
    echo "No rides found";
}

// Cerrar la conexión a la base de datos
$connection->close();
