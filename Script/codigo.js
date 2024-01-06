function comprobarRegistro() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var email = document.getElementById("email").value;
    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;
  
    if (nombre !== "" && apellido !== "" && email !== "" && usuario !== "" && password !== "") {
      alert("¡Registro completado exitosamente!");
    } else {
      alert("Por favor, complete todos los campos.");
    }
  }