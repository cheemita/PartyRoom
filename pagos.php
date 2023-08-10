
<?php
session_start();
include "connection.php";

$cardNumber = $_POST["cardNumber"];
$cardName = $_POST["cardName"];
$expiryDate = $_POST["expiryDate"];
$cvv = $_POST["cvv"];

$token = "DFTWX5T"; // Set the token value to "DFTWX5T"
$package = "basico"; // Set the package value to "basico"

$_SESSION["auth"] = $token; // Save the token value in the session
$_SESSION["paquetes"] = $package; // Save the package value in the session

$_SESSION["cardNumber"] = $cardNumber;
$_SESSION["cardName"] = $cardName;
$_SESSION["expiryDate"] = $expiryDate;
$_SESSION["cvv"] = $cvv;

header("Location: RoomInvited1.php");
?>