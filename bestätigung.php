<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestätigung</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<html>

<?php
include "datenbank.php";


$action = $_GET["action"] ??null ;
$P_ID = $_GET["id_kunden"] ??null ;
if($action == "löschen"){
    echo 'Möchten Sie den Datensatz wirklich löschen?';
    echo"<a href='bestätigung.php?bestätigung=1&id_kunden=$P_ID'>ja</a> 
            <a href='output.php'>nein</a>";
}

$bestätigung = $_GET["bestätigung"] ??null ;


if($bestätigung == "1"){
Mysqli_query($con, "DELETE FROM personen WHERE P_ID='$P_ID'") or die (mysqli_error($con));
echo "test";
header('location: output.php');
}
?>
