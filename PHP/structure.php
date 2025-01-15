<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structures Conditionnelles en PHP</title>
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
<h1>Structures Conditionnelles en PHP</h1>

<div class="block">
    <h2>1. Structure if/else</h2>
    <?php
    $age = 18;
    if ($age < 18) {
        echo "<p>Vous êtes mineur.</p>";
    } elseif ($age == 18) {
        echo "<p>Vous êtes tout juste majeur.</p>";
    } else {
        echo "<p>Vous êtes majeur.</p>";
    }
    ?>
</div>

<div class="block">
    <h2>2. Structure switch</h2>
    <?php
    $jour = "lundi";
    switch ($jour) {
        case "lundi":
            echo "<p>C'est le début de la semaine.</p>";
            break;
        case "samedi":
        case "dimanche":
            echo "<p>C'est le week-end !</p>";
            break;
        default:
            echo "<p>C'est un jour normal de la semaine.</p>";
            break;
    }
    ?>
</div>

<div class="block">
    <h2>3. Structure ternaire</h2>
    <?php
    $note = 15;
    $resultat = ($note >= 10) ? "Réussi" : "Échoué";
    echo "<p>Résultat : $resultat</p>";
    ?>
</div>

<div class="block">
    <h2>4. Boucle while</h2>
    <?php
    $compteur = 0;
    while ($compteur < 5) {
        echo "<p>Compteur : $compteur</p>";
        $compteur++;
    }
    ?>
</div>

<div class="block">
    <h2>5. Boucle do/while</h2>
    <?php
    $compteur = 0;
    do {
        echo "<p>Compteur : $compteur</p>";
        $compteur++;
    } while ($compteur < 5);
    ?>
</div>

<div class="block">
    <h2>6. Boucle for</h2>
    <?php
    for ($i = 0; $i < 5; $i++) {
        echo "<p>Compteur : $i</p>";
    }
    ?>
</div>

<div class="block">
    <h2>7. Boucle foreach</h2>
    <?php
    $fruits = ["Pomme", "Banane", "Cerise"];
    foreach ($fruits as $fruit) {
        echo "<p>Fruit : $fruit</p>";
    }
    ?>
</div>

<div class="block">
    <h2>8. Conditions imbriquées</h2>
    <?php
    $heure = 15;
    if ($heure >= 0 && $heure < 12) {
        echo "<p>Bonjour, c'est le matin.</p>";
    } else {
        if ($heure >= 12 && $heure < 18) {
            echo "<p>Bonjour, c'est l'après-midi.</p>";
        } else {
            echo "<p>Bonsoir, c'est le soir.</p>";
        }
    }
    ?>
</div>
</body>
</html>


