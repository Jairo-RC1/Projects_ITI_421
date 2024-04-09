<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';

// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];

    // Verificar si las contraseñas coinciden
    if ($password !== $repeatPassword) {
        // Contraseñas no coinciden, mostrar un mensaje de error
        $error = "Passwords do not match. Please try again.";
    } else {
        // Hash de la contraseña
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Consulta SQL para insertar el nuevo usuario en la base de datos
        $sql = "INSERT INTO users (first_name, last_name, phone, username, password) 
                VALUES ('$firstName', '$lastName', '$phone', '$username', '$hashedPassword')";

        // Ejecutar la consulta
        if ($connection->query($sql) === TRUE) {
            // Registro exitoso, redirigir al usuario a la página de inicio de sesión
            header("Location: ../pages/login.php");
            exit();
        } else {
            // Error al ejecutar la consulta, mostrar un mensaje de error
            $error = "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}

// Cerrar la conexión a la base de datos
$connection->close();

// Mostrar mensaje de error, si existe
if (isset($error)) {
    echo $error;
}
