<?php

require_once("./config.php");

$dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";";
try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "connection";
} catch (PDOException $e) {
    die("Connexion échouée : " . $e->getMessage());
}
