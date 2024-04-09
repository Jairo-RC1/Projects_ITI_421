document.addEventListener("DOMContentLoaded", function () {
  // Selección del formulario
  const registerForm = document.getElementById("register-form");

  // Evento de envío del formulario
  registerForm.addEventListener("submit", function (event) {
    // Detener el envío del formulario
    event.preventDefault();

    // Obtener los valores de los campos del formulario
    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const phone = document.getElementById("phone").value;
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const repeatPassword = document.getElementById("repeatPassword").value;

    // Validar que todos los campos estén llenos
    if (
      firstName.trim() === "" ||
      lastName.trim() === "" ||
      phone.trim() === "" ||
      username.trim() === "" ||
      password.trim() === "" ||
      repeatPassword.trim() === ""
    ) {
      alert("Por favor complete todos los campos.");
      return;
    }

    // Validar que las contraseñas coincidan
    if (password !== repeatPassword) {
      alert("Las contraseñas no coinciden. Por favor, inténtelo de nuevo.");
      return;
    }

    // Si todos los campos están llenos y las contraseñas coinciden, enviar el formulario
    registerForm.submit();
  });
});
