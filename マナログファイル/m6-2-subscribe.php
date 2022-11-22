<?php
    $namae="名前";
    $komento="コメント";
    
    $dsn = 'mysql:dbname=tb240384db;host=localhost';
    $user = 'tb-240384';
    $password = 'KZr2gT8RFu';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    $sql = "CREATE TABLE IF NOT EXISTS review"
    ." ("
    . "id INT AUTO_INCREMENT PRIMARY KEY,"
    . "name char(32),"
    . "faculty TEXT,"
    . "grade TEXT,"
    . "password TEXT"
    .");";
    $stmt = $pdo->query($sql);
        
    if(!empty($_POST["name"])&&!empty($_POST["faculty"])&&($_POST["grade"])&&($_POST["password"])){
        $name=$_POST["name"];
        $faculty=$_POST["faculty"];
        $grade=$_POST["grade"];
        $password=$_POST["password"];
        
        $sql = $pdo -> prepare("INSERT INTO review (name, faculty,grade,password) VALUES (:name, :faculty, :grade, :password)");
        $sql -> bindParam(':name', $name, PDO::PARAM_STR);
        $sql -> bindParam(':faculty', $faculty, PDO::PARAM_STR);
        $sql -> bindParam(':grade', $grade, PDO::PARAM_STR);
        $sql -> bindParam(':password', $password, PDO::PARAM_STR);
        $sql -> execute();
        
        header("Location:https://tech-base.net/tb-240384/m6-2-yourid.php");
        
    }
    
    
    
?>


  
<html>
<head>
  <meta name="viewport" content="width=320, height=480, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes"><!-- for smartphone. ここは一旦、いじらなくてOKです。 -->
	<meta charset="utf-8">
	<title>マナログ</title>

</head>
<body>
    
        
<style>


@import url(https://fonts.googleapis.com/css?family=Open+Sans:400);

/* ここから下はメニュー */

body{
  font-family: 'Open Sans', sans-serif;
  background-color: #e9e9e9;
  padding:1% 3%;
  
  
}
.midashi{
  color:rgb(109, 74, 74);
  text-align:center
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



</style>
<link href="m6-2.css" rel=>
    
<a href="https://tech-base.net/tb-240384/m6-2-homebeforelogin.php" class="btn">manalog</a>

<nav class="menu　current">
  <ul>
    <li><a href="">新規登録</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-login.html">ログイン</a></li>
    <li><a href="">&nbsp;&nbsp;&nbsp;投稿&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-aboutbeforelogin.php">&nbsp;ABOUT&nbsp;</a></li>
  </ul>
</nav>

    <div class="form-wrapper">
  <h1>Subscribe</h1>
  <form  method="POST" action="">
    <div class="form-item">
      <label for="name"></label>
      <input type="text" name="name" required="required" placeholder="Name"></input>
    </div>
    <div class="form-item">
      <label for="faculty"></label>
      <input type="text" name="faculty" required="required" placeholder="Faculty 　　ex.言語文化学部"></input>
    </div>
    <div class="form-item">
      <label for="grade"></label>
      <input type="number" name="grade" required="required" placeholder="Grade"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="Password"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Subscribe" value="登録"></input>
    </div>
  </form>
</div>



<style>

/* Fonts */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400);

/* fontawesome */
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}


/* Form Layout */
.form-wrapper {
  background: #fafafa;
  margin: 3em auto;
  padding: 1em 1em 3em;
  max-width: 370px;
}

h1 {
  text-align: center;
  padding: 0.5em 0;
  color:#777;
}

form {
  padding: 0 1.5em;
  
}

.form-item {
  margin-bottom: 0.75em;
  width: 100%;
}

.form-item input {
  background: #fafafa;
  border: none;
  border-bottom: 2px solid #e9e9e9;
  color: #666;
  font-family: 'Open Sans', sans-serif;
  font-size: 1em;
  height: 50px;
  transition: border-color 0.3s;
  width: 100%;
}

.form-item input:focus {
  border-bottom: 2px solid #c0c0c0;
  outline: none;
}

.button-panel {
  margin: 2em 0 0;
  width: 100%;
}

.button-panel .button {
  background: #f16272;
  border: none;
  color: #fff;
  cursor: pointer;
  height: 50px;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.2em;
  letter-spacing: 0.05em;
  text-align: center;
  text-transform: uppercase;
  transition: background 0.3s ease-in-out;
  width: 100%;
}

.button:hover {
  background: #ee3e52;
}



.cp_ipselect {
  overflow: hidden;
  width: 90%;
  margin: 2em auto;
  text-align: center;
}
.cp_ipselect select {
  width: 100%;
  padding-right: 1em;
  cursor: pointer;
  text-indent: 0.01px;
  text-overflow: ellipsis;
  border: none;
  outline: none;
  background: transparent;
  background-image: none;
  box-shadow: none;
  -webkit-appearance: none;
  appearance: none;
}
.cp_ipselect select::-ms-expand {
    display: none;
}
.cp_ipselect.cp_sl01 {
  position: relative;
  border-radius: 2px;
  border: 2px solid skyblue;
  border-radius: 50px;
  background: #ffffff;
}
.cp_ipselect.cp_sl01::before {
  position: absolute;
  top: 0.8em;
  right: 0.8em;
  width: 0;
  height: 0;
  padding: 0;
  content: '';
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 6px solid skyblue;
  pointer-events: none;
}
.cp_ipselect.cp_sl01 select {
  padding: 8px 38px 8px 8px;
  color: black;
}
.copyright{
    color:gray;
    text-align:right;
}
    
</style>
<footer>
  <p class="copyright">&copy; 2022 yurika </p>
</footer>
</body>
　
　
</html>