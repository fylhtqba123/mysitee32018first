<!DOCTYPE html>
<html>
<head>
  <?php
  require_once "functions/functions.php";
  $title = "Новости E3 2018";
  require_once "blocks/head.php";
  $newsSony = getNews3 (3,0);
  ?>

</head>
    <body>
       <?php require_once "blocks/header.php" ?>    
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <?php 
		 for ($i = 0; $i < count($newsSony); $i++) {
			 if($i==0)
				 echo "<div id=\"bigArticle\">";
			 else
				 echo "<div class=\"article\">";
			 echo'<img src="/img/Sony/article_'.$newsSony[$i]["id"].'.jpg" alt="Статья '.$newsSony[$i]["id"].'" title="Статья '.$newsSony[$i]["id"].'">
			   <h2>'.$newsSony[$i]["title"].'</h2>
			   
			   <p>
			   '.$newsSony[$i]["intro_text"].' 

</p>
  <a href="/articleSony.php?id='.$newsSony[$i]["id"].'">
<div>Далее</div>
  </a>
		    </div>';
			if($i==0)
				echo "<div class =\"clear\"><br></div>";
			}
		 
		 ?>
		 
		 
		 </div> 
		 <?php require_once "blocks/rightCol.php"?>
	</div>
		   

<?php require_once "blocks/footer.php" ?>


</body>
</html>