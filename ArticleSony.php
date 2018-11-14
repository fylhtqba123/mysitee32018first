<!DOCTYPE html>
<html>
<head>
  <?php
  
require_once "functions/functions.php";
$newsSony = getNews3 (1,$_GET["id"]);
  $title = $newsSony["title"];
  require_once "blocks/head.php";
  
  ?>

</head>
    <body>
	
       <?php require_once "blocks/header.php" ?>    
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <?php 
		 			
			 echo'"<div id="bigArticle">"<img src="/img/Sony/article_'.$newsSony["id"].'.jpg" alt="Статья '.$newsSony["id"].'" title="Статья '.$newsSony["id"].'">
			   <h2>'.$newsSony["title"].'</h2>
			   
			   <p>
			   '.$newsSony["full_text"].' 

</p>
  
		    </div>';
			
			
		 
		 ?>
		 
		 
		 </div> 
		 <?php require_once "blocks/rightCol.php"?>
	</div>
		   

<?php require_once "blocks/footer.php" ?>


</body>
</html>