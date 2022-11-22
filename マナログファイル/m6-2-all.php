<?php include('m6-2-genbun2.php'); ?>


<html>
<head>
  <meta name="viewport" content="width=320, height=480, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes"><!-- for smartphone. ここは一旦、いじらなくてOKです。 -->
	<meta charset="utf-8">
	<title>マナログ</title>

</head>
<body>

    
<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400);

body{
    font-family: 'Open Sans', sans-serif;
  background: #e9e9e9;
  padding:1% 3%;
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

.kara{
    display: flex;
    justify-content: center;
}

.karabtn{
    margin:4px;
    font-size:15px;
}
.search{
    text-align:center;
}



 select {

  /* styling */
  background-color: white;
  border: thin solid gray;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 10px;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;


/* arrows */

  background-image:
    linear-gradient(45deg, transparent 50%, rgba(218, 148, 148,0.6) 50%),
    linear-gradient(135deg, rgba(218, 148, 148,0.6) 50%, transparent 50%),
    linear-gradient(to right, rgba(218, 148, 148,0.6), rgba(218, 148, 148,0.6));
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
}

select:focus {
  background-image:
    linear-gradient(45deg, white 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, white 50%),
    linear-gradient(to right, gray, gray);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}
.all{
    display:block;
    margin: auto 40%;
    background: rgba(218, 148, 148,0.9);
    font-size:15px;
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
    <li><a href="https://tech-base.net/tb-240384/m6-2-login.html">ログアウト</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-postafterlogin.php">&nbsp;&nbsp;&nbsp;投稿&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-genbun1.php">&nbsp;SEARCH&nbsp;</a></li>
    <li><a href="">&nbsp;ABOUT&nbsp;</a></li>
  </ul>
</nav>

<h2  class="search">SEARCH</h2>

<div class="kara">
<a href="https://tech-base.net/tb-240384/m6-2-genbun1.php" class="karabtn btn">学部から</a>
<a href="https://tech-base.net/tb-240384/m6-2-first1.php" class="karabtn btn">学年から</a>
<a href="https://tech-base.net/tb-240384/m6-2-semi1.php" class="karabtn btn">ゼミから</a>
</div>
<a href="https://tech-base.net/tb-240384/m6-2-all.php" class="all btn">投稿一覧</a>
<h2 >投稿一覧</h2>

<hr>


<?php

$dsn = 'mysql:dbname=tb240384db;host=localhost';
$user = 'tb-240384';
$password = 'KZr2gT8RFu';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sql = "SELECT * FROM reviewall";
$stmt = $pdo->query($sql);
$all= $stmt->fetchAll();

foreach($all as $row){
    if($row["faculty"]==1){$row["faculty"]="言語文化学部";}
    if($row["faculty"]==2){$row["faculty"]="国際社会学部";}
    if($row["faculty"]==3){$row["faculty"]="国際日本学部";}
    if($row["faculty"]==4){$row["faculty"]="世界教養科目";}
    if($row["kind"]==1){$row["kind"]="導入科目";}
    if($row["kind"]==2){$row["kind"]="概論科目";}
    if($row["kind"]==3){$row["kind"]="専門科目";}
    if($row["reason"]==1){$row["reason"]="進路選択に役立った";}
    if($row["reason"]==2){$row["reason"]="ゼミでの研究に役立った";}
    if($row["reason"]==3){$row["reason"]="学びが多かった";}
        
    
    echo $row["id"]."：".$row["faculty"]."　".$row["kind"]."　「".$row["class"]."」<br>　　"."理由：".$row["reason"]."　感想：".$row["review"]."　　　"."投稿者ID：".$row["yourid"]."　　"."所属ゼミ教授名：".$row["teacher"]."<br><br>"
;}

    
 
?>


<footer>
  <p class="copyright">&copy; 2022 yurika </p>
</footer>
</body>
</html>