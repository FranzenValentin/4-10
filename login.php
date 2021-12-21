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
    $action = $_GET["action"] ?? null;

    if ($action == "false") {
        echo "Ihr Password oder Benutzername ist falsch.";
    }
    ?>
    <div class="bigcontainer">

        <h2>Login</h2>
        <?php
        $reg = $_GET["reg"] ?? null;
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
    $t = $_GET["login"] ?? null;
    if ($t == true) {
        $benutzer = $_POST["Benutzername"] ?? null;
        $passwort = $_POST["Passwort"] ?? null;
        $sql = "SELECT * FROM benutzer WHERE Benutzername = '$benutzer'";
        $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $row = mysqli_fetch_array($result);
        $bn = $row['Benutzername'];
        $pw = $row['Passwort'];
        if ($passwort == $pw) {
            $_SESSION['Benutzername'] = $bn;
            $_SESSION['Passwort'] = $pw;
            header("location:output.php");
        } else {
            header("location:login.php?action=false");
        }
    }



    ?>

</body>

</html>