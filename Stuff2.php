<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

 <div>

</div>
    
    
<?php
    
include("connect.php");
echo("<h2> Imie:".$_POST["Firstname"]."</h2>");
echo("<h2> Nazwisko:".$_POST["Lastname"]."</h2>");
echo("<h2> Nr.Tel:".$_POST["Phone"]."</h2>");
echo("<h2> Miasto:".$_POST["City"]."</h2>");
echo("<h2> Kod Pocztowy:".$_POST["Postcode"]."</h2>");
    
require("connect.php");
$sql="INSERT INTO 'pracownicy'('id', 'imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES(
        null,
        $_POST['imie'],
        $_POST['dzial'],
        $_POST['zarobki'],
        $_POST['data_urodzenia'],
        ");

$conn->query($sql);
$sql2='SELECT * FROM pracownicy'
echo($sql2)
?>
    
</body>
</html>
