<?php
  session_start(); 
  include('header.php');
  include('db_connect.php');
?>
			
       <div id="content">
                <div id="right">

		<?php
			if(!isset($_SESSION['user_id'])){

		?>
		    <h1><center>If you would like to submit a project, you need to login.  Please use the form on the left.</center></h1>


		<?php
			} else {

				if(isset($_POST['SubmitProject'])) {
		?>
                    			
					<h1>Project Receipt</h1>
                    			<p>The following information has been added to the database: </p>
                  
		<?php
					//$query ="insert into projects 
					//mysqli_query($db,$query);
					//echo "Thank you!  The following project information has been submitted: ";
					//display info here
	
		
					$projectTitle = mysqli_real_escape_string($db, trim($_POST['title']));
					$advisor = mysqli_real_escape_string($db, trim($_POST['advisor']));
					$course = mysqli_real_escape_string($db, trim($_POST['course']));
					$semester = mysqli_real_escape_string($db, trim($_POST['semester']));
					$year = mysqli_real_escape_string($db, trim($_POST['year']));

					$summary = mysqli_real_escape_string($db, trim($_POST['summary']));
					$projectTags = mysqli_real_escape_string($db, trim($_POST['tag']));
					$pictureFile = mysqli_real_escape_string($db, trim($_POST['picture']));
					$sourceFile = mysqli_real_escape_string($db, trim($_POST['source']));
	
					if (!empty($projectTitle) && !empty($advisor) && !empty($course) && !empty($semester) && !empty($year)) {
						echo "project submit";
						//$query ="INSERT INTO projects ";
						//mysqli_query($db,$query);
						echo "<b>" . $projectTitle;
						echo $advisor;
						echo $course;
						echo $semester;
						echo $year;

		
					} else {
		
		?>
               
           
<?php
					}

				}

			}
?>
			 </div>

<?php
   include('footer.html');
?>  
</div>