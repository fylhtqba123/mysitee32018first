<!DOCTYPE html>
<html>
<head>
  <?php
  
require_once "functions/functions.php";
$newsMicrosoft = getNews4 (1,$_GET["id"]);
  $title = $newsMicrosoft["title"];
  require_once "blocks/head.php";
  
  ?>

</head>
    <body>
	
       <?php require_once "blocks/header.php" ?>    
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <?php 
		 			
			 echo'"<div id="bigArticle">"<img src="/img/Microsoft/article_'.$newsMicrosoft["id"].'.jpg" alt="Статья '.$newsMicrosoft["id"].'" title="Статья '.$newsMicrosoft["id"].'">
			   <h2>'.$newsMicrosoft["title"].'</h2>
			   
			   <p>
			   '.$newsMicrosoft["full_text"].' 

</p>
  
		    </div>';
			
			
		 
		 ?>
		 
		 
		 </div> 
		 <?php require_once "blocks/rightCol.php"?>
	</div>
		   

<?php require_once "blocks/footer.php" ?>


</body>
</html>