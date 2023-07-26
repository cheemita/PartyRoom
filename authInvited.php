<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$pass = $_POST["password"];
$token = $_POST["token"];

$result = $mysql->prepare("SELECT username, email, id FROM USERS WHERE username = ? AND password = ? AND token = ?");
$result->bind_param("sss", $user, $pass, $token);
$result->execute();

$result->bind_result($user_result, $email_result, $id_result);
$result->fetch();

if ($user_result != null) {
    // Usuario válido
    $_SESSION["authInv"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token; // Si es necesario almacenar el token en la sesión

    header("Location: Invited.php");
} else {
    // Usuario o token inválido
    session_destroy();
    header("Location: Invited.php");
}

?>