<?php
include "datenbank.php";
?>
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
    <?php

    include "accoutbutton.php"; //Fügt die Accoountbuttons hinzu.

    $action = $_GET["action"] ?? null;
    $P_ID = $_GET["id_kunden"] ?? null;

    if ($action == "bearbeiten") {
        $sql = "SELECT * FROM personen WHERE P_ID = $P_ID";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {

            echo "
        <h1> Aktualisieren Sie hier ihre Daten!</h1>
        <form action='bearbeiten.php?action=bearbeiten_true&ID_Kunden=$P_ID'  method='post'> 
        
        <table class='customers'>

        <tr>
            <th> Vorname </th>
            <th> Nachname </th>
            <th> Geschlecht </th>
            <th> Wohnort </th>
            <th id='aktion'> Aktion </th>
        </tr>

        <tr class='table'>

            <td><input type='text' name='Vorname' value='" . $row['Vorname'] . "'></td>
            <td><input type='text' name='Nachname' value='" . $row['Nachname'] . "'></td>
            <td><select name='Geschlecht' > 
                <option value='" . $row['Geschlecht'] . "'>" . $row['Geschlecht'] . "</option>";
            if ($row['Geschlecht'] != 'männlich') {
                echo "<option value='männlich'>männlich </option>";
            }
            if ($row['Geschlecht'] != 'weiblich') {
                echo "<option value='weiblich'>weiblich </option>";
            }
            if ($row['Geschlecht'] != 'divers') {
                echo "<option value='divers'>divers </option>";
            }
            if ($row['Geschlecht'] != 'keine Angabe') {
                echo "<option value='keine Angabe'>keine Angabe </option>";
            }
            echo "
            </select></td>
            <td><input type='text' name='Wohnort' value='" . $row['Wohnort'] . "'></td>
            
            <td><input type='submit' value='Aktualisieren!' class='table1'> </td>

        </tr>
        </table>
        </form>";
        }
    }


    $vorname = $_POST["Vorname"] ?? null;
    $nachname = $_POST["Nachname"] ?? null;
    $geschlecht = $_POST["Geschlecht"] ?? null;
    $wohnort = $_POST["Wohnort"] ?? null;
    $P_ID = $_POST["ID_Kunden"] ?? null;

    $action = $_GET["action"] ?? null;
    $P_ID = $_GET["ID_Kunden"] ?? null;

    if ($action == "bearbeiten_true") {
        $query = "UPDATE `personen` SET `Nachname`='$nachname',`Vorname`='$vorname',`Geschlecht`='$geschlecht',`Wohnort`='$wohnort' WHERE `P_ID`=$P_ID";
        mysqli_query($con, $query) or die(mysqli_error($con));
        header("location: output.php");
    }


    ?>

</body>

</html>