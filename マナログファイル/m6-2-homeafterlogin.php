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
  background: linear-gradient(180deg, #e9e9e9 0%, #e9e9e9 60%, #fff 60%, #fff 100%);
  padding:1% 3%;
  
  
}
.midashi{
  color:rgb(109, 74, 74);
  text-align:left;
  font-size:20px;
}

.taitoru{
    padding-left:10%;
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

.grade {
    position: relative;
    text-align:center;
}

.grade::before {
    content: "";
    position: absolute;
    width: 90%;
    height: 100%;
    top: 0;
    left: 5%;
    background: linear-gradient(10deg, #e9e9e9, transparent);
}

p{
    text-align:right;
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
    margin-top:5px;
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
    
<a href="" class="btn">manalog</a>

<nav class="menu　current">
  <ul>
    <li><a href="https://tech-base.net/tb-240384/m6-2-homebeforelogin.php">ログアウト</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-postafterlogin.php">&nbsp;&nbsp;&nbsp;投稿&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-genbun1.php">&nbsp;SEARCH&nbsp;</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-aboutafterlogin.php">&nbsp;ABOUT&nbsp;</a></li>
  </ul>
</nav>


<div class="grade">
<img  src="横長の外大.jpg" alt="大学の写真" title="プロフィール画像"  width="90%" >
</div>

<div class="taitoru">
<h1 class="midashi"> ◯◯◯◯大学の授業レビュー</h1>
</div>

<hr>

<h2  class="search">SEARCH</h2>

<div class="kara">
<a href="https://tech-base.net/tb-240384/m6-2-genbun1.php" class="karabtn btn">学部から</a>
<a href="https://tech-base.net/tb-240384/m6-2-first1.php" class="karabtn btn">学年から</a>
<a href="https://tech-base.net/tb-240384/m6-2-semi1.php" class="karabtn btn">ゼミから</a>
</div>

<a href="https://tech-base.net/tb-240384/m6-2-all.php" class="all btn">投稿一覧</a>

<footer>
  <p class="copyright">&copy; 2022 yurika </p>
</footer>
</body>
</html>

