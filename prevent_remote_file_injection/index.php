<?php


// you can disable this from php.ini file just make [allow_url_include=Off]
// Whether to allow include/require to open URLs (like https:// or ftp://) as files.
// https://php.net/allow-url-include
// allow_url_include=Off
if(isset($_GET['page'])){

    $page = $_GET['page'];
    $allowedPages = array('test.html', 'demo.php');
    if (in_array($page, $allowedPages)) {
        # code...
        
        require_once($page);

    }else{
        echo "This page is not allowed to Include";
    }
   
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