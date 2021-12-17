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
    <title>Anmeldung</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>

    <h2>Login</h2>

    <form action="login_bestätigung.php?login=true" method="POST">
        <!-- Eingabemaske -->
        <label for="Benutzername"><b>Benutzername</b></label>
        <input type="text" placeholder="Benutzername" name="Benutzername" id="Benutzername" required>
        <label for="Passwort"><b>Passwort</b></label>
        <input type="password" placeholder="Passwort" name="Passwort" id="Passwort" required>

        <button type="submit">Login</button>
    </form>


</body>

</html>
