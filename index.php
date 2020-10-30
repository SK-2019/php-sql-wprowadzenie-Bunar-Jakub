<?php
    $conn = new mysqli("mysql-jakub-bunar.alwaysdata.net","217227","Jakub200318","jakub-bunar_fajnanauka");  
    $result = $conn->query('SELECT * FROM pracownicy');
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