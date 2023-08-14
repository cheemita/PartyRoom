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
    $newPackagesValue = "familiar";
    
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


if ($user_result != null && $token === $token_result && $packages_result === "familiar") {
    // Token válido
    $_SESSION["authInv"] = $user_result;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token; // Si es necesario almacenar el token en la sesión

    header("Location: RoomInvited3.php");
} else {
    // Token inválido
    echo "<script>alert('Invalid token. Please enter the correct token or your token is not the right package.'); window.location.href='Admin.php';</script>";

    echo "<script>alert('Invalid token. Please enter the correct token or your token no is the right packages'); window.location.href='Admin.php';</script>";

}
?>
