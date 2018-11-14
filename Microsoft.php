<!DOCTYPE html>
<html>
<head>
  <?php
  require_once "functions/functions.php";
  $title = "Новости E3 2018";
  require_once "blocks/head.php";
  $newsMicrosoft = getNews4 (3,0);
  ?>

</head>
    <body>
       <?php require_once "blocks/header.php" ?>    
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <?php 
		 for ($i = 0; $i < count($newsMicrosoft); $i++) {
			 if($i==0)
				 echo "<div id=\"bigArticle\">";
			 else
				 echo "<div class=\"article\">";
			 echo'<img src="/img/Microsoft/article_'.$newsMicrosoft[$i]["id"].'.jpg" alt="Статья '.$newsMicrosoft[$i]["id"].'" title="Статья '.$newsMicrosoft[$i]["id"].'">
			   <h2>'.$newsMicrosoft[$i]["title"].'</h2>
			   
			   <p>
			   '.$newsUbisoft[$i]["intro_text"].' 

</p>
  <a href="/articleMicrosoft.php?id='.$newsMicrosoft[$i]["id"].'">
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