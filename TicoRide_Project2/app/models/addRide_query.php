<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';

// Inicializar las variables de error
$errors = [];

// Verificar si se ha iniciado sesión y se ha almacenado el ID de usuario en la sesión
session_start();
if (isset($_SESSION['user_id'])) {
    // Obtener el ID del usuario que inició sesión
    $userId = $_SESSION['user_id'];

    // Verificar si se ha enviado el formulario de registro
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario y aplicar validaciones
        $rideName = validateInput($_POST['rideName']);
        $startFrom = validateInput($_POST['startFrom']);
        $end = validateInput($_POST['end']);
        $description = validateInput($_POST['description']);
        $departure = validateInput($_POST['departure']);
        $estimatedArrival = validateInput($_POST['estimatedArrival']);
        $days = validateInput($_POST['days']);

        // Verificar que todos los campos estén llenos
        if (empty($rideName) || empty($startFrom) || empty($end) || empty($description) || empty($departure) || empty($estimatedArrival) || empty($days)) {
            $errors[] = "Todos los campos son obligatorios.";
        }

        // Verificar longitud máxima de campos
        $maxFieldLength = 255; // Longitud máxima permitida para campos de texto
        if (strlen($rideName) > $maxFieldLength || strlen($startFrom) > $maxFieldLength || strlen($end) > $maxFieldLength || strlen($description) > $maxFieldLength) {
            $errors[] = "Los campos de texto no pueden exceder los $maxFieldLength caracteres.";
        }

        // Si no hay errores, proceder con la inserción en la base de datos
        if (empty($errors)) {
            // Consulta SQL para insertar el nuevo viaje en la base de datos
            $sql = "INSERT INTO rides (ride_name, start, end, description, departure, estimated_arrival, days, user_id) 
                    VALUES ('$rideName', '$startFrom', '$end', '$description', '$departure', '$estimatedArrival', '$days', '$userId')";

            // Ejecutar la consulta
            if ($connection->query($sql) === TRUE) {
                // Registro exitoso, redirigir al usuario a la página de inicio de sesión
                header("Location: ../pages/dashboard.php");
                exit();
            } else {
                // Error al ejecutar la consulta, mostrar un mensaje de error
                $errors[] = "Error al guardar el viaje: " . $connection->error;
            }
        }
    }
} else {
    // Si no se ha iniciado sesión, redirigir al usuario al formulario de inicio de sesión
    header("Location: ../pages/login.php");
    exit();
}

// Función para validar el formato de fecha y hora
function validateDateTime($datetime)
{
    // Aquí puedes implementar la lógica de validación del formato de fecha y hora
    // Por ejemplo, puedes usar la función strtotime() o DateTime::createFromFormat()
    return $datetime;
}

// Función para validar y limpiar la entrada del usuario
function validateInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Cerrar la conexión a la base de datos
$connection->close();

// Mostrar errores, si existen
foreach ($errors as $error) {
    echo "<p>$error</p>";
}
