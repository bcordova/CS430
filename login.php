<?php
   
   include('db_connect.php');
   
   
   $error = "";

   if (empty($_POST['username']) || empty($_POST['password'])) {
   	
	$error="empty";
 	
   	
   } else {
	$name = mysqli_real_escape_string($db, trim($_POST['username']));
	$pw = mysqli_real_escape_string($db, trim($_POST['password']));
   

   
   	$query = "SELECT * FROM user WHERE username = '$name' AND password = SHA('$pw')";
	//echo $query;	

   	$result = mysqli_query($db, $query) or die ("Error Querying Database");
   
   	if ($row = mysqli_fetch_array($result)){
		//$error = "none";
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$user_id = $row['user_id'];
	
		session_start();
		$_SESSION['user_id'] = $user_id;
		setcookie(user_id, $_SESSION['user_id'], time()+60*60*24);
        
   	} else{
		$error="invalid";
   	}

   }


   if (!empty($error)) {
   	header('Location: index.php?error=' . $error);
   } else {
	header('Location: index.php');
   }

   
?>

