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

<table id="customers">
    <tr>
        <th> Vorname </th>
        <th> Nachname </th>
        <th> Geschlecht </th>
        <th> Wohnort </th>
        <th id="aktion"> Aktion </th>
    </tr>
    <tr class="table" >
        <td><input type="text" name="Vorname" placeholder="Vorname" ></td>
        <td><input type="text" name="Nachname" placeholder="Nachname" ></td>
        <td><select name="Geschlecht" placeholder="Geschlecht" > 
                <option value="männlich">männlich </option>
                <option value="weiblich">weiblich </option>
                <option value="divers">divers </option>
                <option value="keine Angabe">keine Angabe </option>
            </select>
        </td>
        <td><input type="text" name="Wohnort" placeholder="Wohnort" ></td>
        <td><input type="submit" value=" Absenden"></td>
    </tr>
</table>

</form>
</html>