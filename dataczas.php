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


</div>
    
<?php

require("connect.php");
echo("<h2>Wiek poszczególnych pracowników</h2>");
    $result = $conn->query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
echo("<h2>Wiek poszczególnych pracowników z działu serwis</h2>");
    $result = $conn->query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=1');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia</th>");
        echo("<th>Wiek<th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]);
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
echo("<h2>Suma lat wszystkich pracowników</h2>");
    $result = $conn->query('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat FROM pracownicy');
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["suma_lat"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");
            
require("connect.php");
echo("<h2>Suma lat pracowników z działu handel</h2>");
    $result = $conn->query('SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia) AS suma_ha FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=3');
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["suma_ha"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");
            
require("connect.php");
echo("<h2>Suma lat kobiet</h2>");
    $result = $conn->query('SELECT  SUM(YEAR(curdate())-YEAR(data_urodzenia) AS suma_f FROM pracownicy WHERE imie like "%a"');
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["suma_f"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
echo("<h2>Suma lat mężczyzn</h2>");
    $result = $conn->query('SELECT  SUM(YEAR(curdate())-YEAR(data_urodzenia) AS suma_m FROM pracownicy WHERE imie not like "%a"');
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["suma_m"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
echo("<h2>Średnia lat pracowników w poszczególnych działach</h2>");
    $result = $conn->query('SELECT  AVG(YEAR(curdate())-YEAR(data_urodzenia) AS avg_age, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial group by dzial');
        echo("<table border=1>");
        echo("<th>Średni Wiek</th>");
        echo("<th>dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["avg_age"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");







?>

</body>
</html>
