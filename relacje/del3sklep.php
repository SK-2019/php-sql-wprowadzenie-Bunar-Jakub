<?php
require("../assets/connect.php");
$sql = "DELETE FROM produkt where id='".$_POST['id']."'";
$conn->query($sql);
header("location:sklep.php");
?>