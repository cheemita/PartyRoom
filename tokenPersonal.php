<?php
session_start();
include "connection.php";

$token = $_POST["token"];
$user = $_POST["user"];
<<<<<<< HEAD
$newPackagesValue = "personal";
=======
>>>>>>> b1840815f2567af98bfaafb192b96b9c4d8045f9

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
    $newPackagesValue = "personal";

    // Verificar si ya existe un valor en la columna 'packages' para el usuario
    $selectQuery = $mysql->prepare("SELECT packages FROM USERS WHERE username = ?");
    $selectQuery->bind_param("s", $user);
    $selectQuery->execute();
    $selectQuery->bind_result($existingPackagesValue);
    $selectQuery->fetch();
    $selectQuery->close();

    // Si no hay un valor existente en 'packages', proceder con la actualización
    if ($existingPackagesValue === null) {
        $updateQuery = $mysql->prepare("UPDATE USERS SET packages = ? WHERE username = ?");
        
        // Verificar si la preparación de la consulta fue exitosa
        if ($updateQuery) {
            $updateQuery->bind_param("ss", $newPackagesValue, $user);
            $updateQuery->execute();
            $updateQuery->close();
        } else {
            // Mostrar un mensaje de error si la preparación de la consulta falla
            die("Error in prepare: " . $mysql->error);
        }
    }
}



if ($user_result != null && $token === $token_result && $packages_result === "personal") {

<<<<<<< HEAD
=======
if ($user_result != null && $token === $token_result && $packages_result === "personal") {
>>>>>>> b1840815f2567af98bfaafb192b96b9c4d8045f9
    // Token válido
    $_SESSION["authInv"] = $user_result;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token; // Si es necesario almacenar el token en la sesión

    header("Location: RoomInvited2.php");
} else {
    // Token inválido
    echo "<script>alert('Invalid token. Please enter the correct token or your token is not the right package.'); window.location.href='Admin.php';</script>";
}
?>
