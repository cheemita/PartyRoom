<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$pass = $_POST["password"];


$result = $mysql->prepare("SELECT username, email, id ,token, packages, type  FROM USERS where username = ? AND password = ? ");
$result->bind_param("ss", $user, $pass);
$result->execute();

$result->bind_result($user_result, $email_result, $id_result, $token_result, $packages_result, $type_result);
$result->fetch();

var_dump($user_result, $email_result, $id_result, $token_result, $packages_result, $type_result);

if ($user_result != null && $type_result === "admin"){
    //valid user
    $_SESSION["auth"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token_result;
    $_SESSION["packages"] = $packages_result;


    header("Location: Admin.php");
 } else {
    echo "<script>alert('Your type of user is incorrect'); window.location.href='index.php';</script>";

}
?>