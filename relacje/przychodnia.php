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
                echo("<h1>Przychodnia</h1>");


                require_once("../assets/connect.php");

                $sql = ("SELECT * FROM lekarz");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>lekarz</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["lekarz"]."</td>");
                                    echo("<td><form action='del2przychodnia.php' method=POST>");
                                    echo("<input type='hidden' name='id' value='".$row['id']."'><input type='submit' value='DELETE'>");
                                    echo("</form></td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM pacjent");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>pacjent</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["pacjent"]."</td>");
                                    echo("<td><form action='del3przychodnia.php' method=POST>");
                                    echo("<input type='hidden' name='id' value='".$row['id']."'><input type='submit' value='DELETE'>");
                                    echo("</form></td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                $sql = ("SELECT *, lekarz_pacjent.id as lpid FROM lekarz, pacjent, lekarz_pacjent  where lekarz_id = lekarz.id and pacjent_id = pacjent.id");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>lekarz</th>");
                        echo("<th>pacjent</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["lekarz"]."</td><td>".$row["pacjent"]."</td>");
                                    echo("<td><form action='del1przychodnia.php' method=POST>");
                                    echo("<input type='hidden' name='id' value='".$row['lpid']."'><input type='submit' value='DELETE'>");
                                    echo("</form></td>");
                                    echo("</tr>");
                            }
                        echo("</table>");


                        ?>
                        </div>
                        </div>