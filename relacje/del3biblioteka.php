<?php
require("../assets/connect.php");
$sql = "DELETE FROM tytul where id='".$_POST['id']."'";
$conn->query($sql);
header("location:biblioteka.php");
?>