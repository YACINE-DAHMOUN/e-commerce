<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ecommerce', 'root', 'root');
    echo 'Connexion réussie !';
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
