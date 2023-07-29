<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$pass = $_POST["password"];
$packages = $_POST["packages"];

$cardNumber = $_POST["cardNumber"]; // Assuming these values are received from the form
$cardName = $_POST["cardName"];
$expiryDate = $_POST["expiryDate"];
$cvv = $_POST["cvv"];


// Verificar si el paquete seleccionado es "Básico" y asignar el token correspondiente
if ($packages === "basico") {
    $token = "DFTWX5TJ";
} else if ($packages === "personal") {
    $token = "JKDLOPIUI";
} else if ($packages === "familiar") {
    $token = "KHJGBFTY";
} else {
    // Si el paquete no coincide con ninguno de los valores anteriores, puedes asignar otro valor o dejarlo vacío según lo necesites
    $token = ""; // Otra opción puede ser asignar "otro valor" para indicar un token diferente
}


$result = $mysql->prepare("INSERT INTO users (username, password, email, fullname, packages, token, cardNumber, cardName, expiryDate, cvv )
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$result->bind_param("ssssssssss", $user, $pass, $email, $fullname, $packages, $token , $cardName, $cardNumber, $expiryDate, $cvv);
$result->execute();

$result2 = $mysql->prepare("SELECT username, email, id , token FROM USERS where username = ?  AND password = ?");
$result2->bind_param("ss", $user, $pass);
$result2->execute();

$result2->bind_result($user_result, $email_result, $id_result, $token_result);
$result2->fetch();

var_dump($user_result, $email_result, $id_result, $token_result);

if ($user_result != null){
    //valid user
    $_SESSION["auth"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token;
    header("Location: Admin.php");
 } else {
     //invalid user
     session_destroy();
}
?>
