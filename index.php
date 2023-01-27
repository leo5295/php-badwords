<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
</head>
<body>
    <!-- action = file.php -->
<form action="process.php" method="post">
    <label for="name">Inserisci il tuo nome:</label>
    <!-- name = x, /process.php $y = $_POST['x']; -->
    <input type="text" name="name" id="name">
    <br>
    <label for="color">Inserisci il tuo colore preferito:</label>
    <input type="text" name="color" id="color">
    <br>
    <input type="submit" value="Genera password">
</form>
</body>
</html>