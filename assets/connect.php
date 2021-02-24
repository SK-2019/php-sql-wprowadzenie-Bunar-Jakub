<?php

$servername = $_SERVER['servername'];
$username = $_SERVER['username'];
$password = $_SERVER['password'];
$dbname = $_SERVER['dbname'];

$hostname = $_SERVER['HTTP_HOST'];
    if ($hostname == 'localhost:8003') {
        require_once ("config.php");
    }

$conn= new mysqli($servername , $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed: ".mysqli_connect_error());

    }

?>
