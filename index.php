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
    echo("<h2>SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org</h2>");
    $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["Imie"]."</td><td>".$row["Zarobki"]."</td><td>".$row["Data_Urodzenia"]."</td><td>".$row["Nazwa_Działu"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 2: SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like %a</h2>");
        $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a"'); 
        echo("<table border=1>");
        echo("<th>Imie</th>"); 
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["Imie"]."</td><td>".$row["Zarobki"]."</td><td>".$row["Data_Urodzenia"]."</td><td>".$row["Nazwa_Działu"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 3: SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and (dzial=1 or dzial=3)</h2>");  
        $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and (dzial=1 or dzial=3)'); 
        echo("<table border=1>");
        echo("<th>Imie</th>"); 
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["Imie"]."</td><td>".$row["Zarobki"]."</td><td>".$row["Data_Urodzenia"]."</td><td>".$row["Nazwa_Działu"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 4: SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and dzial = 2");
        $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and dzial = 2');
        echo("<table border=1>");
        echo("<th>Imie</th>"); 
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["Imie"]."</td><td>".$row["Zarobki"]."</td><td>".$row["Data_Urodzenia"]."</td><td>".$row["Nazwa_Działu"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 5: SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki>=40</h2>");
        $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki>=40'); 
        echo("<table border=1>");
        echo("<th>Imie</th>"); 
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["Imie"]."</td><td>".$row["Zarobki"]."</td><td>".$row["Data_Urodzenia"]."</td><td>".$row["Nazwa_Działu"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
?>
    
</body>
</html>

