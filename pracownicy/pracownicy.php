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
<div class="heading"><h1>Jakub Bunar nr3</h1></div>
<div class="nav">
    <a class="navlink" href="pracownicy.php">Pracownicy</a>
    <a class="navlink" href="organizacja.php">Pracownicy i Organizacja</a>
    <a class="navlink" href="funkcje.php">Funkcje Agregujące</a>
    <a class="navlink" href="dataczas.php">Data i Czas</a>
    <a class="navlink" href="https://github.com/SK-2019/php-sql-wprowadzenie-Bunar-Jakub">Github</a>
    <a class="navlink" href="formularz.html">Zakładka testowa</a>
    <a class="navlink" href="daneDoBazy.php">Dane Do Bazy</a>
    <a class="navlink" href="../biblioteka/ksiazki.php">Ksiazki</a>
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