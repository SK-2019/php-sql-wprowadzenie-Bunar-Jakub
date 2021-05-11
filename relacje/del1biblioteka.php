<?php
require("../assets/connect.php");
$sql = "DELETE FROM autor_tytul where id='".$_POST['id']."'";
$conn->query($sql);
header("location:biblioteka.php");
?>