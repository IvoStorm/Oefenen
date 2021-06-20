<?php

$id = NULL;
$Etennaam = $_POST["Etennaamvak"];
$Categorie = $_POST["Categorievak"];
$Kilogram = $_POST["Zwaartevak"];

require_once "connect.php";

$sql =$conn->prepare("insert into eten values (:id, :Etennaam, :Categorie, :Kilogram ) ");

$sql->bindParam(":id", $id);
$sql->bindParam(":Etennaam", $Etennaam);
$sql->bindParam(":Categorie", $Categorie);
$sql->bindParam(":Kilogram", $Kilogram);

$sql->execute();

echo "Eten is aangemaakt<br/>";
echo "Het eten is toegevoegd in de database<br/>";
echo "<a href='index.html'>Terug naar het menu </a>";





















