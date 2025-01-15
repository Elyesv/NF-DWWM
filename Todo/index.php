<?php
include 'db.php';

// Paramètres par défaut
$orderBy1 = isset($_GET['orderBy1']) ? $_GET['orderBy1'] : 'date';
$orderDir1 = isset($_GET['orderDir1']) && $_GET['orderDir1'] === 'DESC' ? 'DESC' : 'ASC';
$orderBy2 = isset($_GET['orderBy2']) ? $_GET['orderBy2'] : 'personne';
$orderDir2 = isset($_GET['orderDir2']) && $_GET['orderDir2'] === 'DESC' ? 'DESC' : 'ASC';
$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

// Requête SQL dynamique avec tri combiné et recherche
$sql = "SELECT * FROM todos WHERE titre LIKE '%$search%' ORDER BY $orderBy1 $orderDir1, $orderBy2 $orderDir2";
$result = mysqli_query($conn, $sql);

// Supprimer une tâche
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM todos WHERE id=$id";
    mysqli_query($conn, $sql);
    header("Location: index.php");
    exit;
}

// Mode édition
$editMode = false;
if (isset($_GET['edit'])) {
    $editMode = true;
    $id = $_GET['edit'];
    $sql = "SELECT * FROM todos WHERE id=$id";
    $resultEdit = mysqli_query($conn, $sql);
    $todoToEdit = mysqli_fetch_assoc($resultEdit);
}

// Ajouter ou mettre à jour une tâche
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = mysqli_real_escape_string($conn, $_POST['titre']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $date = $_POST['date'];
    $personne = mysqli_real_escape_string($conn, $_POST['personne']);

    if (isset($_POST['action']) && $_POST['action'] === 'update') {
        $id = $_POST['id'];
        $sql = "UPDATE todos SET titre='$titre', description='$description', date='$date', personne='$personne' WHERE id=$id";
    } else {
        $sql = "INSERT INTO todos (titre, description, date, personne) VALUES ('$titre', '$description', '$date', '$personne')";
    }

    mysqli_query($conn, $sql);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Todo List</h1>

    <!-- Formulaire d'ajout ou de mise à jour -->
    <?php if ($editMode): ?>
        <h2>Modifier une tâche</h2>
        <form method="POST">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $todoToEdit['id']; ?>">
            <div class="form-control">
                <label for="titre">Titre :</label>
                <input type="text" name="titre" id="titre" value="<?php echo htmlspecialchars($todoToEdit['titre']); ?>" required>
            </div>
            <div class="form-control">
                <label for="description">Description :</label>
                <textarea name="description" id="description" required><?php echo htmlspecialchars($todoToEdit['description']); ?></textarea>
            </div>
            <div class="form-control">
                <label for="date">Date :</label>
                <input type="date" name="date" id="date" value="<?php echo htmlspecialchars($todoToEdit['date']); ?>" required>
            </div>
            <div class="form-control">
                <label for="personne">Personne affectée :</label>
                <input type="text" name="personne" id="personne" value="<?php echo htmlspecialchars($todoToEdit['personne']); ?>" required>
            </div>
            <button type="submit">Mettre à jour</button>
            <a href="index.php">Annuler</a>
        </form>
    <?php else: ?>
        <h2>Ajouter une tâche</h2>
        <form method="POST">
            <div class="form-control">
                <label for="titre">Titre :</label>
                <input type="text" name="titre" id="titre" required>
            </div>
            <div class="form-control">
                <label for="description">Description :</label>
                <textarea name="description" id="description" required></textarea>
            </div>
            <div class="form-control">
                <label for="date">Date :</label>
                <input type="date" name="date" id="date" required>
            </div>
            <div class="form-control">
                <label for="personne">Personne affectée :</label>
                <input type="text" name="personne" id="personne" required>
            </div>
            <button type="submit">Ajouter</button>
        </form>
    <?php endif; ?>

    <!-- Filtres combinés et recherche -->
    <form method="GET">
        <h2>Filtres et recherche</h2>
        <div class="form-control">
            <label for="search">Rechercher par titre :</label>
            <input type="text" name="search" id="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Entrez un mot-clé">
        </div>
        <div class="form-control">
            <label for="orderBy1">Premier tri :</label>
            <select name="orderBy1" id="orderBy1">
                <option value="date" <?php echo $orderBy1 === 'date' ? 'selected' : ''; ?>>Date</option>
                <option value="personne" <?php echo $orderBy1 === 'personne' ? 'selected' : ''; ?>>Personne</option>
                <option value="titre" <?php echo $orderBy1 === 'titre' ? 'selected' : ''; ?>>Titre</option>
            </select>
            <select name="orderDir1" id="orderDir1">
                <option value="ASC" <?php echo $orderDir1 === 'ASC' ? 'selected' : ''; ?>>Croissant</option>
                <option value="DESC" <?php echo $orderDir1 === 'DESC' ? 'selected' : ''; ?>>Décroissant</option>
            </select>
        </div>
        <div class="form-control">
            <label for="orderBy2">Second tri :</label>
            <select name="orderBy2" id="orderBy2">
                <option value="date" <?php echo $orderBy2 === 'date' ? 'selected' : ''; ?>>Date</option>
                <option value="personne" <?php echo $orderBy2 === 'personne' ? 'selected' : ''; ?>>Personne</option>
                <option value="titre" <?php echo $orderBy2 === 'titre' ? 'selected' : ''; ?>>Titre</option>
            </select>
            <select name="orderDir2" id="orderDir2">
                <option value="ASC" <?php echo $orderDir2 === 'ASC' ? 'selected' : ''; ?>>Croissant</option>
                <option value="DESC" <?php echo $orderDir2 === 'DESC' ? 'selected' : ''; ?>>Décroissant</option>
            </select>
        </div>
        <button type="submit">Appliquer les filtres</button>
    </form>

    <!-- Tableau des tâches -->
    <table>
        <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Date</th>
            <th>Personne affectée</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['titre']); ?></a></td>
                <td><?php echo htmlspecialchars($row['description']); ?></td>
                <td><?php echo htmlspecialchars($row['date']); ?></td>
                <td><?php echo htmlspecialchars($row['personne']); ?></td>
                <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>">Modifier</a>
                    <a href="index.php?delete=<?php echo $row['id']; ?>">Supprimer</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
