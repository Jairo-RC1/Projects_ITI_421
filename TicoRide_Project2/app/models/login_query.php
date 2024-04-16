<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para obtener el hash de la contraseña del usuario
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $connection->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Obtener la fila de usuario de la consulta
        $row = $result->fetch_assoc();
        // Verificar si la contraseña proporcionada coincide con el hash almacenado
        if (password_verify($password, $row['password'])) {
            // Iniciar sesión y almacenar el ID de usuario y el nombre de usuario en la sesión
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            // Redirigir al usuario a la página de inicio
            header("Location: ../pages/dashboard.php");
            exit();
        } else {
            // Las credenciales son inválidas, mostrar un mensaje de error
            echo "Invalid username or password. Please try again.";
        }
    } else {
        // Usuario no encontrado, mostrar un mensaje de error
        echo "User not found. Please try again.";
    }
}

// Cerrar la conexión a la base de datos
$connection->close();
