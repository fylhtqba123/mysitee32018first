<!DOCTYPE html>
<html>
<head>
  <?php
  $title = "Авторизация";
  require_once "blocks/head.php"?>

  <?php 
$connect=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('registration');

if(isset($_POST['enter'])){
	$e_login=$_POST['e_login'];
	$e_password=md5($_POST['e_password']);
	
	$query = mysql_query("SELECT * FROM users WHERE login= '$e_login'");
	$user_data=mysql_fetch_array($query);
	
	if($user_data['password']==$e_password) {
		echo "OK";
	}
		else {
			echo "Неверный логин или пароль";
		}
}
?>
  

</head>
    <body>
       <?php require_once "blocks/header.php" ?>  

   
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <form method="post" action ="auth.php">
		    <input type="text" name="e_login" placeholder ="Login" required ><br />
			<input type="password" name="e_password" placeholder="Password" required ><br />
			<input type="submit" name="enter"  value="Вход"/>
			</form>
		 </div>
		 <?php require_once "blocks/rightCol.php"?>
	</div>
	
		   

<?php require_once "blocks/footer.php" ?>


</body>
</html>