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
    <form action="login.php?" method="post"></form>
    <input type="text" name="Benutzername" placeholder="Benutzername" class="login"> <br>
    <input type="password" name="Passwort" placeholder="Passwort" class="login"> <br>
    <input type="submit" value="Anmelden" title="Anmelden" id="Anmelden">
</body>
</html>

<?php
include "datenbank.php";
?>



