<?php
  session_start(); 
  include('header.php');
  include("db_connect.php");
  //Print_r ($_SESSION);
?>
<div id="content">
                <div id="right">
<?php			
					
			 	   
			 	   if(isset($_SESSION['user_id']))
				   {
				   echo "<br/>";
				   //$id = $_SESSION['user_id'];
			 	
			 	   $query = "SELECT * from user";
				   $result = mysqli_query($db, $query);
				   echo "<h1>Registered Users</h1>";
				   echo "<table border='1' width='400' cellpadding='3' cellspacing='0'>";
				   echo "<tr><th>Username</th><th>Student Email</th><th>Name</th></tr>";
				   while($row = mysqli_fetch_array($result)) { 
				   //echo "<tr><td>{$row['username']}</td> <td>{$row['email']}</td> <td>{$row['first_name']} {$row['last_name']}</td></tr>";
				   echo "<tr><td><a href=profile.php?sid={$row['user_id']}>{$row['username']}</a></td> <td>{$row['email']}</td> <td>{$row['first_name']} {$row['last_name']}</td></tr>";
				   }
				   echo "</table>";
				   } else {
				   echo "<h1><center>If you would like to view all users, you need to login.  Please use the form on the left.</center></h1>";
				   }
?>				
				
				</div>
		
		
<?php
   include('footer.html');
?>  
</div>