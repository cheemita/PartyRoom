<?php

include "../connection.php";

$statement = "
    SELECT c.id, c.idUser, IFNULL(s.fullname,'') AS user
    FROM chairspersonal c LEFT JOIN users s ON s.id = c.idUser";

$result = $mysql->query($statement);
$rows = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($rows);

?>