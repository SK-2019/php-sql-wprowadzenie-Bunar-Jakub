<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakub Bunar</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h1>Jakub Bunar nr3</h1>    

<div class=nav>
    <a class=navlink href="pracownicy/pracownicy.php">Pracownicy</a>
    <a class=navlink href="pracownicy/organizacja.php">Pracownicy i Organizacja</a>
    <a class=navlink href="pracownicy/funkcje.php">Funkcje Agregujące</a>
    <a class=navlink href="pracownicy/dataczas.php">Data i Czas</a>
    <a class=navlink href="https://github.com/SK-2019/php-sql-wprowadzenie-Bunar-Jakub">Github</a>
    <a class=navlink href="pracownicy/formularz.html">Zakładka testowa</a>
    <a class=navlink href="pracownicy/daneDoBazy.php">WIP</a>
    <a class=navlink href="pracownicy/delete.html">Delete(wip)</a>
    <a class=navlink href="biblioteka/ksiazki.php">Ksiazki</a>
</div>

     <form action="strona.php" method="POST">
        <input type="text" name="name">
        <input type="submit" value="wyślij do strona.php">
    </form>
<div class="php">
<?php
echo("Data i czas : " .date ("Y-m-d h:i:sa"));
echo("<br>");
require("assets/connect.php");
    echo("Wszyscy pracownicy");
        $result = $conn->query('SELECT * from pracownicy');
            echo("<table border=1>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Dzial</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data Urodzenia</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");

            echo("</tr>");
        }

        echo("</table>");
?>
</div>
    
</body>
</html>
