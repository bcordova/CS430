<?php
  session_start(); 
  include('header.php');
  include('db_connect.php');
?>
	

		
       <div id="content">
                <div id="right">
		<h1>Search Results:</h1>
<?php
	$termSearched = mysqli_real_escape_string($db, trim($_POST['searchedFor']));
	$type = $_POST['searchType'];
	
	if ($type == "title") {
		$type = "Project Title";
	
		$query = "SELECT * FROM project WHERE title LIKE '%$termSearched%' ORDER BY title";
		//echo $query;
		$result = mysqli_query($db, $query) or die("Error Querying Database");
		


	} else if ($type == "tag") {
		$type = "Project Tag";

		$query = "SELECT project.* FROM project NATURAL JOIN tag_team NATURAL JOIN tag WHERE tag.actual_tag LIKE '%$termSearched%' ";
		//echo $query;
		$result = mysqli_query($db, $query) or die("Error Querying Database");


	} else if ($type == "student") {
		$type = "Student Name";

		$query = "SELECT project.* FROM project NATURAL JOIN project_group NATURAL JOIN student NATURAL JOIN user WHERE CONCAT(first_name, ' ', last_name) LIKE '%$termSearched%' ";
		//echo $query;
		$result = mysqli_query($db, $query) or die("Error Querying Database");


	}

	echo "<b>Search Term: </b>" . $termSearched . "<br>";
	echo "<b>Search Type: </b>" . $type . "<br><br>";	

	echo "<table width=100% >";
	echo "<tr><th width=15% >Title</th><th width=15%>Course Completed</th><th width=15% >Semester Completed</th><th width=35% >Summary</th></tr>";		


	while($row = mysqli_fetch_array($result)) {
		$projectID = $row['project_id'];
		$projectTitle = $row['title'];
		$course = $row['course'];
		$semester = $row['semester'];
		$summary = $row['summary'];

		if (empty($summary)) {
			$summary = "Not provided";		
		}

		echo "<tr><td><a href=project.php?id=". $projectID . ">" . $projectTitle . "</a></td><td>" . $course . "</td><td>" . $semester . "</td><td>" . $summary . "</td></tr>";		
			
	}
		
	echo "</table>";



	
?>
	
	    
	</div>

<?php
   include('footer.html');
?>  
</div>