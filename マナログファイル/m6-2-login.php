<?php

    

    $dsn = 'mysql:dbname=tb240384db;host=localhost';
    $user = 'tb-240384';
    $password = 'KZr2gT8RFu';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

   
   
        
        
    if(!empty($_POST["id"])){
        
        $id=$_POST["id"];
        $sql = "SELECT * FROM review WHERE id=$id ";
        $stmt = $pdo->query($sql);
        $stmt->bindValue(':id', $id);
        foreach ($stmt as $row) {
            $rightpassword=$row['password'];}
        if($rightpassword==$_POST['password']){
            header('Location: https://tech-base.net/tb-240384/m6-2-homeafterlogin.php');
            exit();
        }
        else{header('Location: https://tech-base.net/tb-240384/m6-2-login.html');};
        
        
    }
    
        
    $sql = 'SELECT * FROM review';
            $stmt = $pdo->query($sql);
            $results = $stmt->fetchAll();
            foreach ($results as $row){
                echo $row['id'].',';
                echo $row['name'].',';
                echo $row['faculty'].',';
                echo $row['grade'].',';
                echo $row['password'].'<br>';
                echo "<hr>";}
    
    
?>