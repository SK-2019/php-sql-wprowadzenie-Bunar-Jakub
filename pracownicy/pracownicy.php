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
<div class="php">
<?php
    require("../assets/connect.php");
    echo("Pracownicy tylko z działu 2");
        $result = $conn->query('SELECT imie, zarobki, data_urodzenia, dzial FROM pracownicy WHERE dzial=2');
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");

            echo("</tr>");
        }

        echo("</table>");
    echo("Pracownicy tylko z działu 2 i działu 3");
        $result = $conn->query('SELECT imie, zarobki, data_urodzenia, dzial FROM pracownicy WHERE (dzial=2 or dzial=3)');
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");
        
            echo("</tr>");
        }

        echo("</table>");
    echo("Pracownicy których zarobki są mniejsze niż 30");
        $result = $conn->query('SELECT imie, zarobki, data_urodzenia, dzial FROM pracownicy WHERE (zarobki<30)');
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");

            echo("</tr>");        
        }
        
        echo("</table>");
        
?>
    
</body>
</html>
</div>
</div>