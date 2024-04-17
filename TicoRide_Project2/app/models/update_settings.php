<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';

// Verificar si se ha iniciado sesión y se ha almacenado el ID de usuario en la sesión
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Verificar si se han enviado los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $speedAverage = $_POST['speedAverage'];
        $aboutMe = $_POST['aboutMe'];

        // SQL query para actualizar los datos del usuario
        $sql = "UPDATE users SET first_name = '$firstName', last_name = '$lastName', speed = '$speedAverage', description_user = '$aboutMe' WHERE id = $user_id";

        // Ejecutar la consulta de actualización
        if ($connection->query($sql) === TRUE) {
            // Redirigir al usuario a la página de configuración con un mensaje de éxito
            header("Location: ../pages/settings.php?update_success=true");
            exit();
        } else {
            // Si la consulta falla, mostrar un mensaje de error
            echo "Error updating record: " . $connection->error;
        }
    }
} else {
    // Si no se ha iniciado sesión, redirigir al usuario al formulario de inicio de sesión
    header("Location: ../pages/login.php");
    exit();
}

// Cerrar la conexión a la base de datos
$connection->close();
