<?php

echo "<h1>Verander eten</h1>";


//autogegevens uit het formulier halen
$id = $_POST ["id"];
$etennaam = $_POST ["etennaamvak"];
$categorie = $_POST ["categorievak"];
$kilogram = $_POST ["kilogramvak"];


//updaten autogegevens
require_once "connect.php";

$sql = $conn->prepare(
    "update eten set Etennaam = :Etennaam, Categorie = :Categorie, Kilogram = :Kilogram where id = :id");

$sql->bindParam(":id", $id);
$sql->bindParam(":etennaamvak", $etennaam);
$sql->bindParam(":categorievak", $categorie);
$sql->bindParam(":kilogramvak", $kilogram);

$sql->execute();

echo "Het eten is gewijzigd <br />";
echo "<a href='index.html'> Terug naar het menu </a>";