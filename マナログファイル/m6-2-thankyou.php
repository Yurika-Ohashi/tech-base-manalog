
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


h1 {
    display:block;
  text-align: center;
  padding: 2em 0 1em 0;
  margin:10px;
  font-size:30px;
  color:#333;
}

.button{
    display:block;
    margin:20px 60px;
    padding:20px 20px;
    font-size:15px;
}

.form-wrapper {
　display:block;
  background: #fafafa;
  margin: 5% auto;
  padding: 0em 1em;
  max-width: 35%;
  height:50%;
  text-align:center;
  
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
    <li><a href="https://tech-base.net/tb-240384/m6-2-aboutafterlogin.php">&nbsp;ABOUT&nbsp;</a></li>
  </ul>
</nav>

<div class="form-wrapper">
    <h1>ありがとうございました！</h1>
    <a  href="https://tech-base.net/tb-240384/m6-2-homeafterlogin.php" class="btn button" title="Sign In">ホーム画面に戻る</a>
    <a href="https://tech-base.net/tb-240384/m6-2-all.php" class="btn button" title="Sign In">全ての投稿を見る</a>
</div>

<footer>
  <p class="copyright">&copy; 2022 yurika </p>
</footer>
</body>
　
　
</html>