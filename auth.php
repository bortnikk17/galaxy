<?php
session_start();
if(isset($_SESSION['username'])) {
$username=$_SESSION['username'];
if(!$username) header('location:login.php');
}
?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">