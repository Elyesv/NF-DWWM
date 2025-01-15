<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader un fichier avec UUID</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        .message {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
<h1>Uploader un fichier</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="file">Choisissez un fichier :</label>
    <input type="file" name="file" id="file" required>
    <button type="submit">Uploader</button>
</form>

<?php
// Fonction pour générer un UUID unique
function generateUUID() {
    return bin2hex(random_bytes(16));
}

// Vérifier si un fichier a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    // Chemin où les fichiers seront stockés
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Crée le dossier s'il n'existe pas
    }

    // Informations sur le fichier uploadé
    $fileName = basename($_FILES['file']['name']);
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Générer un nom unique avec un UUID
    $uniqueFileName = generateUUID() . '.' . $fileType;
    $uploadFile = $uploadDir . $uniqueFileName;

    // Vérifications
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'pdf']; // Extensions autorisées
    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "<p class='message'>Fichier uploadé avec succès : <strong>$uniqueFileName</strong></p>";
        } else {
            echo "<p class='error'>Erreur lors de l'upload du fichier.</p>";
        }
    } else {
        echo "<p class='error'>Type de fichier non autorisé. Extensions acceptées : jpg, jpeg, png, gif, pdf.</p>";
    }
}
?>
</body>
</html>
