<?php
    include "datenbank.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <h1>hallo</h1>
    <?php
    $t = $_GET["login"] ?? null;
    if ($t == true) {
        $benutzer = $_POST["Benutzername"] ?? null;
        $passwort = $_POST["Passwort"] ?? null;
    } else {
        header('location: login.php');
    }
    $sql = "SELECT * FROM benutzer WHERE Benutzername = '$benutzer'";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $bn = $row['Benutzername'];
    $pw = $row['Passwort'];
    if($passwort == $pw){
        header("location:input.php");
    } else {
        header("location:login.php?action=false");
        $_SESSION["Benutzername"]="$bn";
        $_SESSION["Passwort"]="$pw";
    }

    

    ?>
</body>

</html>