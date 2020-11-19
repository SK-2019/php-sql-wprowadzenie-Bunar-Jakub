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
    
$sql="INSERT INTO 'pracownicy'('id', 'imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES (null,'józef',2,23,'2001-10-23')";
$conn->query($sql);

?>
    
</body>
</html>
