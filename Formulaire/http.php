<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET et POST</title>
</head>
<body>
<h1>Formulaire avec GET et POST</h1>

<h2>Formulaire GET</h2>
<form method="GET" action="">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom">
    <button type="submit">Envoyer</button>
</form>

<h2>Formulaire POST</h2>
<form method="POST" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom">
    <button type="submit">Envoyer</button>
</form>

<?php
// Traitement des données GET
if (!empty($_GET['nom'])) {
    echo "<p>Données GET reçues : " . htmlspecialchars($_GET['nom']) . "</p>";
}

// Traitement des données POST
if (!empty($_POST['prenom'])) {
    echo "<p>Données POST reçues : " . htmlspecialchars($_POST['prenom']) . "</p>";
}
?>
</body>
</html>
