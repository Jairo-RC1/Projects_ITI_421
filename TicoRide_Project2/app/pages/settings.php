<?php
require '../shared/header.php';
// Incluir el archivo setting_query.php para obtener la información del usuario
include '../models/settings_query.php';
?>

<!-- Main content container -->
<div class="container mt-5">
    <!-- Title -->
    <h1 class="display-4 font-weight-bold text-center">Settings</h1>
    <!-- Breadcrumb navigation -->
    <div class="breadcrumb">
        <p class="breadcrumb-item">Dashboard</p>
        <p class="breadcrumb-item">></p>
        <p class="breadcrumb-item active">Settings</p>
    </div>
    <!-- Settings form -->
    <div class="container mt-5">
        <form action="../models/update_settings.php" method="POST">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <!-- Mostrar el primer nombre del usuario -->
                <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $first_name; ?>" required />
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <!-- Mostrar el apellido del usuario -->
                <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $last_name; ?>" required />
            </div>
            <div class="form-group">
                <label for="speedAverage">Speed Average</label>
                <!-- Mostrar la velocidad promedio del usuario -->
                <input type="text" class="form-control" id="speedAverage" name="speedAverage" value="<?php echo $speed; ?>" />
            </div>
            <div class="form-group">
                <label for="aboutMe">About Me</label>
                <!-- Mostrar la descripción del usuario -->
                <textarea class="form-control" id="aboutMe" name="aboutMe" rows="5"><?php echo $description_user; ?></textarea>
            </div>
            <!-- Botones para cancelar y guardar -->
            <div class="container mt-3">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>