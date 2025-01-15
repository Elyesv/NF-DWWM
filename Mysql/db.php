<?php

// Informations de connexion
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "dwwm-1224";

// Établir la connexion
$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
echo "Connexion réussie !";
