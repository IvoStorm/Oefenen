<?php

echo "<h1>Eten verwijderd</h1>";


//gegevens uit het formulier halen
$id = $_POST["id"];
$delete = $_POST["deletevak"];

//klantgegevens verwijderen
if ($delete)
{
    require_once "connect.php";

    $sql = $conn->prepare("delete from eten where id = :id");
    $sql->execute(["id" => $id]);

    echo "<p>Het eten is verwijderd</p>";
}
else
{
    echo "<p>Het eten is niet verwijderd</p>";
}

echo "<a href='index.html'>Terug</a>";