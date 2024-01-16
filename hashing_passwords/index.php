<?php

$password = "Deyabakheet";
$anotherHashedPassword = password_hash($password, PASSWORD_ARGON2ID);
$hashedPassword = md5($password);
echo $hashedPassword;
echo "<bR>";
echo $anotherHashedPassword;



if (password_verify($password, $anotherHashedPassword)) {
    echo '<br>'.'Password is valid!' .'<br>';
} else {
    echo '<br>'.'Invalid password.' .'<br>';
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