<?php

$dsn = 'mysql:dbname=tb240384db;host=localhost';
$user = 'tb-240384';
$password = 'KZr2gT8RFu';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sql = "SELECT * FROM reviewall WHERE kind=2 and faculty=1";
$stmt = $pdo->query($sql);
$firstfirst = $stmt->fetchAll();

$sql = "SELECT * FROM reviewall WHERE kind=2 and faculty=2";
$stmt = $pdo->query($sql);
$firstsecond = $stmt->fetchAll();

$sql = "SELECT * FROM reviewall WHERE kind=2 and faculty=3";
$stmt = $pdo->query($sql);
$firstthird = $stmt->fetchAll();
                

    if(!empty($_POST["kind"])){
        if($_POST["kind"]=="dounyu"){header('Location: https://tech-base.net/tb-240384/m6-2-first1.php');}
        if($_POST["kind"]=="gairon"){header('Location: https://tech-base.net/tb-240384/m6-2-second1.php');}
        if($_POST["kind"]=="senmon"){header('Location: https://tech-base.net/tb-240384/m6-2-third1.php');}
    }
?>