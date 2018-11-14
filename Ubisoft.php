<!DOCTYPE html>
<html>
<head>
  <?php
  require_once "functions/functions.php";
  $title = "Новости E3 2018";
  require_once "blocks/head.php";
  $newsUbisoft = getNews1 (3,0);
  ?>

</head>
    <body>
       <?php require_once "blocks/header.php" ?>    
		   
	<div id="wrapper">
	     <div id="leftCol">
		 <?php 
		 for ($i = 0; $i < count($newsUbisoft); $i++) {
			 if($i==0)
				 echo "<div id=\"bigArticle\">";
			 else
				 echo "<div class=\"article\">";
			 echo'<img src="/img/Ubisoft/article_'.$newsUbisoft[$i]["id"].'.jpg" alt="Статья '.$newsUbisoft[$i]["id"].'" title="Статья '.$newsUbisoft[$i]["id"].'">
			   <h2>'.$newsUbisoft[$i]["title"].'</h2>
			   
			   <p>
			   '.$newsUbisoft[$i]["intro_text"].' 

</p>
  <a href="/articleUbisoft.php?id='.$newsUbisoft[$i]["id"].'">
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