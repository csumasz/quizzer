<?php

session_start();
    //Create connection credentails
$db_host = "localhost";
$db_name = "quizzer";
$db_user = "root";
$db_password = "";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
if($mysqli->connect_error){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>