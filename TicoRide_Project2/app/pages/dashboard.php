<?php 
require '../shared/header.php';
?>
<!-- Main content container -->
<div class="container mt-5">
    <!-- Main title -->
    <h1 class="display-4 font-weight-bold text-center">Dashboard</h1>
    <div class="container mt-5">
        <!-- Breadcrumb navigation -->
        <div class="breadcrumb">
            <p class="breadcrumb-item">Dashboard</p>
            <p class="breadcrumb-item">></p>
            <p class="breadcrumb-item active">My Rides</p>
        </div>
        <!-- Results heading -->
        <div class="results-heading">
            <p class="text-uppercase font-weight-bold">My Rides</p>
        </div>
        <!-- Ride list table headers -->
        <div class="row row-light-gray-center">
            <div class="col column-heading">User</div>
            <div class="col column-heading">Start</div>
            <div class="col column-heading">End</div>
            <div class="col column-heading">Actions</div>
        </div>
        <!-- Ride list items -->
        <?php include '../utils/ride_query.php'; ?>
        <!-- Add Ride button -->
        <div class="justify-content-start mt-3">
            <div class="col-auto">
                <a href="addRide.html" class="btn btn-primary">Añadir Ride</a>
            </div>
        </div>
    </div>
</div>

<!-- jQuery Slim, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>