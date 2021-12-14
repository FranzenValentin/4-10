<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bearbeiten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php

include "datenbank.php";

$vorname = $_POST["Vorname"] ?? null;
$nachname = $_POST["Nachname"] ?? null;
$geschlecht = $_POST["Geschlecht"] ?? null;
$wohnort = $_POST["Wohnort"] ?? null;
$P_ID = $_POST["ID_Kunden"] ?? null;

$action = $_GET["action"] ??null ;
$P_ID = $_GET["ID_Kunden"] ??null ;

if($action == "bearbeiten") {
    $query = "UPDATE `personen` SET `Nachname`='$nachname',`Vorname`='$vorname',`Geschlecht`='$geschlecht',`Wohnort`='$wohnort' WHERE `P_ID`=$P_ID";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header("location: output.php");
}

?>

