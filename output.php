<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<html>

<?php
include "datenbank.php";

?>

<!-- Tabelle erstellen -->

<table id="customers">
<tr>
        <th> Vorname </th>
        <th> Nachname </th>
        <th> Geschlecht </th>
        <th> Wohnort </th>
        <th> Aktion </th>

</tr>

    <?php
    $ergebnis = mysqli_query($con, 'select * from personen'); 
    while($row = mysqli_fetch_array($ergebnis)) { 
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
            <td> <a href='bestätigung.php?action=löschen&id_kunden=". $row['P_ID'] ."'>löschen</a> 
            <a href='bearbeiten1.php?action=bearbeiten&id_kunden=". $row['P_ID'] ."'>bearbeiten</a> </td></td>
        </tr> ";
        
    }

    ?>
</table>

<!-- ----------------------------------------------------------------------- -->
<!-- Löschen -->

<!--
$action = $_GET["action"] ??null ;
$P_ID = $_GET["id_kunden"] ??null ;
if($action == "löschen"){
    echo 'Möchten Sie den Datensatz wirklich löschen?';
    echo"<a href='output.php?bestätigung=1&id_kunden=$P_ID'>ja</a> 
            <a href='output.php'>nein</a>";
}

$bestätigung = $_GET["bestätigung"] ??null ;


if($bestätigung == "1"){
Mysqli_query($con, "DELETE FROM personen WHERE P_ID='$P_ID'") or die (mysqli_error($con));
echo "test";
header('location: output.php'); -->

<!-- }
// --------------------------------
// $action = $_GET["action"] ??null ;
// $P_ID = $_GET["id_kunden"] ??null ;

// if($action == "bearbeiten"){
//     $sql = "SELECT * FROM personen WHERE P_ID = $P_ID";
//     $result = mysqli_query($con, $sql);
//     while($row = mysqli_fetch_array($result)) {

//         echo"
//         <h1> Aktualisieren Sie hier ihre Daten!</h1>
//         <form action='bearbeiten.php?action=bearbeiten&ID_Kunden=$P_ID'  method='post'> 
        
//         <input type='text' name='Vorname' value='". $row['Vorname'] . "'>
//         <input type='text' name='Nachname' value='". $row['Nachname'] . "'>
//         <select name='Geschlecht' > 
//             <option value='". $row['Geschlecht'] . "'>" . $row['Geschlecht'] . "</option>";
//             if($row['Geschlecht'] != 'männlich'){ echo "<option value='männlich'>männlich </option>"; }
//             if($row['Geschlecht'] != 'weiblich'){ echo "<option value='weiblich'>weiblich </option>"; }
//             if($row['Geschlecht'] != 'divers'){ echo "<option value='divers'>divers </option>"; }
//             if($row['Geschlecht'] != 'keine Angabe'){ echo "<option value='keine Angabe'>keine Angabe </option>"; }
//         echo "
//         </select>
//         <input type='text' name='Wohnort' value='" . $row['Wohnort'] . "'>
        
//         <input type='submit' value='Aktualisieren!'>
        
//         </form>
       
// }


?> -->



