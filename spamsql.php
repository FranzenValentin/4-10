<?php
include "start.php";

for ($i = 0; $i < 10; $i++) {

    $sql = "INSERT INTO `personen`(`Nachname`, `Vorname`, `Geschlecht`, `Wohnort`) VALUES ('Nachname" . $i . "','Vorname" . $i . "','männlich','Nieder-Olm');";
    mysqli_query($con, $sql);
    echo "$sql <br>";
}
