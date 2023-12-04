<?php
include 'db_connect.php';
global $conn;


if (isset($_GET['id']) && !empty($_GET['id'])){

    // $userId = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $stmt = $connect->prepare("SELECT * FROM user WHERE id=1");

    $stmt->execute(array($userId));

    $connect = $stmt->rowCount();

    while ($row = $stmt->fetch()){

        $id = $row['id'];

        $name = $row['name'];
    }
    if ($connect > 0){
        echo $name;
    }else{
        echo "There is No Profile With this ID";
        echo $userId;
    }

}else{
    echo 'Profile ID Cannot Be Empty';
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