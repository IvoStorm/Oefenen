<?php
/**
 * Created by PhpStorm.
 * User: Sophia_Jukema
 * Date: 21-2-2019
 * Time: 9:54
 */
require_once "connect.php";

$eten = $conn->prepare("select id, Etennaam, Categorie, Kilogram from eten");

$eten ->execute();


echo "<p>Dit zijn alle eten gegevens</p></br>";

echo "<table>";
foreach ($eten as $eet)
{
    echo "<tr>";
    echo "<td>" .   $eet["id"]       .   "</td>";
    echo "<td>" .   $eet["Etennaam"]     .   "</td>";
    echo "<td>" .   $eet["Categorie"]    .   "</td>";
    echo "<td>" .   $eet["Kilogram"]    .   "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</br><a href='index.html'>Terug naar menu</a>";