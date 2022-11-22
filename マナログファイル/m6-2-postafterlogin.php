<?php
    $sent="送信";

    $dsn = 'mysql:dbname=tb240384db;host=localhost';
    $user = 'tb-240384';
    $password = 'KZr2gT8RFu';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    
    
    $sql = "CREATE TABLE IF NOT EXISTS reviewall"
    ." ("
    . "id INT AUTO_INCREMENT PRIMARY KEY,"
    . "faculty TEXT,"
    . "kind TEXT,"
    . "reason TEXT,"
    . "class TEXT,"
    . "review TEXT,"
    . "yourid INT,"
    . "teacher TEXT"
    .");";
    
    $stmt = $pdo->query($sql);
    
    if(!empty($_POST["yourid"])){
        
        $yourid=$_POST["yourid"];
        $sql = "SELECT * FROM review WHERE id=$yourid ";
        $stmt = $pdo->query($sql);
        $stmt->bindValue(':id', $yourid);
        foreach ($stmt as $row) {
            $rightpassword=$row['password'];}
        if($rightpassword==$_POST['yourpassword']&&!empty($_POST["faculty1"])&&!empty($_POST["kind1"])&&($_POST["reason1"])&&($_POST["class1"])&&!empty($_POST["faculty2"])&&!empty($_POST["kind2"])&&($_POST["reason2"])&&($_POST["class2"])&&!empty($_POST["faculty3"])&&!empty($_POST["kind3"])&&($_POST["reason3"])&&($_POST["class3"])&&!empty($_POST["faculty4"])&&!empty($_POST["kind4"])&&($_POST["reason4"])&&($_POST["class4"])&&!empty($_POST["faculty5"])&&!empty($_POST["kind5"])&&($_POST["reason5"])&&($_POST["class5"])&&($_POST["yourid"])&&($_POST["teacher"])){
        
        $faculty=$_POST["faculty1"];
        $kind=$_POST["kind1"];
        $reason=$_POST["reason1"];
        $class=$_POST["class1"];
        $review=$_POST["review1"];
        $yourid=$_POST["yourid"];
        $teacher=$_POST["teacher"];
        
        $sql = $pdo -> prepare("INSERT INTO reviewall (faculty,kind,reason,class,review,yourid,teacher) VALUES (:faculty,:kind,:reason,:class,:review,:yourid,:teacher)");
        $sql -> bindParam(':faculty', $faculty, PDO::PARAM_STR);
        $sql -> bindParam(':kind', $kind, PDO::PARAM_STR);
        $sql -> bindParam(':reason', $reason, PDO::PARAM_STR);
        $sql -> bindParam(':class', $class, PDO::PARAM_STR);
        $sql -> bindParam(':review', $review, PDO::PARAM_STR);
        $sql -> bindParam(':yourid', $yourid, PDO::PARAM_STR);
        $sql -> bindParam(':teacher', $teacher, PDO::PARAM_STR);
        $sql -> execute();
    
    
        $faculty=$_POST["faculty2"];
        $kind=$_POST["kind2"];
        $reason=$_POST["reason2"];
        $class=$_POST["class2"];
        $review=$_POST["review2"];
        
        
        $sql = $pdo -> prepare("INSERT INTO reviewall (faculty,kind,reason,class,review,yourid,teacher) VALUES (:faculty,:kind,:reason,:class,:review,:yourid,:teacher)");
        $sql -> bindParam(':faculty', $faculty, PDO::PARAM_STR);
        $sql -> bindParam(':kind', $kind, PDO::PARAM_STR);
        $sql -> bindParam(':reason', $reason, PDO::PARAM_STR);
        $sql -> bindParam(':class', $class, PDO::PARAM_STR);
        $sql -> bindParam(':review', $review, PDO::PARAM_STR);
        $sql -> bindParam(':yourid', $yourid, PDO::PARAM_STR);
        $sql -> bindParam(':teacher', $teacher, PDO::PARAM_STR);
        $sql -> execute();
    
    
        $faculty=$_POST["faculty3"];
        $kind=$_POST["kind3"];
        $reason=$_POST["reason3"];
        $class=$_POST["class3"];
        $review=$_POST["review3"];
        
        
        $sql = $pdo -> prepare("INSERT INTO reviewall (faculty,kind,reason,class,review,yourid,teacher) VALUES (:faculty,:kind,:reason,:class,:review,:yourid,:teacher)");
        $sql -> bindParam(':faculty', $faculty, PDO::PARAM_STR);
        $sql -> bindParam(':kind', $kind, PDO::PARAM_STR);
        $sql -> bindParam(':reason', $reason, PDO::PARAM_STR);
        $sql -> bindParam(':class', $class, PDO::PARAM_STR);
        $sql -> bindParam(':review', $review, PDO::PARAM_STR);
        $sql -> bindParam(':yourid', $yourid, PDO::PARAM_STR);
        $sql -> bindParam(':teacher', $teacher, PDO::PARAM_STR);
        $sql -> execute();
    
   
        $faculty=$_POST["faculty4"];
        $kind=$_POST["kind4"];
        $reason=$_POST["reason4"];
        $class=$_POST["class4"];
        $review=$_POST["review4"];
        
        
        $sql = $pdo -> prepare("INSERT INTO reviewall (faculty,kind,reason,class,review,yourid,teacher) VALUES (:faculty,:kind,:reason,:class,:review,:yourid,:teacher)");
        $sql -> bindParam(':faculty', $faculty, PDO::PARAM_STR);
        $sql -> bindParam(':kind', $kind, PDO::PARAM_STR);
        $sql -> bindParam(':reason', $reason, PDO::PARAM_STR);
        $sql -> bindParam(':class', $class, PDO::PARAM_STR);
        $sql -> bindParam(':review', $review, PDO::PARAM_STR);
        $sql -> bindParam(':yourid', $yourid, PDO::PARAM_STR);
        $sql -> bindParam(':teacher', $teacher, PDO::PARAM_STR);
        $sql -> execute();
        
   
        $faculty=$_POST["faculty5"];
        $kind=$_POST["kind5"];
        $reason=$_POST["reason5"];
        $class=$_POST["class5"];
        $review=$_POST["review5"];
        
        
        $sql = $pdo -> prepare("INSERT INTO reviewall (faculty,kind,reason,class,review,yourid,teacher) VALUES (:faculty,:kind,:reason,:class,:review,:yourid,:teacher)");
        $sql -> bindParam(':faculty', $faculty, PDO::PARAM_STR);
        $sql -> bindParam(':kind', $kind, PDO::PARAM_STR);
        $sql -> bindParam(':reason', $reason, PDO::PARAM_STR);
        $sql -> bindParam(':class', $class, PDO::PARAM_STR);
        $sql -> bindParam(':review', $review, PDO::PARAM_STR);
        $sql -> bindParam(':yourid', $yourid, PDO::PARAM_STR);
        $sql -> bindParam(':teacher', $teacher, PDO::PARAM_STR);
        $sql -> execute();
        
     
        header("Location:https://tech-base.net/tb-240384/m6-2-thankyou.php");}}
    
?>

<html>
　<head>
  <meta name="viewport" content="width=320, height=480, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes"><!-- for smartphone. ここは一旦、いじらなくてOKです。 -->
	<meta charset="utf-8">
	<title>マナログ</title>

</head>
<body>
<a href="https://tech-base.net/tb-240384/m6-2-homeafterlogin.php" class="btn">manalog</a>

<nav class="menu　current">
  <ul>
    <li><a href="https://tech-base.net/tb-240384/m6-2-homebeforelogin.php">ログアウト</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-postafterlogin.php">&nbsp;&nbsp;&nbsp;投稿&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-genbun1.php">&nbsp;SEARCH&nbsp;</a></li>
    <li><a href="https://tech-base.net/tb-240384/m6-2-aboutafterlogin.php">&nbsp;ABOUT&nbsp;</a></li>
  </ul>
</nav>
<p class="about">１〜４年次に履修した授業を振り返って、「進路選択や研究活動に役に立った」、「学びが多かった」と感じる授業を５つご記入ください。</p>
<p class="about">感想は任意ですが、ぜひご記入お願いします！</p>

<div class="wrapper">
<form class="contact-form" action="" method="post">
    
<div class="info">
<p>　　ID: <input type=number name="yourid" >　パスワード: <input type=text name="yourpassword"></p>
<p>　　所属するゼミの教授名: <input type=text name="teacher"></p>
</div>

<div class="fiveforms">
<div class="box">
<div><p class="class">授業１</p></div>
 <div class="item">
     <select name="faculty1">
            <option value=1 >言語文化学部</option>
            <option value=2 >国際社会学部</option>
            <option value=3 >国際日本学部</option>
            <option value=4 >世界教養科目</option>
    </select>
  </div>
  <div class="item">
    <select name="kind1">
        <option value=1>導入科目</option>
        <option value=2>概論科目</option>
        <option value=3>専門科目</option>
    </select>
  </div>
  <div class="item">
    　<input type="textarea" name="class1" placeholder="授業名(必須)">
  </div>
  <div class="item">
    <select name="reason1">
        <option value=1>進路選択に役立った</option>
        <option value=2>ゼミでの研究に役立った</option>
        <option value=3>学びが多かった</option>
    </select>
  </div>
  <div class="item">
  <textarea name="review1" placeholder="感想(任意)" wrap="soft"></textarea>
  </div>

</div>

<div class="box">
<div><p class="class">授業２</p></div>
<div class="item">
     <select name="faculty2">
            <option value=1 >言語文化学部</option>
            <option value=2 >国際社会学部</option>
            <option value=3 >国際日本学部</option>
            <option value=4 >世界教養科目</option>
    </select>
  </div>
  <div class="item">
    <select name="kind2">
        <option value=1>導入科目</option>
        <option value=2>概論科目</option>
        <option value=3>専門科目</option>
    </select>
  </div>
  <div class="item">
    　<input type="textarea" name="class2" placeholder="授業名(必須)">
  </div>
  <div class="item">
    <select name="reason2">
        <option value=1>進路選択に役立った</option>
        <option value=2>ゼミでの研究に役立った</option>
        <option value=3>学びが多かった</option>
    </select>
  </div>
  <div class="item">
  <textarea name="review2" placeholder="感想(任意)" wrap="soft"></textarea>
  </div>


</div>

<div class="box">
<div><p class="class">授業３</p></div>
<div class="item">
     <select name="faculty3">
            <option value=1 >言語文化学部</option>
            <option value=2 >国際社会学部</option>
            <option value=3 >国際日本学部</option>
            <option value=4 >世界教養科目</option>
    </select>
  </div>
  <div class="item">
    <select name="kind3">
        <option value=1>導入科目</option>
        <option value=2>概論科目</option>
        <option value=3>専門科目</option>
    </select>
  </div>
  <div class="item">
    　<input type="textarea" name="class3" placeholder="授業名(必須)">
  </div>
  <div class="item">
    <select name="reason3">
        <option value=1>進路選択に役立った</option>
        <option value=2>ゼミでの研究に役立った</option>
        <option value=3>学びが多かった</option>
    </select>
  </div>
  <div class="item">
  <textarea name="review3" placeholder="感想(任意)" wrap="soft"></textarea>
  </div>

</div>

<div class="box">
<div><p class="class">授業４</p></div>
<div class="item">
     <select name="faculty4">
            <option value=1 >言語文化学部</option>
            <option value=2 >国際社会学部</option>
            <option value=3 >国際日本学部</option>
            <option value=4 >世界教養科目</option>
    </select>
  </div>
  <div class="item">
    <select name="kind4">
        <option value=1>導入科目</option>
        <option value=2>概論科目</option>
        <option value=3>専門科目</option>
    </select>
  </div>
  <div class="item">
    　<input  name="class4" placeholder="授業名(必須)">
  </div>
  <div class="item">
    <select name="reason4">
        <option value=1>進路選択に役立った</option>
        <option value=2>ゼミでの研究に役立った</option>
        <option value=3>学びが多かった</option>
    </select>
  </div>
  <div class="item">
  <textarea name="review4" placeholder="感想(任意)" wrap="soft"></textarea>
  </div>
 

</div>

<div class="box">
<div><p class="class">授業５</p></div>
<div class="item">
     <select name="faculty5">
            <option value=1 >言語文化学部</option>
            <option value=2 >国際社会学部</option>
            <option value=3 >国際日本学部</option>
            <option value=4 >世界教養科目</option>
    </select>
  </div>
  <div class="item">
    <select name="kind5">
        <option value=1>導入科目</option>
        <option value=2>概論科目</option>
        <option value=3>専門科目</option>
    </select>
  </div>
  <div class="item">
    　<input  name="class5" placeholder="授業名(必須)">
  </div>
  <div class="item">
    <select name="reason5">
        <option value=1>進路選択に役立った</option>
        <option value=2>ゼミでの研究に役立った</option>
        <option value=3>学びが多かった</option>
    </select>
  </div>
  <div class="item">
  <textarea name="review5" placeholder="感想(任意)" wrap="soft"></textarea>
  </div>
</div>
</div>
<div class="item no-label">
    <input type="submit" value="<?php echo $sent ; ?>">
</div>
  
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
  <p class="copyright">&copy; 2022 yurika </p>
</footer>

<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400);


body{
  font-family: 'Open Sans', sans-serif;
  background: #e9e9e9;
  padding:1% 3%;
}

/*以下、メニュー画面について。*/

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

/*以下、manalogロゴについて。*/

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
  margin-left:-5px;
}

.btn:hover {
  color: #fff;
  background: rgba(218, 148, 148,0.8);
}

/*以下、送信フォームについて。*/

p.about,p.class{
    color:#444;
    display:block;
    margin:5px 11%;
}

.wrapper{
    display:block;
    background-color:#FFF;
    width:97%;
    text-align:center;
    height:50%;
    margin:1% auto;
    
}

.info{
    background-color:rgba(218, 148, 148,0.7);
    text-align:left;
    padding:3px 5px;
    color:#444;
}

.info input{
    border-bottom:#444 1px solid;
    border-right:none;
    border-left:none;
    border-top:none;
    background-color:inherit;
}

.fiveforms{
    background-color:#FFF;
    text-align:center;
    display:flex;
    margin:auto;
    height:97%;

}

.box{
    background: #e9e9e9;
    width:18%;
    height:90%;
    margin:auto;
    border: 1px solid #ccc;
    vertical-align:middle;
}


.contact-form {
  font-size: 13px;
  font-family: sans-serif;
  background-color:#FFF;
}

.item {
  display: block;
  margin:  10px auto;
  padding:2px;
}

.label {
  float: left;
  padding: 5px;
  margin:10px;
}

.contact-form .item textarea {
  display: block;
  padding: 5px;
  margin:auto;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 13px;
  outline: none;
  resize: vertical;
  width:90%;
  height:40%;
  background-color:#FFF;
}

.contact-form .item ::placeholder {
  color: #ccc;
}


input[type=submit]{
  border: none;
  outline: none;
  line-height: 30px;
  margin-top:0px;
  margin-bottom:30px;
  width: 160px;
  text-align: center;
  font-size: 13px;
  color: #fff;
  background-color:rgb(218, 148, 148);
  border-bottom: 4px solid #777;
  cursor:pointer;
  box-sizing: content-box;
  transition:0.3s ease all
}

input[type=submit]:hover{
  border-bottom-width:0;
  transform:translateY(4px)
}
.copyright{
    color:gray;
    text-align:right;
    margin-right:10px;
    margin-bottom:-10px;
}


</style>

</body>
</html>