<?php
// Incluir archivo de conexión a la base de datos
require_once '../../utils/database.php';

// Verificar si se ha iniciado sesión y se ha almacenado el ID de usuario en la sesión
session_start();

// Verificar la conexión a la base de datos
if (!$connection) {
    die("Error al conectar con la base de datos");
}

if (isset($_SESSION['user_id'])) {
    // Obtener el ID del usuario que inició sesión
    $userId = $_SESSION['user_id'];

    // Verificar si se ha enviado el formulario de eliminación de viaje
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['rideId'])) {
        // Obtener el ID del viaje a eliminar
        $rideId = $_POST['rideId'];

        // Consulta SQL para eliminar el viaje de la base de datos
        $sql = "DELETE FROM rides WHERE id = $rideId AND user_id = $userId";

        // Ejecutar la consulta
        if ($connection->query($sql) === TRUE) {
            // Redirigir al usuario de vuelta a la página de inicio con un mensaje de éxito
            header("Location: ../../pages/dashboard.php?success=delete");
            exit();
        } else {
            // Si ocurre un error al ejecutar la consulta, redirigir con un mensaje de error
            header("Location: ../../pages/dashboard.php?error=" . urlencode("Error al eliminar el viaje: " . $connection->error));
            exit();
        }
    } else {
        // Si no se ha enviado el formulario de eliminación, redirigir al usuario a la página de inicio
        header("Location: ../../pages/dashboard.php");
        exit();
    }
} else {
    // Si no se ha iniciado sesión, redirigir al usuario al formulario de inicio de sesión
    header("Location: ../../pages/login.php");
    exit();
}
