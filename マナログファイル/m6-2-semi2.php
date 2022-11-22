<?php

$dsn = 'mysql:dbname=tb240384db;host=localhost';
$user = 'tb-240384';
$password = 'KZr2gT8RFu';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sql = "SELECT * FROM review";
$stmt = $pdo->query($sql);
$review = $stmt->fetchAll();

$sql = "SELECT * FROM reviewall";
$stmt = $pdo->query($sql);
$reviewall = $stmt->fetchAll();

if(!empty($_POST["searchedteacher"])){
    header('Location: https://tech-base.net/tb-240384/m6-2-semisearch1.php');}

?>