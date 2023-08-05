<?php
session_start();
include "connection.php";

$user = $_POST["user"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$pass = $_POST["password"];
$token = $_POST["token"];
$packages = ""; // Variable para almacenar el paquete seleccionado



$adminUsername = $_POST["admin"]; // Suponiendo que guardas el nombre de usuario del administrador en la sesión
$stmt = $mysql->prepare("SELECT token FROM users WHERE username = ? LIMIT 1");
$stmt->bind_param("s", $adminUsername);
$stmt->execute();
$stmt->bind_result($adminTokenFromDB);
$stmt->fetch();
$stmt->close();

if ($token !== $adminTokenFromDB && $adminTokenFromDB == "PER") {
    $packages = "personal";
    echo '<script>alert("Token inválido. No estás autorizado para realizar esta acción."); window.location.href = "Admin.php";</script>';
    exit; // Detener la ejecución del script para evitar la inserción del usuario no autorizado
}else if($token !== $adminTokenFromDB && $adminTokenFromDB == "BAS"){
    $packages = "basico";
}else if($token !== $adminTokenFromDB && $adminTokenFromDB == "FAM"){
    $packages = "familiar";
}

// Verificar si el nombre de usuario ya existe en la base de datos
$result_check_user = $mysql->prepare("SELECT id FROM users WHERE username = ?");
$result_check_user->bind_param("s", $user);
$result_check_user->execute();
$result_check_user->store_result();
$num_rows = $result_check_user->num_rows;

if ($num_rows > 0) {
    // Usuario ya existe en la base de datos, mostrar alerta
    echo '<script>alert("El nombre de usuario ya está ocupado. Por favor, elige otro nombre de usuario."); window.location.href = "index.php";</script>';
    exit; // Detener la ejecución del script para evitar la inserción del usuario duplicado
}

// Cambiar el valor de $token a "invited"
$type = "invited";

// Insertar el nuevo usuario en la base de datos
$result = $mysql->prepare("INSERT INTO users (username, password, email, fullname, token, packages, type) VALUES (?, ?, ?, ?, ?, ?, ?)");
$result->bind_param("sssssss", $user, $pass, $email, $fullname, $token, $packages, $type);
$result->execute();

$result2 = $mysql->prepare("SELECT username, email, id FROM USERS WHERE username = ? AND password = ?");
$result2->bind_param("ss", $user, $pass);
$result2->execute();

$result2->bind_result($user_result, $email_result, $id_result);
$result2->fetch();

var_dump($user_result, $email_result, $id_result);

if ($user_result != null) {
    // Usuario válido
    $_SESSION["authInv"] = $user;
    $_SESSION["id"] = $id_result;
    $_SESSION["email"] = $email_result;
    $_SESSION["token"] = $token; // Guardar el valor de $token en la sesión
    $_SESSION["packages"] = $packages;
    header("Location: Admin.php");
} else {
    // Usuario inválido
    session_destroy();
}
?>
