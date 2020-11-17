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

<center><p style="font-size: 1.2em; font-family:cursive;"><b>Розклад матчів на сьогодні:</b></p><br></center>
<table border="1px dotted" align="center" bordercolor="red" style="font-size:1.2em; font-family:fantasy; border:2px solid red;">
<?php
include 'db.php';

$sql_foot="SELECT * FROM Today";
$result_foot=mysqli_query($link,$sql_foot) or die (mysqli_error($link));
for ($data=[];$row=mysqli_fetch_assoc($result_foot);
$data[]=$row);
$result_foot='';
foreach ($data as $elem) {
$result_foot.='<tr>';
$result_foot.='<td>'. $elem['first'].'</td>';
$result_foot.='<td>'. $elem['vs'].'</td>';
$result_foot.='<td>'. $elem['second'].'</td>';
$result_foot.='<td>'. $elem['time'].'</td>';
$result_foot.='</tr>';
}
echo $result_foot;
?>
</table>
<br>
<br>
<br>
<br>
<hr>
<center><p style="font-size: 1.2em; font-family:cursive;"><b>Розклад матчів на завтра:</b></p><br></center>
<table border="1px " align="center" bordercolor="green" style="font-size:1.2em; font-family:fantasy; border:2px solid green;">
<?php
include 'db.php';

$sql_foot="SELECT * FROM tommorow";
$result_foot=mysqli_query($link,$sql_foot) or die (mysqli_error($link));
for ($data=[];$row=mysqli_fetch_assoc($result_foot);
$data[]=$row);
$result_foot='';
foreach ($data as $elem) {
$result_foot.='<tr>';
$result_foot.='<td>'. $elem['first'].'</td>';
$result_foot.='<td>'. $elem['vs'].'</td>';
$result_foot.='<td>'. $elem['second'].'</td>';
$result_foot.='<td>'. $elem['time'].'</td>';
$result_foot.='</tr>';
}
echo $result_foot;
?>
</table>
<br>
<br>
<br>
<br>
<hr>

<center><p style="font-size: 1.2em; font-family:cursive;"><b>Розклад матчів на понеділок:</b></p><br></center>
<table border="1px " align="center" bordercolor="green" style="font-size:1.2em; font-family:fantasy; border:2px solid black;">
<?php
include 'db.php';

$sql_foot="SELECT * FROM monday";
$result_foot=mysqli_query($link,$sql_foot) or die (mysqli_error($link));
for ($data=[];$row=mysqli_fetch_assoc($result_foot);
$data[]=$row);
$result_foot='';
foreach ($data as $elem) {
$result_foot.='<tr>';
$result_foot.='<td>'. $elem['first'].'</td>';
$result_foot.='<td>'. $elem['vs'].'</td>';
$result_foot.='<td>'. $elem['second'].'</td>';
$result_foot.='<td>'. $elem['time'].'</td>';
$result_foot.='</tr>';
}
echo $result_foot;
?>
</table>
<br>
<br>
<br>
<br>
<hr>


</div> 

<div class="footer">Khmelnitsky.Ukraine.2019</div>

</div>

</body>

</html>