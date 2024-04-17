<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';

// Verificar si se ha enviado el ID del ride a editar
if (isset($_GET['id'])) {
    // Obtener el ID del ride a editar
    $rideId = $_GET['id'];

    // Consulta SQL para obtener la información del ride a editar
    $sql = "SELECT * FROM rides WHERE id = $rideId";
    $result = $connection->query($sql);

    // Verificar si se encontró el ride
    if ($result->num_rows > 0) {
        // Obtener los datos del ride
        $rideData = $result->fetch_assoc();
    } else {
        // No se encontró el ride, redirigir con un mensaje de error
        header("Location: ../pages/dashboard.php?error=" . urlencode("El ride especificado no existe."));
        exit();
    }
} else {
    // No se proporcionó el ID del ride, redirigir al usuario a la página de inicio
    header("Location: ../pages/dashboard.php");
    exit();
}
