function confirmDelete() {
  // Show a confirmation message to the user
  var confirmation = confirm("¿Estás seguro de que deseas eliminar este ride?");

  // Check if the user confirmed
  if (confirmation) {
    // If user confirms, redirect to deleteRide.html page
    window.location.href = "deleteRide.html";
  }
}
