<?php
$servernaam = "localhost";
$dbname = "TasteFood";
$username = "root";
$password = "";

try
{
    $conn = new PDO ("mysql:host=$servernaam;dbname=$dbname;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connectie_gelukt";
}

catch (PDOException $e)
{
    echo "Connectie mislukt: " . $e->getMessage();
}