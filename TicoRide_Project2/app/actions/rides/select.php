<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';


if (isset($_SESSION['user_id'])) {
    // Obtener el ID del usuario que inició sesión
    $userId = $_SESSION['user_id'];

    // Verificar si se ha enviado el ID del ride a editar
    if (isset($_GET['id'])) {
        // Obtener el ID del ride a editar
        $rideId = $_GET['id'];

        // Consulta SQL para obtener la información del ride a editar
        $sql = "SELECT * FROM rides WHERE id = $rideId AND user_id = $userId";
        $result = $connection->query($sql);

        // Verificar si se encontró el ride
        if ($result->num_rows > 0) {
            // Obtener los datos del ride
            $rideData = $result->fetch_assoc();
        } else {
            // No se encontró el ride, redirigir con un mensaje de error
            header("Location: ../pages/dashboard.php?error=" . urlencode("El ride especificado no existe o no tienes permiso para editarlo."));
            exit();
        }
    } else {
        // No se proporcionó el ID del ride, redirigir al usuario a la página de inicio
        header("Location: ../pages/dashboard.php");
        exit();
    }
} else {
    // Si no se ha iniciado sesión, redirigir al usuario al formulario de inicio de sesión
    header("Location: ../pages/login.php");
    exit();
}
