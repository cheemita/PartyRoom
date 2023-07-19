<?php
    include "code/class.email.php";
    $ref = new Email();
    $message = $_POST["message"];
    $ref->SendEmail('myEmail@gmail.com', "MR.", "Msg from:".$_POST["email"], $message);
    header("Location: index.php");
?>