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
                echo("<h1>Biblioteka</h1>");


                require_once("../assets/connect.php");

                $sql = ("SELECT * FROM autor");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>autor</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["nazwisko"]."</td>");
                                    echo("<td><form action='del2biblioteka.php' method=POST>");
                                    echo("<input type='hidden' name='id' value='".$row['id']."'><input type='submit' value='DELETE'>");
                                    echo("</form></td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM tytul");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>tytul</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>");
                                    echo("<td><form action='del3biblioteka.php' method=POST>");
                                    echo("<input type='hidden' name='id' value='".$row['id']."'><input type='submit' value='DELETE'>");
                                    echo("</form></td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                $sql = ("SELECT *, autor_tytul.id as atid FROM autor, tytul, autor_tytul  where autor_id = autor.id and tytul_id = tytul.id");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>autor</th>");
                        echo("<th>tytul</th>");
                        echo("<th>DELETE</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
                                    echo("<td><form action='del1biblioteka.php' method=POST>");
                                    echo("<input type='hidden' name='id' value='".$row['atid']."'><input type='submit' value='DELETE'>");
                                    echo("</form></td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        ?>
</div>