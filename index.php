<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakub Bunar</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    
<div class=nav>
<?php
include("assets/header.php");
include("assets/menu.php");
?>
</div>

     <form action="strona.php" method="POST">
        <input type="text" name="name">
        <input type="submit" value="wyślij do strona.php">
    </form>
<div class="php">
<?php
echo("Data i czas : " .date ("Y-m-d h:i:sa"));
echo("<br>");
require_once("assets/connect.php");
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
