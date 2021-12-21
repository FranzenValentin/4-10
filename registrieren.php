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
    <link rel="stylesheet" href="style.css">
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
        echo "Sie haben sich erfolgreich registriert. Sie werden in Kürze weitergeleitet.";
        header("location:login.php?reg=$bname");
    } else {
        header("location:registrieren.php?wrong=true");
    }
} else {
?>
    <div class="bigcontainer">
        <h2>Registrieren</h2>
        <form action="registrieren.php?register=true" method="POST">
            <label><b>Benutzername</b></label><br>
            <input class="Benutzername" type="text" placeholder="Benutzername" name="bname" required>
            <br>
            <label><b>Passwort</b></label><br>
            <input class="Passwort" type="password" placeholder="Passwort" name="psw" required>
            <br>
            <label><b>Wiederholung Passwort</b></label><br>
            <input class="Passwort" type="password" placeholder="Passwort" name="psw-wdh" required>

            <div class="logincontainer">
                <button type="submit" class="Login">Registrieren</button>
                <a class="Login" href="login.php">Zurück</a>
            </div>

        </form>
    </div>
<?php } ?>





</html>