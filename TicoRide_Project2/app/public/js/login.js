$(document).ready(function () {
  // Manejar el envío del formulario de inicio de sesión
  $("#login-form").submit(function (event) {
    event.preventDefault(); // Evitar que el formulario se envíe normalmente

    // Obtener los datos del formulario
    var formData = $(this).serialize();

    // Realizar la petición AJAX al servidor
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: formData,
      success: function (response) {
        // Redirigir al usuario si las credenciales son válidas
        window.location.href = response.redirect;
      },
      error: function (xhr, status, error) {
        // Mostrar mensaje de error si las credenciales son inválidas
        alert(xhr.responseText);
      },
    });
  });
});
