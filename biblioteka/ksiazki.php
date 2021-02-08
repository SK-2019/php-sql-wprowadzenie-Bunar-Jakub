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
<div class="heading">
<h1>Jakub Bunar nr3</h1>
</div>
<div class=nav>
    <a class="navlink" href="https://github.com/SK-2019/php-sql-wprowadzenie-Bunar-Jakub">Github</a>
    <a class="navlink" href="../pracownicy/pracownicy.php">Pracownicy</a>
    <a class="navlink" href="../pracownicy/organizacja.php">Pracownicy i Organizacja</a>
    <a class="navlink" href="../pracownicy/funkcje.php">Funkcje Agregujące</a>
    <a class="navlink" href="../pracownicy/dataczas.php">Data i Czas</a>
    <a class="navlink" href="../pracownicy/formularz.html">Zakładka testowa</a>
    <a class="navlink" href="../pracownicy/daneDoBazy.php">Dane Do Bazy</a>
    <a class="navlink" href="ksiazki.php">Ksiazki</a>
</div>
<div class="php">
<?php

require("../assets/connect.php");

$sql = ("SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id");
echo("<h2>".$sql."</h2>");

$result=$conn->query($sql);
     echo("<table border=1>");
     echo("<th>Id</th>");
     echo("<th>Autor</th>");
     echo("<th>Tytuł</th>");

       while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>");
                echo("</tr>");
            }
        echo("</table>");


$sql = ("SELECT * from biblAutor");
echo("<h2>".$sql."</h2>");

$result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Id</th>");
        echo("<th>Autorzy</th>");

        while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td>");
                echo("</tr>");
            }
        echo("</table>");


        
            $sql = ("SELECT * from biblTytul");
            echo("<h2>".$sql."</h2>");
            
            $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Tytuł</th>");

            
                    while($row=$result->fetch_assoc()) {
                            echo("<tr>");
                                echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>");
                            echo("</tr>");
                        }
                    echo("</table>");
?>
    </div>
</div>