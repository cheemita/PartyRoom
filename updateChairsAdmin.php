<?php
session_start();
include "connection.php";

$action = $_POST["action"];
$chair = $_POST["chair"];
$user_id = $_POST["user_id"];

if($action == "update") {
    $result = $mysql->prepare("INSERT INTO chairsadmin (id, idUser)
    VALUES (?, ?)");
    $result->bind_param("ss", $chair, $user_id);
    $result->execute();
    
    //If the action of update chair and appers the name of theperson reserve 
}

// if action is delete then delete the record
if($action == "delete") {
    $result = $mysql->prepare("DELETE FROM chairsadmin WHERE id = ?");
    $result->bind_param("s", $chair);
    $result->execute();
}
?>