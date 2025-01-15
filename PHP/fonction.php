<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Fonctions en PHP</title>
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
<h1>Les Fonctions en PHP</h1>

<div class="block">
    <h2>1. Fonction simple</h2>
    <?php
    // Définir une fonction simple
    function saluer() {
        return "Bonjour, bienvenue !";
    }

    // Appeler la fonction
    $message = saluer();
    echo "<p>$message</p>";
    ?>
</div>

<div class="block">
    <h2>2. Fonction avec paramètres</h2>
    <?php
    // Définir une fonction avec des paramètres
    function saluer_personne($nom) {
        return "Bonjour, $nom !";
    }

    // Appeler la fonction
    $message = saluer_personne("Alice");
    echo "<p>$message</p>";
    ?>
</div>

<div class="block">
    <h2>3. Fonction avec plusieurs paramètres</h2>
    <?php
    // Définir une fonction avec plusieurs paramètres
    function additionner($a, $b) {
        return $a + $b;
    }

    // Appeler la fonction
    $resultat = additionner(5, 10);
    echo "<p>La somme de 5 et 10 est : $resultat</p>";
    ?>
</div>

<div class="block">
    <h2>4. Fonction avec valeur par défaut</h2>
    <?php
    // Définir une fonction avec un paramètre par défaut
    function saluer_avec_par_defaut($nom = "visiteur") {
        return "Bonjour, $nom !";
    }

    // Appeler la fonction avec et sans argument
    $message1 = saluer_avec_par_defaut();
    $message2 = saluer_avec_par_defaut("Jean");
    echo "<p>$message1</p>";
    echo "<p>$message2</p>";
    ?>
</div>

<div class="block">
    <h2>5. Fonction avec un tableau en paramètre</h2>
    <?php
    // Définir une fonction qui traite un tableau
    function afficher_tableau($tableau) {
        foreach ($tableau as $element) {
            echo "<p>Élément : $element</p>";
        }
    }

    // Appeler la fonction
    $fruits = ["Pomme", "Banane", "Cerise"];
    afficher_tableau($fruits);
    ?>
</div>

</body>
</html>
