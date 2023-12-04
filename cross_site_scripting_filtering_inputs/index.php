<?php
if(isset($_GET['search'])){
    // Strip tags and HTML-encode double and single quotes, 
    // optionally strip or encode special characters. 
    // Encoding quotes can be disabled by setting
    echo filter_var($_GET['search'], FILTER_SANITIZE_STRING);
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