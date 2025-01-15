<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM todos WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $todo = mysqli_fetch_assoc($result);
    } else {
        die('Tâche introuvable.');
    }
} else {
    die('ID manquant.');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la tâche</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1><?php echo htmlspecialchars($todo['titre']); ?></h1>
    <p><strong>Description :</strong> <?php echo htmlspecialchars($todo['description']); ?></p>
    <p><strong>Date :</strong> <?php echo htmlspecialchars($todo['date']); ?></p>
    <p><strong>Personne affectée :</strong> <?php echo htmlspecialchars($todo['personne']); ?></p>
    <a href="index.php">Retour à la liste</a>
</div>
</body>
</html>
