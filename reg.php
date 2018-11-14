<!DOCTYPE html>
<html>
<head>
  <?php
  $title = "Регистрация";
  require_once "blocks/head.php"?>

  

</head>
    <body>
       <?php require_once "blocks/header.php" ?>  

<?php 
$connect=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('registration');

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$login=$_POST['login'];
	$password=$_POST['password'];
	$r_password=$_POST['r_password'];
	if ($password == $r_password){
		$password = md5($password);
		$query = mysql_query("INSERT INTO users VALUES('','$username','$login','$password')") or die(mysql_error());
	} else {
		die ('Passoword broken');
	}
		
}
?>	   
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <form method="post" action ="reg.php">
		    <input type="text" name="username" placeholder="Username" required ><br />
			<input type="text" name="login" placeholder ="Login" required ><br />
			<input type="password" name="password" placeholder="Password" required ><br />
			<input type="password" name="r_password" placeholder="Repeat password" required ><br />
			<input type="submit" name="submit"  value="Регистрация"/>
			</form>
		 </div>
		 <?php require_once "blocks/rightCol.php"?>
	</div>
	
		   

<?php require_once "blocks/footer.php" ?>


</body>
</html>