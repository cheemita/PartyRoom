<?php
session_start();
include "connection.php";

// Create the "room2" table if it doesn't exist
$sql_create_table = "CREATE TABLE IF NOT EXISTS basic (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idUser INT NOT NULL,
    numMesas INT NOT NULL,
    numInvitados INT NOT NULL,
    tipoFiesta VARCHAR(255) NOT NULL,
    tipoComida VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Perform the table creation query
if ($mysql->query($sql_create_table) === TRUE) {
    echo "Table 'basic' created successfully.<br>";
} else {
    echo "Error creating table: " . $mysql->error . "<br>";
}

$numMesas = $_POST["numMesas"];
$numInvitados = $_POST["numInvitados"];
$user_id = $_SESSION["id"];
$tipoFiesta = $_POST["tipoFiesta"];
$tipoComida = $_POST["tipoComida"];

// Create an SQL query to insert the form data into the table
$sql_insert_data = "INSERT INTO basic (idUser, numMesas, numInvitados, tipoFiesta, tipoComida)
        VALUES (?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $mysql->prepare($sql_insert_data);

// Bind the parameters
$stmt->bind_param("sssss", $user_id, $numMesas, $numInvitados, $tipoFiesta, $tipoComida);

// Execute the statement
if ($stmt->execute()) {
    // If the query is successful, redirect to a success page or do any other desired action
    header("Location: RoomAdmin1.php");
    exit;
} else {
    // If there's an error with the query, you can handle it accordingly
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$mysql->close();
?>
