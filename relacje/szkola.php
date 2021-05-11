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
<div class=nav>
<?php
include("../assets/header.php");
include("../assets/menu.php");
?>
</div>
<div class="php">
<?php

require_once("../assets/connect.php");
    echo("<h1>Szkoła</h1>");

    $sql = ("SELECT * FROM nauczyciel");
    echo("<h2>".$sql."</h2>");
    $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>nauczyciel</th>");

            while($row=$result->fetch_assoc()) {
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["nauczyciel"]."</td>");
                        echo("<td><form action='del2szkola.php' method=POST>");
                        echo("<input type='hidden' name='id' value='".$row['id']."'><input type='submit' value='DELETE'>");
                        echo("</form></td>");
                    echo("</tr>");
                }
            echo("</table>");

    
    $sql = ("SELECT * FROM klasa");
    echo("<h2>".$sql."</h2>");
    $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>klasa</th>");

            while($row=$result->fetch_assoc()) {
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["klasa"]."</td>");
                        echo("<td><form action='del3szkola.php' method=POST>");
                        echo("<input type='hidden' name='id' value='".$row['id']."'><input type='submit' value='DELETE'>");
                        echo("</form></td>");
                    echo("</tr>");
                }
            echo("</table>");


            $sql = ("SELECT *, nauczyciel_klasa.id as nkid FROM nauczyciel, klasa, nauczyciel_klasa where nauczyciel_id = nauczyciel.id and klasa_id = klasa.id");
            echo("<h2>".$sql."</h2>");
            $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<th>klasa</th>");
                    echo("<th>nauczyciel</th>");

                    while($row=$result->fetch_assoc()) {
                            echo("<tr>");
                                echo("<td>".$row["klasa"]."</td><td>".$row["nauczyciel"]."</td>");
                                echo("<td><form action='del1szkola.php' method=POST>");
                                echo("<input type='hidden' name='id' value='".$row['nkid']."'><input type='submit' value='DELETE'>");
                                echo("</form></td>");
                            echo("</tr>");
                        }
                    echo("</table>");

?>
</div>
</div>