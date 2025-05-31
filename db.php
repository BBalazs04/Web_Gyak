<?php
$host = 'mysql.omega:3306';
$db   = 'modernizalt';
$user = 'modernizalt';
$pass = '12345678';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=3306;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die('Adatbáziskapcsolati hiba: ' . $e->getMessage());
}
?>