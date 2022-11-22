
<?php

$dsn = 'mysql:dbname=tb240384db;host=localhost';
$user = 'tb-240384';
$password = 'KZr2gT8RFu';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sql = "SELECT * FROM reviewall WHERE faculty=4 and kind=1";
$stmt = $pdo->query($sql);
$firstfirst = $stmt->fetchAll();

$sql = "SELECT * FROM reviewall WHERE faculty=4 and kind=2";
$stmt = $pdo->query($sql);
$firstsecond = $stmt->fetchAll();

$sql = "SELECT * FROM reviewall WHERE faculty=4 and kind=3";
$stmt = $pdo->query($sql);
$firstthird = $stmt->fetchAll();


    if(!empty($_POST["faculty"])){
        if($_POST["faculty"]=="genbun"){header('Location: https://tech-base.net/tb-240384/m6-2-genbun1.php');}
        if($_POST["faculty"]=="kokusya"){header('Location: https://tech-base.net/tb-240384/m6-2-kokusya1.php');}
        if($_POST["faculty"]=="kokunichi"){header('Location: https://tech-base.net/tb-240384/m6-2-kokunichi1.php');}
        if($_POST["faculty"]=="world"){header('Location: https://tech-base.net/tb-240384/m6-2-world1.php');}
    }

                
?>
