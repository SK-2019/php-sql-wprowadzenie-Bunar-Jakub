<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
    require("connect.php");
    echo("<h2>Zadanie 1: SELECT * FROM pracownicy</h2>");
    $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 2: SELECT * FROM pracownicy where imie like %a</h2>");
        $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT * FROM pracownicy where imie like "%a"'); 
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 3: SELECT * FROM pracownicy where (dzial=1 or dzial=3)</h2>");  
        $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT * FROM pracownicy where (dzial=1 or dzial=3)'); 
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 4: SELECT * FROM pracownicy where dzial=2</h2>");
        $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT * FROM pracownicy where dzial=2');
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 5: SELECT * FROM pracownicy where zarobki>=40</h2>");
        $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT * FROM pracownicy where zarobki>=40'); 
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
?>
    
</body>
</html>

