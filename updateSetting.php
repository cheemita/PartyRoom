<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $confirmPass = $_POST["confirm_password"];

    // Check if the new password and confirmation match
    if ($pass !== $confirmPass) {
        // Passwords do not match
        // TODO: Handle password mismatch (e.g., display an error message).
    } else {
        // TODO: Hash the password using password_hash() before storing it in the database.

        $result = $mysql->prepare("UPDATE users SET password=?, email=? WHERE username=?");
        $result->bind_param("sss", $pass, $email, $user);
        $result->execute();

        // Check if the update was successful
        if ($result->affected_rows > 0) {
            // Update successful
            $_SESSION["auth"] = $user;
            $_SESSION["email"] = $email;
            header("Location: Admin.php");
            exit();
        } else {
            // Update failed
            // TODO: Handle update failure (e.g., display an error message).
        }
    }
}
?>
