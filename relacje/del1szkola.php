<?php
require("../assets/connect.php");
$sql = "DELETE FROM nauczyciel_klasa where id='".$_POST['id']."'";
$conn->query($sql);
header("location:szkola.php");
?>