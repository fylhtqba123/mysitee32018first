<!DOCTYPE html>
<html>
<head>
  <?php
  
require_once "functions/functions.php";
$newsEa = getNews2 (1,$_GET["id"]);
  $title = $newsEa["title"];
  require_once "blocks/head.php";
  
  ?>

</head>
    <body>
	
       <?php require_once "blocks/header.php" ?>    
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <?php 
		 			
			 echo'"<div id="bigArticle">"<img src="/img/Ea/article_'.$newsEa["id"].'.jpg" alt="Статья '.$newsEa["id"].'" title="Статья '.$newsEa["id"].'">
			   <h2>'.$newsEa["title"].'</h2>
			   
			   <p>
			   '.$newsEa["full_text"].' 

</p>
  
		    </div>';
			
			
		 
		 ?>
		 
		 
		 </div> 
		 <?php require_once "blocks/rightCol.php"?>
	</div>
		   

<?php require_once "blocks/footer.php" ?>


</body>
</html>