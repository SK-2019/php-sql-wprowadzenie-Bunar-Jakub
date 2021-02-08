<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Tekst</title>
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

echo("<h2> Imie:".$_POST["imie"]."</h2>");
echo("<h2> Nazwisko:".$_POST["nazwisko"]."</h2>");
echo("<h2> Nr.Tel:".$_POST["tel"]."</h2>");
echo("<h2> Kod Pocztowy:".$_POST["post"]."</h2>");
echo("<h2> Miasto:".$_POST["city"]."</h2>");



?>
    
</body>
</html>
</div>
</div>