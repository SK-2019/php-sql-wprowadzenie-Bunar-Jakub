<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("connect.php");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO Pracownik (null, imie, dzial, zarobki, data_urodzenia) 
           VALUES (null,'Ksawery', 3, 36,'1995-10-21')";
    
    
    $conn->query($sql);
    
    $conn->close();
    ?>
</body>
</html>