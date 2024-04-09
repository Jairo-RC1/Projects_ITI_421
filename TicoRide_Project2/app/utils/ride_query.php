<?php 
include 'database.php';

// SQL query to get the rides
$sql = "SELECT users.username, rides.start, rides.end, rides.id FROM rides INNER JOIN users ON rides.user_id = users.id";
$result = $connection->query($sql);

// Show results
while ($row = $result->fetch_assoc()) {
    // Mostrar resultados
    echo "<div class='row row-light-gray'>";
    echo "<div class='col'>" . $row["username"] . "</div>";
    echo "<div class='col'>" . $row["start"] . "</div>";
    echo "<div class='col'>" . $row["end"] . "</div>";
    echo "<div class='col'>";
    echo "<a href='editRide.php?id=" . $row["id"] . "'>Edit</a> - ";
    echo "<a href='#' onclick='confirmDelete(" . $row["id"] . ")'>Delete</a>";
    echo "</div>";
    echo "</div>";
}

// Close connection
$connection->close();

