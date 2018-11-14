<?php
   $mysqli = false;
   function connectDB(){
	   global $mysqli;
	   $mysqli = new mysqli("localhost","root","", "E32018base");
	   $mysqli ->query("SET NAMES 'utf8'");
	   
   }
   function closeDB () {
	   global $mysqli;
	   $mysqli->close();
   }
   function getNews ($limit, $id){
	   global $mysqli;
	   connectDB();
	   if ($id)
		   $where = "WHERE `id` = ".$id;
	   $result = $mysqli->query("SELECT * FROM `news` $where ORDER BY `id` DESC LIMIT $limit");
	   closeDB();
	   if(!$id)
	     return resultTOArray ($result);
	 else return $result->fetch_assoc();
   }
   function getNews1 ($limit, $id){
	   global $mysqli;
	   connectDB();
	   if ($id)
		   $where = "WHERE `id` = ".$id;
	   $result = $mysqli->query("SELECT * FROM `newsUbisoft` $where ORDER BY `id` DESC LIMIT $limit");
	   closeDB();
	   if(!$id)
	     return resultTOArray ($result);
	 else return $result->fetch_assoc();
   }
  function getNews2 ($limit, $id){
	   global $mysqli;
	   connectDB();
	   if ($id)
		   $where = "WHERE `id` = ".$id;
	   $result = $mysqli->query("SELECT * FROM `newsEa` $where ORDER BY `id` DESC LIMIT $limit");
	   closeDB();
	   if(!$id)
	     return resultTOArray ($result);
	 else return $result->fetch_assoc();
   }
  function getNews3 ($limit, $id){
	   global $mysqli;
	   connectDB();
	   if ($id)
		   $where = "WHERE `id` = ".$id;
	   $result = $mysqli->query("SELECT * FROM `newsSony` $where ORDER BY `id` DESC LIMIT $limit");
	   closeDB();
	   if(!$id)
	     return resultTOArray ($result);
	 else return $result->fetch_assoc();
   }
  function getNews4 ($limit, $id){
	   global $mysqli;
	   connectDB();
	   if ($id)
		   $where = "WHERE `id` = ".$id;
	   $result = $mysqli->query("SELECT * FROM `newsMicrosoft` $where ORDER BY `id` DESC LIMIT $limit");
	   closeDB();
	   if(!$id)
	     return resultTOArray ($result);
	 else return $result->fetch_assoc();
   }
   function resultToArray ($result){
	   $array = array ();
	   while (($row = $result->fetch_assoc()) != false) 
		   $array[] = $row;
	   return $array;
   }
?>