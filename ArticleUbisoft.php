<!DOCTYPE html>
<html>
<head>
  <?php
  
require_once "functions/functions.php";
$newsUbisoft = getNews1 (1,$_GET["id"]);
  $title = $newsUbisoft["title"];
  require_once "blocks/head.php";
  
  ?>

</head>
    <body>
	
       <?php require_once "blocks/header.php" ?>    
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <?php 
		 			
			 echo'"<div id="bigArticle">"<img src="/img/Ubisoft/article_'.$newsUbisoft["id"].'.jpg" alt="Статья '.$newsUbisoft["id"].'" title="Статья '.$newsUbisoft["id"].'">
			   <h2>'.$newsUbisoft["title"].'</h2>
			   
			   <p>
			   '.$newsUbisoft["full_text"].' 

</p>
  
		    </div>';
			
			
		 
		 ?>
		 
		 
		 </div> 
		 <?php require_once "blocks/rightCol.php"?>
	</div>
		   

<?php require_once "blocks/footer.php" ?>


</body>
</html>