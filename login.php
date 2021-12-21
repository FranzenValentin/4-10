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


    <?php
    // Abfragen, ob Benutzer schon angemeldet ist, wenn ja,dann zu output.php
    if (isset($_SESSION['Benutzername'])) {
        $sql = "SELECT * FROM benutzer WHERE Benutzername ='" . $_SESSION['Benutzername'] . "'";
        $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $row = mysqli_fetch_array($result);
        $pw = $row['Passwort'];
        if ($_SESSION['Passwort'] == $pw) {
            header("location:output.php");
        }
    }

    $action = $_GET["action"] ?? null;
    // Falls $action als flase definiert ist, waren die Eingaben nicht korrekt und dies wird ausgegeben
    if ($action == "false") {
        echo "Ihr Password oder Benutzername ist falsch.";
    }
    ?>
    <!-- Erstellt Container zur bearbeitung in css  -->
    <div class="bigcontainer">

        <h2>Login</h2>
        <?php
        $reg = $_GET["reg"] ?? null; //falls man sich im Vorhinein registriert hat, wird in "reg" der Benutzername gespeichert und dann schon in das Input Feld geschrieben (Z.49)
        ?>
        <form action=" login.php?login=true" method="POST">
            <!-- Eingabemaske -->
            <label for="Benutzername"><b>Benutzername</b></label><br>
            <input type="text" placeholder="Benutzername" name="Benutzername" class="Benutzername" value="<?php echo $reg; ?>" required>
            <br>
            <label for="Passwort"><b>Passwort</b></label><br>
            <input type="password" placeholder="Passwort" name="Passwort" class="Passwort" required>
            <br>
            <div class="logincontainer">
                <button type="submit" class="Login">Login</button>
                <a class="Login" href="registrieren.php">Registrieren</a>
            </div>
        </form>
    </div>

    <?php
    $t = $_GET["login"] ?? null; //login ist "true", wenn man davor mit vollständigen eingaben auf den Button Login gedrückt hat (Z.55)
    if ($t == true) {
        $benutzer = $_POST["Benutzername"] ?? null;
        $passwort = $_POST["Passwort"] ?? null;
        $sql = "SELECT * FROM benutzer WHERE Benutzername = '$benutzer'"; // Das Passwort zum eingegebenen Benutzername wird aus der Datenbank abgegriffen
        $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $row = mysqli_fetch_array($result);
        $pw = $row['Passwort'];
        if ($passwort == $pw) { //Eingegebenes PW wird mit PW aus Datenbank verglichen, falls es korrekt ist werden BN und PW in der Sessionvariable gespeichert
            $_SESSION['Benutzername'] = $bn;
            $_SESSION['Passwort'] = $pw;
            header("location:output.php"); //die Authentifizierung ist abgeschlossen und man wird nach output.php geleitet
        } else {
            header("location:login.php?action=false"); // Falls das eigegebene PW nicht dem aus der Datenbank entspricht, wird man wieder auf login.php geleitet. Durch action=false wird in Zeile 36 die Info ausgegeben
        }
    }



    ?>

</body>

</html>