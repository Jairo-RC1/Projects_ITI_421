<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // SQL query para obtener los datos del usuario
    $sql = "SELECT first_name, last_name, speed, description_user FROM users WHERE id = $user_id";
    $result = $connection->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Obtener la fila de usuario de la consulta
        $row = $result->fetch_assoc();
        // Asignar los valores a las variables
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $speed = $row['speed'];
        $description_user = $row['description_user'];
    } else {
        // Si no se encontraron resultados, mostrar un mensaje de error o realizar otra acción
        echo "User not found.";
    }
} else {
    // Si no se ha iniciado sesión, redirigir al usuario al formulario de inicio de sesión
    header("Location: ../pages/login.php");
    exit();
}

// Cerrar la conexión a la base de datos
$connection->close();
