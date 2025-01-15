<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires POST et GET</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>Formulaires POST et GET</h1>

<!-- Formulaire GET -->
<h2>Formulaire avec méthode GET</h2>
<form method="GET" action="">
    <label for="firstname-get">Prénom :</label>
    <input type="text" name="firstname" id="firstname-get" required>
    <label for="age-get">Âge :</label>
    <input type="number" name="age" id="age-get" required>
    <button type="submit">Envoyer avec GET</button>
</form>

<!-- Formulaire POST -->
<h2>Formulaire avec méthode POST</h2>
<form method="POST" action="">
    <label for="firstname-post">Prénom :</label>
    <input type="text" name="firstname" id="firstname-post" required>
    <label for="age-post">Âge :</label>
    <input type="number" name="age" id="age-post" required>
    <button type="submit">Envoyer avec POST</button>
</form>

<!-- Traitement des données -->
<div class="result">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['firstname'], $_POST['age'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
        $age = (int)$_POST['age'];
        $dogAge = round($age / 7, 2);
        echo "<p>Données envoyées par POST : Bonjour $firstname, votre âge en âge de chien est $dogAge.</p>";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['firstname'], $_GET['age'])) {
        $firstname = htmlspecialchars($_GET['firstname']);
        $age = (int)$_GET['age'];
        $dogAge = round($age / 7, 2);
        echo "<p>Données envoyées par GET : Bonjour $firstname, votre âge en âge de chien est $dogAge.</p>";
    }
    ?>
</div>
</body>
</html>
