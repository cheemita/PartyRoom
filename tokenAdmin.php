<?php
session_start();
include "connection.php";

$token = $_POST["token"];
$user = $_POST["user"];

// Check if the submitted username matches the currently logged-in user
if ($user !== $_SESSION["auth"]) {
    echo "<script>alert('Invalid username. Please enter the correct username.'); window.location.href='Admin.php';</script>";
    exit();
}

$result = $mysql->prepare("SELECT username, email, id, token, packages FROM USERS WHERE username = ?");
$result->bind_param("s", $user);
$result->execute();

$result->bind_result($user_result, $email_result, $id_result, $token_result, $packages_result);
$result->fetch();

<<<<<<< HEAD
if ($user_result != null && $token === $token_result && $packages_result === "basico") {
=======
if ($user_result != null && $token === $token_result && $packages_result === "basico" ) {
>>>>>>> b1840815f2567af98bfaafb192b96b9c4d8045f9
    // Token válido
    $_SESSION["auth"] = $user_result;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token; // Si es necesario almacenar el token en la sesión

    // Free the result and close the statement before running the new query
    $result->close();
    $mysql->next_result();

    // Check if the "room1" table exists in the database
    $check_table_sql = "SHOW TABLES LIKE 'basic'";
    $table_result = $mysql->query($check_table_sql);

    if (!$table_result) {
        // Error occurred while querying the database
        echo "Error checking table existence: " . mysqli_error($mysql);
        exit();
    }

    $table_exists = $table_result->num_rows > 0;

    if ($table_exists) {
        header("Location: RoomAdmin1.php");
    } else {
        header("Location: createBasic.php");
    }
} else {
    // Token inválido
    echo "<script>alert('Invalid token. Please enter the correct token or your token no is the right packages'); window.location.href='Admin.php';</script>";
}
?>
