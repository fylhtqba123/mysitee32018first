<!DOCTYPE html>
<html>
<head>
  <?php
  require_once "functions/functions.php";
  $title = "Новости E3 2018";
  require_once "blocks/head.php";
  $newsEa = getNews2 (3,0);
  ?>

</head>
    <body>
       <?php require_once "blocks/header.php" ?>    
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <?php 
		 for ($i = 0; $i < count($newsEa); $i++) {
			 if($i==0)
				 echo "<div id=\"bigArticle\">";
			 else
				 echo "<div class=\"article\">";
			 echo'<img src="/img/Ea/article_'.$newsEa[$i]["id"].'.jpg" alt="Статья '.$newsEa[$i]["id"].'" title="Статья '.$newsEa[$i]["id"].'">
			   <h2>'.$newsEa[$i]["title"].'</h2>
			   
			   <p>
			   '.$newsEa[$i]["intro_text"].' 

</p>
  <a href="/articleEa.php?id='.$newsEa[$i]["id"].'">
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