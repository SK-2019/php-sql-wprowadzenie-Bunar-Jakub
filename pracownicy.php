<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakub Bunar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class=nav>
    <a href="pracownicy.php">Pracownicy</a>
    <a href="organizacja.php">Pracownicy i Organizacja</a>
    <a href="funkcje.php">Funkcje Agrygujące</a>
    <a href="dataczas.php">Data i Czas</a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Bunar-Jakub">Github</a>
    <a href="formularz.html">Zakładka testowa</a>
    <a href="daneDoBazy.php">Dane Do Bazy</a>
    <a href="ksiazki.php">Ksiazki</a>
</div>
<?php

    require("connect.php");
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
    require("connect.php");
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
    require("connect.php");
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
