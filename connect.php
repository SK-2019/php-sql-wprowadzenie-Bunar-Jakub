<?php
$conn= new mysqli('mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka');
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());

}
?>