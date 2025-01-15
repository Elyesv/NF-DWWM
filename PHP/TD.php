<?php
$name = 'Elyes';

$minute = date('i');

$message = ($minute % 2 == 0) ? "Bonjour tout le monde" : "Bonjour $name";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD 1 : Votre premier script PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
    </style>
</head>
<body>
<h1>Bienvenue dans votre premier script PHP</h1>
<p>La minute actuelle est : <strong><?php echo $minute; ?></strong></p>
<p><strong><?php echo $message; ?></strong></p>
</body>
</html>
