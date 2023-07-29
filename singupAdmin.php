<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$pass = $_POST["password"];
$token = $_POST["token"];
$packages = ""; // Variable para almacenar el paquete seleccionado


if ($token === "DFTWX5TJ") {
    // Si el token es "DFTWX5TJ", asignar el paquete "basico"
    $packages = "basico";
} else if ($token === "JKDLOPIUI") {
    // Si el token es "JKDLOPIUI", asignar el paquete "personal"
    $packages = "personal";
} else if ($token === "KHJGBFTY") {
    // Si el token es "KHJGBFTY", asignar el paquete "familiar"
    $packages = "familiar";
} else {
    // Si el token no coincide con ninguno de los valores anteriores, puedes asignar otro valor o dejarlo vacío según lo necesites
    $packages = ""; // Otra opción puede ser asignar "otro valor" para indicar un paquete diferente
}


$result = $mysql->prepare("INSERT INTO users (username, password, email, fullname, token, packages) VALUES (?, ?, ?, ?, ?, ?)");
$result->bind_param("ssssss", $user, $pass, $email, $fullname, $token, $packages);
$result->execute();

$result2 = $mysql->prepare("SELECT username, email, id FROM USERS WHERE username = ? AND password = ?");
$result2->bind_param("ss", $user, $pass);
$result2->execute();

$result2->bind_result($user_result, $email_result, $id_result);
$result2->fetch();

var_dump($user_result, $email_result, $id_result);

if ($user_result != null) {
    // Usuario válido
    $_SESSION["authInv"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    header("Location: Invited.php");
} else {
    // Usuario inválido
    session_destroy();
}
?>
