<?php
session_start();
include "connection.php";

$token = $_POST["token"];

$result = $mysql->prepare("SELECT username, email, id FROM USERS WHERE token = ?");
$result->bind_param("s", $token);
$result->execute();

$result->bind_result($user_result, $email_result, $id_result);
$result->fetch();

if ($user_result != null) {
    // Token válido
    $_SESSION["auth"] = $user_result;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token; // Si es necesario almacenar el token en la sesión

    header("Location: RoomAdmin1.php");
} else {
    // Token inválido
    session_destroy();
    header("Location: RoomAdmin1.php");
}


?>