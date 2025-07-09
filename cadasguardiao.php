<?php
$host = 'localhost';
$db = 'abrigo_seguro';  // substitua pelo nome real do seu banco
$user = 'root';         // substitua pelo seu usuário do MySQL
$pass = 'root';             // e pela senha, se houver

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
?>