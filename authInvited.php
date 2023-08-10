<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$pass = $_POST["password"];
$token = $_POST["token"];

$result = $mysql->prepare("SELECT username, email, id, packages, type FROM USERS WHERE username = ? AND password = ? AND token = ?");
$result->bind_param("sss", $user, $pass, $token);
$result->execute();

$result->bind_result($user_result, $email_result, $id_result, $packages_result, $type_result);
$result->fetch();

if ($user_result != null && $type_result === "invited") {
    // Usuario válido
    $_SESSION["authInv"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token; // Si es necesario almacenar el token en la sesión
    $_SESSION["packages"] = $packages_result;


    header("Location: Admin.php");
} else {
    echo "<script>alert('Your type of user is incorrect'); window.location.href='index.php';</script>";
}

?>