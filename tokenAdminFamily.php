<?php
session_start();
include "connection.php";

$token = $_POST["token"];
$user = $_POST["user"];

// Check if the submitted username matches the currently logged-in user
if ($user !== $_SESSION["auth"]) {
    echo "<script>alert('Invalid username. Please enter the correct username.'); window.location.href='Admin.php';</script>";
    exit();
}

$result = $mysql->prepare("SELECT username, email, id, token, packages FROM USERS WHERE username = ?");
$result->bind_param("s", $user);
$result->execute();

$result->bind_result($user_result, $email_result, $id_result, $token_result, $packages_result);
$result->fetch();

if ($user_result != null && $token === $token_result && $packages_result === "familiar" ) {
    // Token válido
    $_SESSION["auth"] = $user_result;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token; // Si es necesario almacenar el token en la sesión

    header("Location: RoomAdmin3.php");
} else {
    // Token inválido
    echo "<script>alert('Invalid token. Please enter the correct token or your token no is the right packages'); window.location.href='Admin.php';</script>";
}
?>
