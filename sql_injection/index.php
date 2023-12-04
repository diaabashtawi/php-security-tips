<?php
include 'db_connect.php';




$sql_query = $connect->prepare("SELECT * FROM `user` WHERE id = 1");
$sql_query->execute();
$connect = $sql_query->rowCount();
while ($row = $sql_query->fetch()) {
    $id = $row['id'];
    $name = $row['name'];
}



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Security Tips</title>
</head>

<body>

</body>

</html>