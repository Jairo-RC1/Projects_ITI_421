<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';

// Verificar si se ha iniciado sesión y se ha almacenado el ID de usuario en la sesión
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // SQL query para obtener los rides del usuario actual
    $sql = "SELECT ride_name, start, end, id FROM rides WHERE user_id = $user_id";
    $result = $connection->query($sql);

    // Mostrar resultados
    while ($row = $result->fetch_assoc()) {
        // Mostrar resultados
        echo "<div class='row row-light-gray'>";
        echo "<div class='col'>" . $row["ride_name"] . "</div>";
        echo "<div class='col'>" . $row["start"] . "</div>";
        echo "<div class='col'>" . $row["end"] . "</div>";
        echo "<div class='col'>";
        echo "<a href='../pages/editRide.php?id=" . $row["id"] . "'>Edit</a> - ";
        echo "<a href='#' onclick='confirmDelete(" . $row["id"] . ")'>Delete</a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    // Si no se ha iniciado sesión, redirigir al usuario al formulario de inicio de sesión
    header("Location: login.php");
    exit();
}

// Cerrar la conexión a la base de datos
$connection->close();
