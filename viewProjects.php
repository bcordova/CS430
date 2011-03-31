<?php
  session_start(); 
  include('header.php');
  include("db_connect.php");
?>
<div id="content">
                <div id="right">
<?php			
					
			echo "<br/>";
			//$id = $_SESSION['user_id'];
			 	
			$query = "SELECT * from project";
			$result = mysqli_query($db, $query);
			
			echo "<h1>Submitted Projects: </h1>";
			echo "<table border='1' width='400' cellpadding='3' cellspacing='0'>";
			echo "<tr><th>Title</th><th>Course</th><th>Summary</th></tr>";
			while($row = mysqli_fetch_array($result)) { 
				echo "<tr><td><a href=project.php?id={$row['project_id']}>{$row['title']}</a></td> <td>{$row['course']}</td> <td>{$row['summary']}</td></tr>";
			}
			echo "</table>";
			
?>				
				
				</div>
		
		
<?php
   include('footer.html');
?>  
</div>