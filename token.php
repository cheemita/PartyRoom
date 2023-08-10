<?php
session_start();
include "connection.php";

$token = $_POST["token"];
$user = $_POST["user"];

// Check if the submitted username matches the currently logged-in user
if ($user !== $_SESSION["authInv"]) {
    echo "<script>alert('Invalid username. Please enter the correct username.'); window.location.href='Admin.php';</script>";
    exit();
}

$result = $mysql->prepare("SELECT username, email, id, token, packages FROM USERS WHERE username = ?");
$result->bind_param("s", $user);
$result->execute();

$result->bind_result($user_result, $email_result, $id_result, $token_result, $packages_result);
$result->fetch();
$result->close();


if ($token === $token_result) {
    $newPackagesValue = "basico";
    
    // Verificar si ya existe un registro con el valor deseado en 'packages'
    $checkQuery = $mysql->prepare("SELECT username FROM USERS WHERE packages = ?");
    
    if ($checkQuery) {
        $checkQuery->bind_param("s", $newPackagesValue);
        $checkQuery->execute();
        $checkQuery->store_result();
        
        // Si ya existe un registro, no es necesario actualizar
        if ($checkQuery->num_rows === 0) {
            $updateQuery = $mysql->prepare("UPDATE USERS SET packages = ? WHERE username = ?");
            
            if ($updateQuery) {
                $updateQuery->bind_param("ss", $newPackagesValue, $user);
                $updateQuery->execute();
                $updateQuery->close();
            } else {
                die("Error in prepare: " . $mysql->error);
            }
        } else {
            echo "El valor ya existe en 'packages'. No se realiza ninguna actualización.";
        }
        
        $checkQuery->close();
    } else {
        die("Error in prepare: " . $mysql->error);
    }
}




if ($user_result != null && $token === $token_result && $packages_result === "basico") {

<<<<<<< HEAD
=======
if ($user_result != null && $token === $token_result && $packages_result === "basico") {
>>>>>>> b1840815f2567af98bfaafb192b96b9c4d8045f9
    // Token válido
    $_SESSION["authInv"] = $user_result;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token; // Si es necesario almacenar el token en la sesión

    // Free the result and close the statement before running the new query
    $result->close();
    $mysql->next_result();

    // Check if the "room1" table exists in the database
    $check_table_sql = "SHOW TABLES LIKE 'room1'";
    $table_result = $mysql->query($check_table_sql);

    if (!$table_result) {
        // Error occurred while querying the database
        echo "Error checking table existence: " . mysqli_error($mysql);
        exit();
    }

    $table_exists = $table_result->num_rows > 0;

    if ($table_exists) {
        header("Location: RoomInvited1.php");
    } else {
        header("Location: createRoom.php");
    }
} else {
    // Token inválido
<<<<<<< HEAD
    echo "<script>alert('Invalid token. Please enter the correct token or your token is not the right package.'); window.location.href='Admin.php';</script>";
=======
    echo "<script>alert('Invalid token. Please enter the correct token or your token no is the right packages'); window.location.href='Admin.php';</script>";
>>>>>>> b1840815f2567af98bfaafb192b96b9c4d8045f9
}
?>
