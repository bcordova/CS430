<?php
  session_start(); 
  include('header.php');
  include('db_connect.php');
?>
	

		
       <div id="content">
                <div id="right">
		<h1>Project:</h1>
<?php
	$projectID = $_GET['id'];
	$termSearched = mysqli_real_escape_string($db, trim($_POST['searchedFor']));
	$type = $_POST['searchType'];
	
	$query = "SELECT project.*, user.*, tag.*  FROM project NATURAL JOIN tag_team NATURAL JOIN tag NATURAL JOIN project_group NATURAL JOIN student NATURAL JOIN user WHERE project.project_id='$projectID'";
	//echo $query;
	$result = mysqli_query($db, $query) or die("Error Querying Database");
	
	$students = "<ul>";				
	$tags = "<ul>";
	
	$count = 0;
	$editor = "no";
	while ($row = mysqli_fetch_array($result)) {
		$count++; 

		$userID = $row['user_id'];

		if($userID == $_SESSION['user_id']) {
			$editor = "yes";
		}

		$students = $students . "<li><a href = \"profile.php?id=" . $userID . "\">"  . $row['first_name'] . " " . $row['last_name'] . "</a></li>";
		$tags = $tags . "<li>" . $row['actual_tag']  . "</li>";

		
		$projectID = $row['project_id'];
		$projectTitle = $row['title'];
		$course = $row['course'];
		$semester = $row['semester'];
		$summary = $row['summary'];

		if (empty($summary)) {
			$summary = "Not provided";		
		}

			
	} 
	

	if ($count == 0) {
		echo "<h1><center>Invalid Project ID</center></h1>";
	} else {
		$students = $students . "</ul>";
		$tags = $tags . "<ul>";
		if ($editor == "yes") {
			echo "<table width=100% ><td colspan=2 align=right><a href=\"editProject.php?id=\" . $projectID . \">(edit)</a></td></tr></table><br>";
		}		

		echo "<b>Title: </b>" . $projectTitle . "<br>";
		echo "<b>Course: </b>" . $course . "<br>";
		echo "<b>Semester: </b>" . $semester . "<br>";
		echo "<b>Summary: </b>" . $summary . "<br>";

		echo "<b>Students: </b>" . $students;
		echo "<b>Tags: </b>" . $tags;
		
		
	}

	
		
	



	
?>
	
	    
	</div>

<?php
   include('footer.html');
?>  
</div>