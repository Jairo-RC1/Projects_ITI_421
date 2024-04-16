<?php
// Incluir archivo de conexión a la base de datos
include '../utils/database.php';
require '../shared/header.php';
include '../models/home_query.php';


?>
<div class="container text-center mt-5">
    <!-- Main title -->
    <h1 class="display-4 font-weight-bold">Welcome to TicoRides.com</h1>
    <!-- Logout button -->
    <a href="login.php" class="boton-login">Log out</a>
    <!-- Search heading -->
    <div class="search-heading">
        <p class="text-uppercase">Search for a ride</p>
    </div>
    <!-- Search form -->
    <div class="card mt-3 p-3">
        <div class="card-body">
            <form class="search-form" action="" method="GET">
                <div class="form-row">
                    <!-- 'From' input -->
                    <div class="col-3">
                        <input type="text" class="form-control" name="from" placeholder="From" />
                    </div>
                    <!-- 'To' input -->
                    <div class="col-3">
                        <input type="text" class="form-control" name="to" placeholder="To" />
                    </div>
                    <!-- Submit button -->
                    <div class="col-auto">
                        <button type="submit" class="btn btn-light-gray">
                            Find my Ride!
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Results container -->
<div class="container">
    <!-- Results heading -->
    <div class="results-heading">
        <p class="text-uppercase font-weight-bold">
            Results for rides that match your criteria
        </p>
    </div>
    <!-- Row for column headings -->
    <div class="row row-light-gray-center">
        <div class="col column-heading">User</div>
        <div class="col column-heading">Start</div>
        <div class="col column-heading">End</div>
        <div class="col column-heading">View</div>
    </div>

    <!-- Include search results if available -->
    <?php include '../models/searchRide.php'; ?>
</div>


<?php require '../shared/footer.php'; ?>