<?php
// test_db.php

$host = '127.0.0.1';            // Nom du service MySQL dans docker-compose
$db   = 'kitchen';          // Nom de ta base
$user = 'kitchen_user';          // Utilisateur MySQL
$pass = 'SuperSecret123';  // Mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion à la base de données réussie !<br>";

    // Optionnel : afficher les tables
    $stmt = $pdo->query("SHOW TABLES");
    echo "Tables existantes :<br>";
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo "- " . $row[0] . "<br>";
    }

} catch (PDOException $e) {
    echo "❌ Échec de la connexion : " . $e->getMessage();
}