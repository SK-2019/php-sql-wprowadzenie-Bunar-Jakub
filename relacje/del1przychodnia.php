<?php
require("../assets/connect.php");
$sql = "DELETE FROM lekarz_pacjent where id='".$_POST['id']."'";
$conn->query($sql);
header("location:przychodnia.php");
?>