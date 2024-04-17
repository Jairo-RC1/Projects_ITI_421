<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicoRides</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/stylesDashboard.css">
    <script src="../public/js/script.js"></script>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">
            <!-- Brand logo -->
            <img src="../public/images/logo.png" alt="logo" height="60">
        </a>
        <!-- Navbar toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <!-- Dashboard link -->
                    <a class="nav-link dashboard-link" href="../pages/dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <!-- Rides link -->
                    <a class="nav-link" href="../pages/home.php">Rides</a>
                </li>
                <li class="nav-item">
                    <!-- Settings link -->
                    <a class="nav-link" href="../pages/settings.php">Settings</a>
                </li>
                <li class="nav-item">
                    <!-- User welcome message -->
                    <div class="nav-link welcome-user">
                        <?php
                        // Verificar si se ha iniciado sesión y el nombre de usuario está disponible en la sesión
                        if (isset($_SESSION['username'])) {
                            // Mostrar el mensaje de bienvenida con el nombre de usuario
                            echo "Welcome, " . $_SESSION['username'];
                        } else {
                            // Mostrar un mensaje genérico si el nombre de usuario no está disponible en la sesión
                            echo "Welcome, User";
                        }
                        ?>
                        <img src="../public/images/user.png" alt="user" class="user-icon">
                    </div>
                </li>
                <li class="nav-item">
                    <!-- Log Out button -->
                    <a class="nav-link" href="../models/logout.php">Log Out</a>
                </li>

            </ul>
        </div>
    </nav>