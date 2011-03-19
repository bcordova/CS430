<?php
   session_start();

   if (!empty($_POST['username'])){
   	$name = mysqli_real_escape_string($db, trim($_POST['username']));
   	
   }

   if (!empty($_POST['password'])){
	$pw = mysqli_real_escape_string($db, trim($_POST['password']));
   }


   header('Location: index.php');
  
?>

