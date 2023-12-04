<?php
$serve = 'mysql:host=localhost;database_name=test';
$user_name = 'root';
$password = 'Diaa@2010856015';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try{
    $connect = new PDO($serve, $user_name, $password, $option);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection Faild'. $e->getMessage();
}