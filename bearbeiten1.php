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
</html><?php

include "datenbank.php";


$action = $_GET["action"] ??null ;
$P_ID = $_GET["id_kunden"] ??null ;

if($action == "bearbeiten"){
    $sql = "SELECT * FROM personen WHERE P_ID = $P_ID";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)) {

        echo"
        <h1> Aktualisieren Sie hier ihre Daten!</h1>
        <form action='bearbeiten.php?action=bearbeiten&ID_Kunden=$P_ID'  method='post'> 
        
        <input type='text' name='Vorname' value='". $row['Vorname'] . "'>
        <input type='text' name='Nachname' value='". $row['Nachname'] . "'>
        <select name='Geschlecht' > 
            <option value='". $row['Geschlecht'] . "'>" . $row['Geschlecht'] . "</option>";
            if($row['Geschlecht'] != 'männlich'){ echo "<option value='männlich'>männlich </option>"; }
            if($row['Geschlecht'] != 'weiblich'){ echo "<option value='weiblich'>weiblich </option>"; }
            if($row['Geschlecht'] != 'divers'){ echo "<option value='divers'>divers </option>"; }
            if($row['Geschlecht'] != 'keine Angabe'){ echo "<option value='keine Angabe'>keine Angabe </option>"; }
        echo "
        </select>
        <input type='text' name='Wohnort' value='" . $row['Wohnort'] . "'>
        
        <input type='submit' value='Aktualisieren!'>
        
        </form>";
    }   
}


?>