<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>

    <?php

    include "connection.php";

    if (isset($_POST["Add"])) {
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];

        $result = $mysql->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
        $result->bind_param("sss", $user, $pass, $email);
        $result->execute();
    }

    if (isset($_POST["delete_record"])) {
        $id = $_POST["id"];
        $result = $mysql->prepare("DELETE FROM users WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
    }

    $result = $mysql->query("SELECT * FROM USERS");
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    //var_dump($rows);
    //var_dump($rows[0]["email"]);

    ?>

    <table class="table table-stripped container-fluid">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        <?php
        foreach ($rows as $row) {
            echo "<tr>
            <td>$row[id]</td>
            <td>$row[username]</td>
            <td>$row[password]</td>
            <td>$row[email]</td>
            <td>
                <div class=\"actions\">
                    <form action=\"user.php\" method=\"POST\">
                        <input class=\"btn btn_sm btn-danger\"type=\"submit\" name=\"delete_record\" value=\"Delete\"/>
                        <input type=\"hidden\" name=\"id\" value=$row[id] />
                    </form>
                </div>
            </td>
            </tr>";
        }
        ?>
    </table>

    <form action="user.php" method="POST" class="container-fluid">
        <div class="form-group">
            <label for="">Username: </label>
            <input type="text" class="form-control" name="user">
        </div>
        <div class="form-group">
            <label for="">Password: </label>
            <input type="password" class="form-control" name="pass">
        </div>
        <div class="form-group">
            <label for="">Email: </label>
            <input type="text" class="form-control" name="email">
        </div>
        <br>

        <div>
            <input type="submit" name="Add" value="New User" class="btn btn-primary">
        </div>
    </form>

</body>

</html>