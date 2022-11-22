<?php

$dsn = 'mysql:dbname=tb240384db;host=localhost';
$user = 'tb-240384';
$password = 'KZr2gT8RFu';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sql ="select * from review where id = (select max(id) from review) ";
$stmt = $pdo->query($sql);
$newdata = $stmt->fetchAll();

foreach($newdata as $new){
$yourid=$new[0];
$yourpassword=$new[4];}

?>


<html>
<head>
　  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<style>

body{
  background-color:rgb(255, 255, 255) ;
  padding:1% 3%;
  vertical-align:center;
}

nav ul{
display: table;
margin: 10 auto;
padding: 10 ;
width: 80%;
font-size:17px;
}
nav li{
display: table-cell;
min-width: 50px;
background-color:rgb(218, 148, 148) ;
border: 1px solid #e9e9e9;
text-align: center;
border-bottom: 3px solid rgb(218, 148, 148);
}
nav a{
display: block;
width: 100%;
text-decoration: none;
color: #555;
padding: 10px;
}

nav li:hover{
border-bottom: 3px solid #777;
}


.btn {
  font-size: 0.8rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 0.5rem 3rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.1rem;
  color: #555;
  background-color:rgba(218, 148, 148,0.6) ;
  margin-top:5px;
  margin-left:15px;
}

.btn:hover {
  color: #fff;
  background: rgba(218, 148, 148,0.8);
}


/* ここから下はログインフォーム */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400);

/* fontawesome */
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

/* Simple Reset */
* { margin: 0; padding: 0; box-sizing: border-box; }


body {
  background: #e9e9e9;
  color: #5e5e5e;
  font: 400 87.5%/1.5em 'Open Sans', sans-serif;
}


h1 {
  display:block;
  text-align: center;
  padding: 2em 0 1em 0;
  margin:20px;
  color:rgba(218, 148, 148,0.9);
}

.button{
    display:block;
    margin:20px 60px;
    padding:20px 20px;
}

.form-wrapper {
　display:block;
  background: #fafafa;
  margin: 3em auto;
  padding: 0 1em;
  max-width: 35%;
  height:50%;
  text-align:center;
  
}

p{
    font-size:20px;
}
.copyright{
    color:gray;
    text-align:right;
}

</style>
<link href="m6-2.css" rel=>
    
<a href="https://tech-base.net/tb-240384/m6-2-homeafterlogin.php" class="btn">manalog</a>
<nav class="menu　current">
  <ul>
    <li><a href="https://tech-base.net/tb-240384/m6-2-homebeforelogin.php">ログアウト</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-postafterlogin.php">&nbsp;&nbsp;&nbsp;投稿&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-aboutafterlogin.php">&nbsp;ABOUT&nbsp;</a></li>
  </ul>
</nav>

<div class="form-wrapper">
    <h1>登録完了！</h1>
    <p>ID：<?php echo $yourid;?></p>
    <br>
    <p>パスワード：<?php echo $yourpassword;?></p>
    <br>
    <a  href="https://tech-base.net/tb-240384/m6-2-homeafterlogin.php" class="btn button" title="Sign In">ホーム画面に戻る</a>
    <a href="https://tech-base.net/tb-240384/m6-2-all.php" class="btn button" title="Sign In">全ての投稿を見る</a>
</div>

<footer>
  <p class="copyright">&copy; 2022 yurika </p>
</footer>
</body>
　
　
</html>

