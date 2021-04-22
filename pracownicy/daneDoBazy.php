<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakub Bunar</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container">
<div class=nav>
<?php
include("../assets/header.php");
include("../assets/menu.php");
?>
</div>



    <form action="insert.php" method="post">
        <input type="text" name="imie" placeholder="Imię"></br>
        <input type="number" name="dzial" placeholder="Dział"></br>
        <input type="number" name="zarobki" placeholder="Zarobki"></br>
        <input type="date" name="data_urodzenia" placeholder="Data Urodzenia"></br>
        <input type="submit" value="Dodaj">
    </form>
    <br>
    <form action="delete.php" method="post">
        <input type="number" name="id" placeholder="ID pracownika"></br>
     
        <input type="submit" value="Usun">
    </form>  
 
<div class="php">
<?php

require("../assets/connect.php");
    $sql = ('SELECT * FROM pracownicy');
    echo("<h2>Pracownicy</h2>");
    echo("<h3>".$sql."</h3>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
            echo("<th>Usuń Pracownika</th>");
            while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>
                <td>
                    <form action='delete.php' method='POST'>
                        <input type='text' name='id' value='".$row['id_pracownicy']."' hidden></br>
                        <input type='submit' value='Usuń'>
                    </form>
                    </td>
                    ");


            echo("</tr>");
        }

        echo("</table>");


?>


</body>
</html>
</div>
</div>