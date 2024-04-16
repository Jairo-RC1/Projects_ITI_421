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

    // Verificar si se ha enviado el formulario de edición de viaje
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['rideId'])) {
        // Obtener los datos del formulario
        $rideId = $_POST['rideId'];
        $rideName = $_POST['rideName'];
        $startFrom = $_POST['startFrom'];
        $end = $_POST['end'];
        $description = $_POST['description'];
        $departure = $_POST['departure'];
        $estimatedArrival = $_POST['estimatedArrival'];
        $days = $_POST['days'];

        // Consulta SQL para actualizar los datos del viaje en la base de datos
        $sql = "UPDATE rides 
                SET ride_name = '$rideName', start = '$startFrom', end = '$end', description = '$description', 
                    departure = '$departure', estimated_Arrival = '$estimatedArrival', days = '$days' 
                WHERE id = $rideId AND user_id = $userId";

        // Ejecutar la consulta
        if ($connection->query($sql) === TRUE) {
            // Redirigir al usuario de vuelta a la página de edición con un mensaje de éxito
            header("Location: ../../pages/dashboard.php?id=$rideId&success=true");
            exit();
        } else {
            // Si ocurre un error al ejecutar la consulta, redirigir con un mensaje de error
            header("Location: ../../pages/editRide.php?id=$rideId&error=" . urlencode("Error al actualizar el viaje: " . $connection->error));
            exit();
        }
    } else {
        // Si no se ha enviado el formulario de edición, redirigir al usuario a la página de inicio
        header("Location: ../../pages/dashboard.php");
        exit();
    }
} else {
    // Si no se ha iniciado sesión, redirigir al usuario al formulario de inicio de sesión
    header("Location: ../pages/login.php");
    exit();
}
