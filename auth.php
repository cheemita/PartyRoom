<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$pass = $_POST["password"];

$result = $mysql->prepare("SELECT username, email, id FROM USERS where username = ? AND password = ? ");
$result->bind_param("ss", $user, $pass);
$result->execute();

$result->bind_result($user_result, $email_result, $id_result);
$result->fetch();

var_dump($user_result, $email_result, $id_result);

if ($user_result != null){
    //valid user
    $_SESSION["auth"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;

    header("Location: index.php");
 } else {
    //invalid user
    session_destroy();
    header("Location: index.php");
}
?>