<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$pass = $_POST["password"];
$packages = $_POST["packages"];

$cardNumber = $_POST["cardNumber"];
$cardName = $_POST["cardName"];
$expiryDate = $_POST["expiryDate"];
$cvv = $_POST["cvv"];

$randomToken = uniqid();

// Verificar si el paquete seleccionado es "Básico" y asignar el token correspondiente
if ($packages === "basico") {
    $token = "BAS-" . $randomToken;
} else if ($packages === "personal") {
    $token = "PER-" . $randomToken;
} else if ($packages === "familiar") {
    $token = "FAM-" . $randomToken;
} else {
    // Si el paquete no coincide con ninguno de los valores anteriores, puedes asignar otro valor o dejarlo vacío según lo necesites
    $token = ""; // Otra opción puede ser asignar "otro valor" para indicar un token diferente
}

// Verificar si el nombre de usuario ya existe en la base de datos
$result_check_user = $mysql->prepare("SELECT id FROM users WHERE username = ?");
$result_check_user->bind_param("s", $user);
$result_check_user->execute();
$result_check_user->store_result();
$num_rows = $result_check_user->num_rows;

if ($num_rows > 0) {
    // Usuario ya existe en la base de datos, mostrar alerta
    echo '<script>alert("El nombre de usuario ya está ocupado. Por favor, elige otro nombre de usuario."); window.location.href = "index.php";</script>';
    exit; // Detener la ejecución del script para evitar la inserción del usuario duplicado
}

// Agregar el nuevo dato "type" con el valor "admin"
$type = "admin";

// Insertar el nuevo usuario en la base de datos
$result = $mysql->prepare("INSERT INTO users (username, password, email, fullname, packages, token, cardNumber, cardName, expiryDate, cvv, type)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$result->bind_param("sssssssssss", $user, $pass, $email, $fullname, $packages, $token, $cardName, $cardNumber, $expiryDate, $cvv, $type);
$result->execute();

$result2 = $mysql->prepare("SELECT username, email, id, token FROM users WHERE username = ? AND password = ?");
$result2->bind_param("ss", $user, $pass);
$result2->execute();

$result2->bind_result($user_result, $email_result, $id_result, $token_result);
$result2->fetch();

var_dump($user_result, $email_result, $id_result, $token_result);

if ($user_result != null) {
    // Usuario válido
    $_SESSION["auth"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token;
    $_SESSION["packages"] = $packages;
    header("Location: Admin.php");
} else {
    // Usuario inválido
    session_destroy();
}
?>
