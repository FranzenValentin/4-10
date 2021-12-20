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
$wrong = $GET_["wrong"] ?? null;

if ($wrong == true) {
    echo "wooooooooooow";
}

if ($register == true) {
    $bname = $_POST["bname"] ?? null;
    $psw = $_POST["psw"] ?? null;
    $pswwdh = $_POST["psw-wdh"] ?? null;
    echo $bname;
    echo $psw;
    echo $pswwdh;
    if ($psw == $pswwdh) {
        echo "jaaaaaaa";
    } else {
        header("location:registrieren.php?wrong=true");
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