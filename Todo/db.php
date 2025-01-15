<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'todo_app';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die('Erreur de connexion : ' . mysqli_connect_error());
}

