<?php
include "start.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eintragen</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

</body>

</html><?php
        $vorname = $_POST["Vorname"] ?? null;
        $nachname = $_POST["Nachname"] ?? null;
        $geschlecht = $_POST["Geschlecht"] ?? null;
        $wohnort = $_POST["Wohnort"] ?? null;

        $action = $_GET["action"] ?? null;

        if ($action == "insert") {
            $query = "INSERT INTO personen (Nachname, Vorname, Geschlecht, Wohnort) VALUES ('$nachname','$vorname','$geschlecht','$wohnort')";
            mysqli_query($con, $query) or die(mysqli_error($con));
            header('location: output.php');
        }

        ?>