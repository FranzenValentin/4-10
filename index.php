<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eingabe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html><?php
include "datenbank.php";
?>

<html>
<h1> Bitte tragen Sie hier ihre Daten ein!</h1>
<form action="eintragen.php?action=insert"  method="post"> 

<input type="text" name="Vorname" placeholder="Vorname" >
<input type="text" name="Nachname" placeholder="Nachname" >
<select name="Geschlecht" placeholder="Geschlecht" > 
    <option value="männlich">männlich </option>
    <option value="weiblich">weiblich </option>
    <option value="divers">divers </option>
    <option value="keine Angabe">keine Angabe </option>
</select>
<input type="text" name="Wohnort" placeholder="Wohnort" >

<input type="submit" value=" Absenden!">

</form>
</html>