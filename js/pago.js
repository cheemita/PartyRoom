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

function copyToken() {
  // Obtiene el elemento que contiene el token
  const tokenElement = document.getElementById("tokenText");
  
  // Obtiene el texto del token
  const tokenText = tokenElement.innerText;

  // Utiliza el API del portapapeles para copiar el texto
  navigator.clipboard.writeText(tokenText)
    .then(() => {
      // Notifica al usuario que el token se ha copiado correctamente
      alert("Token copied to clipboard!");
    })
    .catch((error) => {
      // En caso de error, muestra un mensaje al usuario
      console.error("Failed to copy token: ", error);
    });
}