<?php
  session_start(); 
  include('header.php');
  include("db_connect.php");
?>
<div id="content">
                <div id="right">
<?php			
					
			echo "<br/>";
			 	
			$query = "SELECT * from tag";
			$result = mysqli_query($db, $query);
			
			echo "<h1>Project Tags: </h1>";
		
			$tags = "<ul style=padding-left:40px; >";
			while($row = mysqli_fetch_array($result)) { 
				//echo "<tr><td><a href=project.php?id={$row['project_id']}>{$row['title']}</a></td> <td>{$row['course']}</td> <td>{$row['summary']}</td></tr>";
				$tags = $tags . "<li>" . $row['actual_tag'] . "</li>";
				
			}
			echo $tags;
			
?>				
				
				</div>
		
		
<?php
   include('footer.html');
?>  
</div>