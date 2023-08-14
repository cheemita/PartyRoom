<?php

include "../connection.php";

$statement = "
    SELECT c.id, c.idUser, IFNULL(s.fullname,'') AS user
<<<<<<< HEAD
    FROM family c LEFT JOIN users s ON s.id = c.idUser";
=======
    FROM chairsadminfamily c LEFT JOIN users s ON s.id = c.idUser";
>>>>>>> b1840815f2567af98bfaafb192b96b9c4d8045f9

$result = $mysql->query($statement);
$rows = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($rows);

?>