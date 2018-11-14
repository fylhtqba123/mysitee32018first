<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> jallery </title>
  <link href ="/css/style3.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
<script  type="text/javascript" src="js/lightbox-plus-jquery.min.js">
</script>
</head>
    <body>
       <?php require_once "blocks/header.php" ?>  
	   
	   <div id="wrapper">
	     <div id="leftCol">
		 <h1> Галерея фотографий с E3 2018.</h1></br>
		 <div class="jallery">
		<a href="img/im/article_11.jpg" data-lightbox="myjallery" data-title="Это человек"> <img src="img/im/a1.jpg"></a>
		 <a href="img/im/article_22.jpg" data-lightbox="myjallery"><img src="img/im/a2.jpg"></a>
		 <a href="img/im/article_33.jpg" data-lightbox="myjallery"><img src="img/im/a3.jpg"></a>
		 <a href="img/im/article_44.jpg" data-lightbox="myjallery"><img src="img/im/a4.jpg"></a>
		 <a href="img/im/article_55.jpg" data-lightbox="myjallery"><img src="img/im/a5.jpg"></a>
		 <a href="img/im/article_66.jpg" data-lightbox="myjallery"><img src="img/im/a6.jpg"></a>
		 <a href="img/im/article_77.jpg" data-lightbox="myjallery"><img src="img/im/a7.jpg"></a>
		 </div>
		 	 </div>
		 <?php require_once "blocks/rightCol.php"?>
	   
		   </div>
		   

<?php require_once "blocks/footer.php" ?>


</body>
</html>