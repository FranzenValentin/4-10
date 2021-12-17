<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Login</h2>

    <form action="login.php?login=true" method="POST">
        <!-- Eingabemaske -->
        <label for="Benutzername"><b>Benutzername</b></label>
        <input type="text" placeholder="Benutzername" name="Benutzername" id="Benutzername" required>
        <label for="Passwort"><b>Passwort</b></label>
        <input type="password" placeholder="Passwort" name="Passwort" id="Passwort" required>

        <button type="submit">Login</button>
    </form>

    $login =




</body>

</html>

<?php
include "datenbank.php";
?>