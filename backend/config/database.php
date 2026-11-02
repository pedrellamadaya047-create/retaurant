
<?php

$server = 'localhost';
$username = 'root';
$userpass = '';
$dbname = "restaurant_db";

try {
    $dbconn = new PDO(
        "mysql:host=$server;dbname=$dbname;charset=utf8mb4",
        $username,
        $userpass
    );

    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Echec de connexion à la base de données.");
}