<?php
$host = 'localhost';
$dbname = 'if0_40263765_online_voting';
$username = 'if0_40263765';
$password = 'VISKF6Nfff';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>