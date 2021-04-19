<?php

$servername = $_SERVER['servername'];
$username = $_SERVER['username'];
$password = $_SERVER['password'];
$dbname = $_SERVER['dbname'];

$hostname = $_SERVER['HTTP_HOST']; 
// echo("<li> hostname : ".$hostname);
// echo("<li> SERVER passsword: ".$_SERVER['password']);

    if ($hostname == 'bunar-jakub.herokuapp.com') {
        require_once ("config.php");
    }

$conn= new mysqli($servername , $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed: ".mysqli_connect_error());

    }
?>