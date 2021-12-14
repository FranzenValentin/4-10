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
    
    $sql = "SELECT * FROM personen WHERE P_ID = '$P_ID'";
    $result = mysqli_query($con, $sql);
    
    echo '<table id="customers">';
    
    echo "<tr>
    <th> Vorname </th>
    <th> Nachname </th>
    <th> Geschlecht </th>
    <th> Wohnort </th>
    </tr>";

    while($row = mysqli_fetch_array($result)) { 
        $Vorname = $row ['Vorname']; 
        $Nachname = $row ['Nachname'];
        $Geschlecht = $row ['Geschlecht'];
        $Wohnort = $row ['Wohnort'];
        $P_ID = $row['P_ID']; 
    //Ausgabe mit Links zu bearbeiten und kommentieren
            echo"
            <tr>
                <td> $Vorname </td>
                <td> $Nachname </td>
                <td> $Geschlecht </td>
                <td> $Wohnort </td>
            </tr> ";
        
    }

    echo "</table>";


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
