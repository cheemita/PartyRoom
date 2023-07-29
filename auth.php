<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$pass = $_POST["password"];

if (strlen($password) < 8) {
    // Si la contraseña tiene menos de 8 caracteres, redirige nuevamente al modal de inicio de sesión
    header("Location: index.php");
    exit();
}

$result = $mysql->prepare("SELECT username, email, id ,token  FROM USERS where username = ? AND password = ? ");
$result->bind_param("ss", $user, $pass);
$result->execute();

$result->bind_result($user_result, $email_result, $id_result, $token_result);
$result->fetch();

var_dump($user_result, $email_result, $id_result, $token_result);

if ($user_result != null){
    //valid user
    $_SESSION["auth"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token_result;

    header("Location: Admin.php");
 } else {
    //invalid user
    session_destroy();
    header("Location: Admin.php");
}
?>