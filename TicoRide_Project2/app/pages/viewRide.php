<?php
require '../shared/header.php';
include '../models/viewRide_query.php'; // Incluye select.php para obtener $rideData

// Asegúrate de que $rideData esté inicializada antes de mostrarla en el formulario
if (!isset($rideData)) {
    echo "Error: No se encontraron datos del ride.";
    exit();
}
?>

<div class="container mt-5">
    <!-- Main title -->
    <h1 class="display-4 font-weight-bold text-center">View Ride</h1>
    <div class="container mt-5">
        <!-- Breadcrumb navigation -->
        <div class="breadcrumb">
            <p class="breadcrumb-item">Dashboard</p>
            <p class="breadcrumb-item">></p>
            <p class="breadcrumb-item active">My Rides</p>
            <p class="breadcrumb-item">></p>
            <p class="breadcrumb-item active">View</p>
        </div>
        <!-- Ride form -->
        <form id="edit-ride-form" method="post" action="../actions/rides/edit.php">
            <input type="hidden" name="rideId" value="<?php echo isset($rideId) ? $rideId : ''; ?>">
            <div class="form-group">
                <label for="rideName">Ride Name</label>
                <input type="text" class="form-control" id="rideName" name="rideName" placeholder="Input text" value="<?php echo isset($rideData['ride_name']) ? $rideData['ride_name'] : ''; ?>" readonly />
            </div>
            <div class="form-group">
                <label for="startFrom">Start From</label>
                <input type="text" class="form-control" id="startFrom" name="startFrom" placeholder="Location" value="<?php echo isset($rideData['start']) ? $rideData['start'] : ''; ?>" readonly />
            </div>
            <div class="form-group">
                <label for="end">End</label>
                <input type="text" class="form-control" id="end" name="end" placeholder="Input text" value="<?php echo isset($rideData['end']) ? $rideData['end'] : ''; ?>" readonly />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" placeholder="Add here the description for the ride" readonly><?php echo isset($rideData['description']) ? $rideData['description'] : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="departure">Departure</label>
                <input type="text" class="form-control" id="departure" name="departure" placeholder="Enter a departure time" value="<?php echo isset($rideData['departure']) ? $rideData['departure'] : ''; ?>" readonly />
            </div>
            <div class="form-group">
                <label for="estimatedArrival">Estimated Arrival</label>
                <input type="text" class="form-control" id="estimatedArrival" name="estimatedArrival" placeholder="Enter an estimated arrival time" value="<?php echo isset($rideData['estimated_Arrival']) ? $rideData['estimated_Arrival'] : ''; ?>" readonly />
            </div>
            <div class="form-group">
                <label for="days">Days of the Ride</label>
                <input type="text" class="form-control" id="days" name="days" placeholder="Enter days separated by commas (e.g., Monday, Tuesday, Wednesday)" value="<?php echo isset($rideData['days']) ? $rideData['days'] : ''; ?>" readonly />
            </div>
            <a href="home.php" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary" disabled>Save</button>
        </form>
    </div>
</div>
<?php
require '../shared/footer.php';
?>
<!-- jQuery Slim, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>