<?php
  session_start(); 
  
  include('db_connect.php');

  include('header.php');

  $user_id = $_SESSION['user_id'];

  if(!isset($_SESSION['user_id'])){
	$firstName = "Guest";
  } else {
	$query = "SELECT * FROM user WHERE user_id=$user_id";
	$result = mysqli_query($db, $query) or die ("Error Querying Database");
	
	
	if($row = mysqli_fetch_array($result)) {
		$firstName = $row['first_name'];
		$lastName = $row['last_name'];
	}
	


  }

?>
		
       <div id="content">
                <div id="right">
<?php
                    echo"<h1>Welcome, " . $firstName . "!</h1>";
		    //echo $user_id;
		    //echo $query;

		    if ($firstName == "Guest") {
?>
                    <p>This website provides complete access to all student-developed research applications.  </p>
                    <p>From here you can view the list of available projects, submit a project you have already completed or submit a new project proposal.<br>
                    <br>To submit a project or a project proposal, simply click on the link provided above and follow the instructions detailed on that page.</p>
                    
		    <h1>Featured Project:</h1>
                    <div id="photos">
                        <a href="http://www.umw.edu"><img src="images/iphone_test.png" alt="photo" align="left" /></a>
			<b>Project Title</b> <br>
			&nbsp; Project Description
                    </div>
		<br><br><br><br><br>	

        	<br><h3>Other Projects:</h3><center><table width= 400px >
        	<tr><td><a href=\"project.php?id=1\" ><h4>Project Title1 as link</h4></a><h5>(Student1, Faculty1)</h5></td><td><a href=\"project.php?id=1\" ><h4>Project Title2 as link</h4></a><h5>(Student2, Faculty2)</h5></td></tr>
		<tr><td><a href=\"project.php?id=3\" ><h4>Project Title3 as link</h4></a><h5>(Student3, Faculty3)</h5></td><td><a href=\"project.php?id=4\" ><h4>Project Title4 as link</h4></a><h5>(Student4, Faculty4)</h5></td></tr>
		<tr><td><a href=\"project.php?id=5\" ><h4>Project Title5 as link</h4></a><h5>(Student5, Faculty5)</h5></td><td><a href=\"project.php?id=6\" ><h4>Project Title6 as link</h4></a><h5>(Student6, Faculty6)</h5></td></tr>
		<tr><td><a href=\"project.php?id=7\" ><h4>Project Title7 as link</h4></a><h5>(Student7, Faculty7)</h5></td><td><a href=\"project.php?id=8\" ><h4>Project Title8 as link</h4></a><h5>(Student8, Faculty8)</h5></td></tr>
		<tr><td><style font-color:#e7e7e7>.</style></td><td align=right ><a href= \"projects.php\"><h4>View more</h4></a></td></tr>
		</table></center>



<?php 
		 } else {
			include('userIndex.html');

		 }
?>
                
</div>		
<?php
   include('footer.html');
?>  
	</div>