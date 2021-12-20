<?php
session_start();
$con = mysqli_connect("localhost", "21_franzen_valentin", "Passwort", "21_franzen_valentin_4-10");
mysqli_set_charset($con, "utf8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren</title>
</head>
<?php

$register = $_GET["register"] ?? null;
$wrong = $_GET["wrong"] ?? null;

if ($wrong == true) {
    echo "Die Passwörter stimmern nicht überein. Versuchen Sie es erneut.";
}

if ($register == true) {
    $bname = $_POST["bname"] ?? null;
    $psw = $_POST["psw"] ?? null;
    $pswwdh = $_POST["psw-wdh"] ?? null;
    if ($psw == $pswwdh) {
        $sql = "INSERT INTO benutzer (Benutzername, Passwort) VALUES ('$bname','$psw')";
        mysqli_query($con, $sql) or die(mysqli_error($con));
    } else {
        header("location:registrieren.php?wrong=true"); // falls beide Passwörter nicht übereinstimmen, kommt eine Fehlermeldung
    }
} else {
?>
    <form action="registrieren.php?register=true" method="POST">
        <label><b>Benutzername</b></label>
        <input type="text" placeholder="Benutzername" name="bname" required>

        <label><b>Passwort</b></label>
        <input type="password" placeholder="Passwort" name="psw" required>

        <label><b>Wiederholung Passwort</b></label>
        <input type="password" placeholder="Passwort" name="psw-wdh" required>

        <button type="button" class="Abbrechen">Abbrechen</button>
        <button type="submit" class="Registrieren">Registrieren</button>

    </form>
<?php } ?>





</html>