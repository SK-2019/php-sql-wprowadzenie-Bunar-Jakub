<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakub Bunar</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<h1>Jakub Bunar nr3</h1>
<div class=nav>
    <a class=navlink href="pracownicy.php">Pracownicy</a>
    <a class=navlink href="organizacja.php">Pracownicy i Organizacja</a>
    <a class=navlink href="funkcje.php">Funkcje Agregujące</a>
    <a class=navlink href="dataczas.php">Data i Czas</a>
    <a class=navlink href="https://github.com/SK-2019/php-sql-wprowadzenie-Bunar-Jakub">Github</a>
    <a class=navlink href="formularz.html">Zakładka testowa</a>
    <a class=navlink href="daneDoBazy.php">Dane Do Bazy</a>
    <a class=navlink href="../biblioteka/ksiazki.php">Ksiazki</a>
    


</div>
<?php
 
require("../assets/connect.php");
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

$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=3 order by imie asc');
echo("<h2>Pracownicy z działu 3 posortowani rosnąco po imieniu</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie like "%a" order by imie asc');
echo("<h2>Kobiety posortowane rosnąco po imieniu</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
        
    echo("</table>");

$sql = ('SELECT imie, zarobki, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND (dzial=1 or dzial=3) AND imie like "%a" order by zarobki asc');
echo("<h2>Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }

    echo("</table>");

$sql = ('SELECT imie, zarobki, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie not like "%a" order by dzial asc, zarobki asc ');
echo("<h2>Mężczyźni posortowani rosnąco: po nazwie działu a następnie po wysokości zarobków</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
         echo("</table>");

echo("<h1> LIMIT <h1>");


$sql = ("SELECT * FROM pracownicy, organizacja WHERE dzial=id_org and dzial=4 ORDER BY zarobki asc LIMIT 2");
echo("<h2>Najlepiej zarabiający z działu 4</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
         echo("</table>");


$sql = ("SELECT * FROM pracownicy, organizacja WHERE dzial=id_org and (dzial=4 or dzial=2) and imie like '%a' ORDER BY zarobki asc LIMIT 3");
echo("<h2>Najlepiej zarabiający z działu 4</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
         echo("</table>");


$sql = ("SELECT * FROM pracownicy ORDER BY data_urodzenia ASC LIMIT 1");
echo("<h2>Najstarszy mężczyzna</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");
    
    

?>
    
</body>
</html>
