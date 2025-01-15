<?php
// Inclure le fichier de connexion
include 'db.php';

// Requête 1 : Récupérer les 5 livres les plus anciens (triés par date de parution ascendant)
$queryOldBooks = "SELECT * FROM book ORDER BY date_parution ASC LIMIT 5";
$resultOldBooks = mysqli_query($conn, $queryOldBooks);

// Requête 2 : Récupérer les 10 livres triés par auteur (ordre décroissant)
$queryByAuthor = "SELECT * FROM book ORDER BY auteur DESC LIMIT 10";
$resultByAuthor = mysqli_query($conn, $queryByAuthor);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres : Résultats SQL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
<h1>Résultats des requêtes SQL</h1>

<!-- Affichage des 5 livres les plus anciens -->
<h2>5 livres les plus anciens</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Date de Parution</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (mysqli_num_rows($resultOldBooks) > 0) {
        while ($row = mysqli_fetch_assoc($resultOldBooks)) {
            echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['titre']}</td>
                        <td>{$row['auteur']}</td>
                        <td>{$row['date_parution']}</td>
                    </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Aucun résultat trouvé.</td></tr>";
    }
    ?>
    </tbody>
</table>

<!-- Affichage des 10 livres triés par auteur -->
<h2>10 livres triés par auteur (ordre décroissant)</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Date de Parution</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (mysqli_num_rows($resultByAuthor) > 0) {
        while ($row = mysqli_fetch_assoc($resultByAuthor)) {
            echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['titre']}</td>
                        <td>{$row['auteur']}</td>
                        <td>{$row['date_parution']}</td>
                    </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Aucun résultat trouvé.</td></tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>
