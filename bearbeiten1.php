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
        
        <table id='customers'>

        <tr>
            <th> Vorname </th>
            <th> Nachname </th>
            <th> Geschlecht </th>
            <th> Wohnort </th>
            <th id='aktion'> Aktion </th>
        </tr>

        <tr class='table'>

            <td><input type='text' name='Vorname' value='". $row['Vorname'] . "'></td>
            <td><input type='text' name='Nachname' value='". $row['Nachname'] . "'></td>
            <td><select name='Geschlecht' > 
                <option value='". $row['Geschlecht'] . "'>" . $row['Geschlecht'] . "</option>";
                if($row['Geschlecht'] != 'männlich'){ echo "<option value='männlich'>männlich </option>"; }
                if($row['Geschlecht'] != 'weiblich'){ echo "<option value='weiblich'>weiblich </option>"; }
                if($row['Geschlecht'] != 'divers'){ echo "<option value='divers'>divers </option>"; }
                if($row['Geschlecht'] != 'keine Angabe'){ echo "<option value='keine Angabe'>keine Angabe </option>"; }
            echo "
            </select></td>
            <td><input type='text' name='Wohnort' value='" . $row['Wohnort'] . "'></td>
            
            <td><input type='submit' value='Aktualisieren!'></td>

        </tr>
        </table>
        </form>";
    }   
}


?>