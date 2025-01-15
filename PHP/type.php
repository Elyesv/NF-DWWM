<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des Types en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h2 {
            color: #4CAF50;
        }
        .block {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
        }
        .block p {
            margin: 0;
        }
    </style>
</head>
<body>
<h1>Récapitulatif des Types en PHP</h1>
<?php
$age = 25; // Integer
$prix = 19.99; // Float
$nom = "Alice"; // String
$actif = true; // Boolean
$fruits = ["Pomme", "Banane", "Cerise"]; // Array
$valeur = null; // Null
?>
<div class="block">
    <h2>1. Type Integer</h2>
    <p>Age : <?php echo $age; ?></p>
</div>

<div class="block">
    <h2>2. Type Float</h2>
    <p>Prix : <?php echo $prix; ?> €</p>
</div>

<div class="block">
    <h2>3. Type String</h2>
    <p>Nom : <?php echo $nom; ?></p>
</div>

<div class="block">
    <h2>4. Type Boolean</h2>
    <p>Actif : <?php echo $actif ? "Oui" : "Non"; ?></p>
</div>

<div class="block">
    <h2>5. Type Array</h2>
    <p>Premier fruit : <?php echo $fruits[2]; ?></p>
</div>

<div class="block">
    <h2>6. Type Null</h2>
    <p>Variable null : <?php echo is_null($valeur) ? "Oui" : "Non"; ?></p>
</div>

</body>
</html>
