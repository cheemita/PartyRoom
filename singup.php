<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$pass = $_POST["password"];
$packages = $_POST["packages"];

// Verificar si el paquete seleccionado es "Básico" y asignar el token correspondiente
if ($packages === "basico") {
    $token = "DFTWX5TJ";
} else {
    // Puedes agregar más lógica aquí para asignar tokens a otros paquetes si es necesario
    $token = ""; // En este caso, dejamos el token vacío para otros paquetes
}

$result = $mysql->prepare("INSERT INTO users (username, password, email, fullname, packages, token)
VALUES (?, ?, ?, ?, ?, ?)");

$result->bind_param("ssssss", $user, $pass, $email, $fullname, $packages, $token);
$result->execute();

$result2 = $mysql->prepare("SELECT username, email, id FROM USERS where username = ? AND password = ? ");
$result2->bind_param("ss", $user, $pass);
$result2->execute();

$result2->bind_result($user_result, $email_result, $id_result);
$result2->fetch();

var_dump($user_result, $email_result, $id_result);

if ($user_result != null){
    //valid user
    $_SESSION["auth"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    header("Location: Admin.php");
 } else {
     //invalid user
     session_destroy();
}
?>
