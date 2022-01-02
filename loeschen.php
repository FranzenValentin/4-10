<?php
include "start.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wirklich löschen?</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    include "accoutbutton.php"; //Fügt die Accoountbuttons hinzu.
    echo "<h1> Wirklich löschen?</h1>";
    $action = $_GET["action"] ?? null;
    $P_ID = $_GET["id_kunden"] ?? null;
    if ($action == "löschen") {

        $sql = "SELECT * FROM personen WHERE P_ID = '$P_ID'";
        $result = mysqli_query($con, $sql);

        echo '<table class="customers">';

        echo "<tr>
    <th> Vorname </th>
    <th> Nachname </th>
    <th> Geschlecht </th>
    <th> Wohnort </th>
    </tr>";

        while ($row = mysqli_fetch_array($result)) {
            $Vorname = $row['Vorname'];
            $Nachname = $row['Nachname'];
            $Geschlecht = $row['Geschlecht'];
            $Wohnort = $row['Wohnort'];
            $P_ID = $row['P_ID'];
            //Ausgabe mit Links zu bearbeiten und kommentieren
            echo "
            <tr>
                <td> $Vorname </td>
                <td> $Nachname </td>
                <td> $Geschlecht </td>
                <td> $Wohnort </td>
            </tr> ";
        }

        echo "</table>";


        echo 'Möchten Sie den Datensatz wirklich löschen?       ';

        echo "<a href='loeschen.php?bestätigung=1&id_kunden=$P_ID' class='a'>ja</a> 
            <a href='output.php' class='a'>nein</a>";
    }

    $bestätigung = $_GET["bestätigung"] ?? null;


    if ($bestätigung == "1") {
        Mysqli_query($con, "DELETE FROM personen WHERE P_ID='$P_ID'") or die(mysqli_error($con));
        echo "test";
        header('location: output.php');
    }
    ?>
</body>

</html>
<html>