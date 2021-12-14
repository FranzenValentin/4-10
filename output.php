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
<a href="input.php" id="plus">+</a> 
<form id="search" action="output.php", method="get">
    🔍
    <input type="text" name="search" id="text"></input>
</form>
<!-- <a id="search">🔍<input type="text" id="text"></a>  -->


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
        <th id="aktion"> Aktion </th>
        
</tr>

<?php
    $search = $_GET["search"] ?? null;
    
    if(isset($search)){
        $search = 'LOWER("%'.$search.'%")'; //LOWER, damit bei der ABfrage die Großschreibung nicht berücksichtigt wird
        $sql = " SELECT * FROM personen WHERE (LOWER(Nachname) LIKE $search) OR (LOWER(Vorname) LIKE $search) OR (LOWER(Geschlecht) LIKE $search) OR (LOWER(Wohnort) LIKE $search) ";
        
    } else {
        $sql = " SELECT * from personen " ;
    }
    $ergebnis = mysqli_query($con, $sql) or die(mysqli_error($con)); 
    
    while($row = mysqli_fetch_array($ergebnis)) { 
        $Vorname = $row ['Vorname']; 
        $Nachname = $row ['Nachname'];
        $Geschlecht = $row ['Geschlecht'];
        $Wohnort = $row ['Wohnort'];
        $P_ID = $row['P_ID']; 
        echo"
            <tr>
                <td> $Vorname </td>
                <td> $Nachname </td>
                <td> $Geschlecht </td>
                <td> $Wohnort </td>
                <td> 
                    <a href='bestätigung.php?action=löschen&id_kunden=". $row['P_ID'] ."'>löschen</a> 
                    <a href='bearbeiten1.php?action=bearbeiten&id_kunden=". $row['P_ID'] ."'>bearbeiten</a> 
                </td>
            </tr> 
            ";
    }

    ?>
</table>

</body>

</html>