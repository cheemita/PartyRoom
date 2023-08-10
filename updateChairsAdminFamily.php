<?php
session_start();
include "connection.php";

$action = $_POST["action"];
$chair = $_POST["chair"];
$user_id = $_POST["user_id"];

if($action == "update") {
<<<<<<< HEAD
    $result = $mysql->prepare("INSERT INTO family (id, idUser)
=======
    $result = $mysql->prepare("INSERT INTO chairsadminfamily (id, idUser)
>>>>>>> b1840815f2567af98bfaafb192b96b9c4d8045f9
    VALUES (?, ?)");
    $result->bind_param("ss", $chair, $user_id);
    $result->execute();
    
    //If the action of update chair and appers the name of theperson reserve 
}

// if action is delete then delete the record
if($action == "delete") {
<<<<<<< HEAD
    $result = $mysql->prepare("DELETE FROM family WHERE id = ?");
=======
    $result = $mysql->prepare("DELETE FROM chairsadminfamily WHERE id = ?");
>>>>>>> b1840815f2567af98bfaafb192b96b9c4d8045f9
    $result->bind_param("s", $chair);
    $result->execute();
}
?>