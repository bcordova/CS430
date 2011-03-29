<?php
  session_start(); 
  include('header.php');
  include("db_connect.php");
?>

<div id="content">
                <div id="right">
<?php			
		if(isset($_SESSION['user_id']))
			{
				   //$user = $_SESSION['username'];
				   //$id = $_SESSION['userid'];
			 	   echo "<br/>";
			 	   $query = "SELECT * from user";
				   $result = mysqli_query($db, $query);
				   echo "<h1>Registered Users</h1>";
				   echo "<table border='1' width='400' cellpadding='3' cellspacing='0'>";
				   echo "<tr><th>Username</th><th>Student Email</th><th>Name</th></tr>";
				   while($row = mysqli_fetch_array($result)) { 
				   echo "<tr><td>{$row['username']}</td> <td>{$row['email']}</td> <td>{$row['first_name']} {$row['last_name']}</td></tr>";
				   }
				   echo "</table>";
			} else {
			echo "<br/>YOU MUST BE LOGGED IN TO ACCESS THIS FEATURE.";
			}
?>				
				
				</div>
		
		
<?php
   include('footer.html');
?>  
</div>