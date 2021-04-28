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
    echo("<h1>Sklep</h1>");

    $sql = ("SELECT * FROM producent");
    echo("<h2>".$sql."</h2>");
    $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>producent</th>");

            while($row=$result->fetch_assoc()) {
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["producent"]."</td>");
                    echo("</tr>");
                }
            echo("</table>");

    
    $sql = ("SELECT * FROM produkt");
    echo("<h2>".$sql."</h2>");
    $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>produkt</th>");

            while($row=$result->fetch_assoc()) {
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["produkt"]."</td>");
                    echo("</tr>");
                }
            echo("</table>");


            $sql = ("SELECT * FROM producent, produkt, producent_produkt where producent_id = producent.id and produkt_id = produkt.id");
            echo("<h2>".$sql."</h2>");
            $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<th>producent</th>");
                    echo("<th>produkt</th>");

                    while($row=$result->fetch_assoc()) {
                            echo("<tr>");
                                echo("<td>".$row["producent"]."</td><td>".$row["produkt"]."</td>");
                            echo("</tr>");
                        }
                    echo("</table>");

?>
</div>   
</div>