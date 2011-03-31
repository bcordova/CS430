<?php
  session_start(); 
  include('header.php');
  include("db_connect.php");
?>
<div id="content">
                <div id="right">
<?php			
					
			echo "<br/>";
			 	
			$query = "SELECT * from proposal";
			$result = mysqli_query($db, $query);
			
			echo "<h1>Submitted Proposals: </h1>";
		
			
			echo "<table border='1' width='400' cellpadding='3' cellspacing='0'>";
			echo "<tr><th>Title</th><th>Course</th><th>Semester</th></tr>";
			
			while($row = mysqli_fetch_array($result)) { 
				echo "<tr><td><a href=project.php?id={$row['proposal_id']}>{$row['course_title']}</a></td> <td>{$row['course']}</td> <td>{$row['semester']}</td></tr>";
				
			}
			
			echo "</table>";
			
			
?>				
				
				</div>
		
		
<?php
   include('footer.html');
?>  
</div>