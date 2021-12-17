<?php
    include "datenbank.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

</head>

<body>
    <?php
    $search = $_GET["search"] ?? null;
    ?>
    <a href="input.php" id="plus">+</a>


    <!-- Such-button -->
    <form action="output.php" method="get">
        <input type="search1" name="search" placeholder="🔍Search..." value="<?php echo $search; ?>">
    </form>

    <!-- Tabelle erstellen -->
    <?php
    // Daten abfragen die zur Suche passen, falls eine Suche definiert ist.
    if (isset($search)) {
        $t = $search;
        $search = 'LOWER("%' . $search . '%")'; //LOWER, damit bei der Abfrage die Großschreibung nicht berücksichtigt wird
        $sql = " SELECT * FROM personen WHERE (LOWER(Nachname) LIKE $search) OR (LOWER(Vorname) LIKE $search) OR (LOWER(Geschlecht) LIKE $search) OR (LOWER(Wohnort) LIKE $search) ";
        $titel = "Kunden, Suche: $t";
        echo "<a href='output.php' id='exit'>X</a> ";
    } else { //Falls keine Suche ($search) definiert ist, alle Daten der Tabelle abfragen.

        $sql = " SELECT * from personen ";
        $titel = "Kunden";
    }

    $ergebnis = mysqli_query($con, $sql) or die(mysqli_error($con));
    echo "<h1> $titel</h1>";

    echo '    <table id="customers">   
            <tr>
                <th> Vorname </th>
                <th> Nachname </th>
                <th> Geschlecht </th>
                <th> Wohnort </th>
                <th id="aktion"> Aktion </th>

            </tr>';

    while ($row = mysqli_fetch_array($ergebnis)) {
        $Vorname = $row['Vorname'];
        $Nachname = $row['Nachname'];
        $Geschlecht = $row['Geschlecht'];
        $Wohnort = $row['Wohnort'];;
        //Ausgabe mit Links zu bearbeiten und kommentieren
        echo "
                <tr>
                    <td> $Vorname </td>
                    <td> $Nachname </td>
                    <td> $Geschlecht </td>
                    <td> $Wohnort </td>
                    <td> <a href='bestätigung.php?action=löschen&id_kunden=" . $row['P_ID'] . "'>löschen</a> 
                    <a href='bearbeiten.php?action=bearbeiten&id_kunden=" . $row['P_ID'] . "'>bearbeiten</a> </td></td>
                </tr> ";
    }

    ?>
    </table>
</body>

</html>