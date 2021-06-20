<?php

echo "<h1>Verander uw eten </h1>";


//id uit het formulier halen
$id = $_POST ["id"];

//autogegevens uit de tabel halen
require_once "connect.php";

$eten = $conn->prepare("select id, Etennaam, Categorie, Kilogram from eten where id = :id");

$eten->execute(["id"=> $id]);


echo "<form action='eten_drie33.php' method='post'>";
foreach ($eten as $eet)
{

    echo "<input type='hidden' name='id' value='".$eet["id"]."'> ID: " . $eet["id"] . "  <br />";

    echo "<input type='text' name='etennaamvak'> Etennaam: " .$eet["etennaam"]."<br />";

    echo " <input type='text' name = 'categorievak'> Categorie:" .$eet["Categorie"]."<br />";

    echo " <input type='text' name = 'kilogramvak'> Kilogram: " .$eet["Kilogram"]."<br />";
}
echo "<input type='submit'>";
echo "</form>";