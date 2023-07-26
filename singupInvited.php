<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$pass = $_POST["password"];

$result = $mysql->prepare("INSERT INTO users (username, password, email, fullname)
VALUES (?, ?, ?, ?)");

$result->bind_param("ssss", $user, $pass, $email, $fullname);
$result->execute();

$result2 = $mysql->prepare("SELECT username, email, id FROM USERS where username = ? AND password = ? ");
$result2->bind_param("ss", $user, $pass);
$result2->execute();

$result2->bind_result($user_result, $email_result, $id_result);
$result2->fetch();

var_dump($user_result, $email_result, $id_result);

if ($user_result != null){
    //valid user
    $_SESSION["authInv"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    header("Location: Invited.php");
 } else {
     //invalid user
     session_destroy();
}
?>