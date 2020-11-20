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
    


</div>
<?php
 
require("connect.php");
echo("<h2>Pracownicy z nazwą działów</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");
require("connect.php");
echo("<h2>Pracownicy tylko z działu 1 i 4</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND (dzial=1 or dzial=4)');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");

require("connect.php");
echo("<h2>Lista kobiet z nazwami działów</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie like "%a"');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");
    
require("connect.php");
echo("<h2>Lista mężczyzn z nazwami działów</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie not like "%a"');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");

require("connect.php");
echo("<h2>Pracownicy posortowani malejąco</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org order by imie desc');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         } 
    echo("</table>");


    
    

?>
    
</body>
</html>
