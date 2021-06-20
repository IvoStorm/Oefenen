<?php

echo "<h1>Verwijder eten</h1>";



$id =$_POST ["id"];

//klantgegevens uit de tabel halen
require_once "connect.php";

$eten = $conn->prepare("select id, Etennaam, Categorie, Kilogram from eten where id = :id");

$eten->execute(["id"=> $id]);

//klantgegevens laten zien

foreach ($eten as $eet)
{
    echo "<table>";
    echo "<tr>";
    echo "<td>" . $eet ["id"];
    echo "<td>" . $eet ["Etennaam"];
    echo "<td>" . $eet ["Categorie"];
    echo "<td>" . $eet ["Kilogram"];
    echo "<tr>";
    echo "</table><br />";
}


echo "<form action='eten_vier44.php' method='post'>";

echo "<input type='hidden' name='id' value=$id>";

echo "<input type='hidden' name='deletevak' value='0'>";
echo "<input type='checkbox' name='deletevak' value='1'>";
echo "Verwijder dit eten. <br />";
echo "<input type='submit'>";
echo "</form>";