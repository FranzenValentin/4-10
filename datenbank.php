<?php
session_start();
$con = mysqli_connect("localhost", "21_franzen_valentin", "Passwort", "21_franzen_valentin_4-10");
mysqli_set_charset($con, "utf8");

if (isset($_SESSION['Benutzername'])) {
    $sql = "SELECT * FROM benutzer WHERE Benutzername ='" . $_SESSION['Benutzername'] . "'";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $pw = $row['Passwort'];
    if ($_SESSION['Passwort'] == $pw) {
    } else {
        session_destroy();
        header("location:login.php");
    }
} else {
    session_destroy();
    header("location:login.php");
}

?>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>