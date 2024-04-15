<?php
require '../shared/header.php';
?>
<div class="container mt-5">
    <!-- Main title -->
    <h1 class="display-4 font-weight-bold text-center">Add Ride</h1>
    <div class="container mt-5">
        <!-- Breadcrumb navigation -->
        <div class="breadcrumb">
            <p class="breadcrumb-item">Dashboard</p>
            <p class="breadcrumb-item">></p>
            <p class="breadcrumb-item active">My Rides</p>
            <p class="breadcrumb-item">></p>
            <p class="breadcrumb-item active">Add</p>
        </div>
        <!-- Ride form -->
        <form id="add-ride-form" method="post" action="../models/addRide_query.php">
            <div class="form-group">
                <label for="rideName">Ride Name</label>
                <input type="text" class="form-control" id="rideName" name="rideName" placeholder="Input text" />
            </div>
            <div class="form-group">
                <label for="startFrom">Start From</label>
                <input type="text" class="form-control" id="startFrom" name="startFrom" placeholder="Location" />
            </div>
            <div class="form-group">
                <label for="end">End</label>
                <input type="text" class="form-control" id="end" name="end" placeholder="Input text" />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" placeholder="Add here the description for the ride"></textarea>
            </div>
            <div class="form-group">
                <label for="departure">Departure</label>
                <input type="text" class="form-control" id="departure" name="departure" placeholder="Enter a departure time" />
            </div>
            <div class="form-group">
                <label for="estimatedArrival">Estimated Arrival</label>
                <input type="text" class="form-control" id="estimatedArrival" name="estimatedArrival" placeholder="Enter an estimated arrival time" />
            </div>
            <div class="form-group">
                <label for="days">Days of the Ride</label>
                <input type="text" class="form-control" id="days" name="days" placeholder="Enter days separated by commas (e.g., Monday, Tuesday, Wednesday)" />
            </div>
            <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
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