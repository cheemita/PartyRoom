<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $confirmPass = $_POST["confirm_password"];
    $newUsername = $_POST["new_username"];

    // Check if the new password and confirmation match
    if ($pass !== $confirmPass) {
        echo '<script>alert("La nueva contraseña y la confirmación de contraseña no coinciden. Por favor, inténtalo de nuevo."); window.location.href = "Setting.php";</script>';
    } else {
        // TODO: Hash the password using password_hash() before storing it in the database.
        // ...

        // Check if the new username is already taken
        $result_check_user = $mysql->prepare("SELECT id FROM users WHERE username = ?");
        $result_check_user->bind_param("s", $newUsername);
        $result_check_user->execute();
        $result_check_user->store_result();
        $num_rows = $result_check_user->num_rows;

        if ($num_rows > 0) {
            // New username is already taken, show alert
            echo '<script>alert("El nuevo nombre de usuario ya está ocupado. Por favor, elige otro nombre de usuario."); window.location.href = "Setting.php";</script>';
            exit; // Stop further execution to avoid updating with a duplicate username
        }

        // Update the user information in the database, including the username
        $result = $mysql->prepare("UPDATE users SET password=?, email=?, username=? WHERE username=?");
        $result->bind_param("ssss", $pass, $email, $newUsername, $user);
        $result->execute();

        // Check if the update was successful
        if ($result->affected_rows > 0) {
            // Update successful
            $_SESSION["auth"] = $newUsername; // Update the session with the new username
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
