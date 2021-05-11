<?php
require("../assets/connect.php");
$sql = "DELETE FROM autor where id='".$_POST['id']."'";
$conn->query($sql);
header("location:biblioteka.php");
?>