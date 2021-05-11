<?php
require("../assets/connect.php");
$sql = "DELETE FROM lekarz where id='".$_POST['id']."'";
$conn->query($sql);
header("location:przychodnia.php");
?>