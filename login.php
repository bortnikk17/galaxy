<?php
session_start()
?>
<?php
include 'db1.php';
?>
<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>webpage</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="menu.css" rel="stylesheet" type="text/css"/>
<link href="fonts.css" rel="stylesheet" type="text/css"/>
<link href="reg.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<div class="maindiv">

<div class="forheader"><h1><a href="index.html" class="main_a" style="font-family:colonna mt;">Galaxy Football</a></h1></div>

<ul id="menu">
<li><a class="a_mmenu" href="index.php"><b style="font-size:0,8em;">Головна<b></a></li>S
<li><a class="a_mmenu" href="news.php"><b>Новини<b></a></li>
<li><a class="a_mmenu" href="match.php"><b>Матчі<b></a></li>
<li><a class="a_mmenu" href="https://www.uefa.com/"><b>UEFA<b></a></li>
<li><a class="a_mmenu" href="chleague.php"><b>Ліга Чемпіонів<b></a></li>
<li><a class="a_mmenu" href="eleague.php"><b>Ліга Європи<b></a></li>
<li><a class="a_mmenu" href="team.php"><b>Збірна<b></a></li>
</ul>

<div class="forbody">

<form method="POST" style="margin-left:42%;">
<h2 style=" font-size:1.6em; margin-left:10%;">Вхід</h2>
<input type="text" name="username" class="form-control" placeholder="Username" required></br>
</br>
<input type="password" name="password" class="form-control" placeholder="Password" required></br>
</br>
<button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-left:10%;">Ввійти</button>
</form>
<p>
<center>
<p style="font-size:1.2em;">Якщо ви не зареєстрованні то здійсніть <a href="index.php" class="btn btn-lg btn-primary btn-block">реєстрацію</a> у системі</p>
</center>
</p>


<?php
require('db1.php');
if(isset($_POST['username']) and isset($_POST['password'])){
$username= $_POST['username'];
$password= $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count == 1){
$_SESSION['username']=$username;
}
}
if(isset($_SESSION['username'])){
$username=$_SESSION['username'];
echo "hello!"." ".$username."";
echo"<br><a href='logout.php'> Вихід </a><br>";
echo"<center><a href='news.php'> До новин </a></center>";
}
?>

</div> 


<div class="footer">Khmelnitsky.Ukraine.2019</div>

</div>

</body>

</html>