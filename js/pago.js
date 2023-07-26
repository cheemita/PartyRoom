console.log("hola")

  
document.getElementById("submit-token").addEventListener("click", function() {
  var enteredToken = document.getElementById("token").value;
  var correctToken = "DFTWX5TJ"; // El token correcto que debe ser comparado

  if (enteredToken === correctToken) {
    // Token es correcto, redirigir a RoomAdmin.php
    window.location.href = "RoomAdmin.php";
  } else {
    // Token incorrecto, mostrar mensaje de error o realizar alguna acción adicional si es necesario
    alert("Token incorrecto. Inténtalo nuevamente.");
    // Si prefieres que el modal permanezca abierto después del intento fallido, puedes omitir la siguiente línea.
    document.getElementById("token").value = ""; // Limpiar el campo del token
  }
});

  