<?php
session_start()
?>
<?php
include 'db1.php';
?>
<html>

<head>

<title>team</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="menu.css" rel="stylesheet" type="text/css"/>
<link href="fonts.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="maindiv">

<div class="forheader"><h1><a href="index.html" class="main_a" style="font-family:colonna mt;">Galaxy Football</a></h1></div>

<ul id="menu">
<li><a class="a_mmenu" href="index.php"><b>Головна<b></a></li>S
<li><a class="a_mmenu" href="news.php"><b>Новини<b></a></li>
<li><a class="a_mmenu" href="match.php"><b>Матчі<b></a></li>
<li><a class="a_mmenu" href="https://www.uefa.com/"><b>UEFA<b></a></li>
<li><a class="a_mmenu" href="chleague.php"><b>Ліга Чемпіонів<b></a></li>
<li><a class="a_mmenu" href="eleague.php"><b>Ліга Європи<b></a></li>
<li><a class="a_mmenu" href="team.php"><b>Збірна<b></a></li>
</ul>

<div class="forbody">

<center><img src="photos\ukraine.jpg" id="photoliver" style="width:100%; height:100%; border:2px solid black;"></center>
<br>
<hr>
<br>
<br>
<br>
<center><p><b style="font-size:1.2em; font-family:cursive;">Видатний футболіст, в минулому гравець українського "Динамо Київ", італійського "Мілану", англійського "Челсі", володар нагороди "Golden Ball-2004",найкращий бомбардир збірної України,та діючий тренер Національної збірної- Андрій Миколайович Шевченко</b></p></center><br>
<center><img src="photos\sheva.jpeg" id="photoliver" style="width:60%; height:60%; border:2px solid black;"></center>

<br>
<br>
<br>
<br>

<center><p><b style="font-size:1.2em; font-family:cursive;">Основний склад збірної України з футболу:</b></p></center><hr>

<table border="1px" width=30%; align="center"  style="background-color:#F9FD0F; border:2px solid blue ; border-collapse:collapse;">
<?php
include 'db.php';

$sql_foot="SELECT * FROM Team";
$result_foot=mysqli_query($link,$sql_foot) or die (mysqli_error($link));
for ($data=[];$row=mysqli_fetch_assoc($result_foot);
$data[]=$row);
$result_foot='';
foreach ($data as $elem) {
$result_foot.='<tr>';
$result_foot.= '<td>' . "<img src=". $elem['ID'] ." width='180'>".
'</td>';
$result_foot.='<td>'. $elem['Name'].'</td>';
$result_foot.='<td>'. $elem['Surname'].'</td>';
$result_foot.='<td>'. $elem['Age'].'</td>';
$result_foot.='<td>'. $elem['Position'].'</td>';
$result_foot.='<td>'. $elem['Club'].'</td>';
$result_foot.='</tr>';
}
echo $result_foot;
?>
</table><hr>
</div> 

<div class="footer">Khmelnitsky.Ukraine.2019</div>

</div>

</body>

</html>