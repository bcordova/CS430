<?php
  session_start(); 
  include('header.php');
?>
			
       <div id="content">
                <div id="right">
                    <h1>Welcome, Guest!</h1>
                    <p>This website provides complete access to all student-developed research applications.  </p>
                    <p>From here you can view the list of available projects, submit a project you have already completed or submit a new project proposal.</p>
                    <p>To submit a project or a project proposal, simply click on the link provided above and follow the instructions detailed on that page.</p>
                    <h1>Featured Project:</h1>
                    <div id="photos">
                        <a href="http://www.umw.edu"><img src="images/mdub3d_water_test.jpg" alt="photo" /></a>
                        <a href="http://www.umw.edu"><img src="images/TIE_Intercept.jpg" alt="photo" /></a>
                        <a href="http://www.umw.edu"><img src="images/trinke3d.jpg" alt="photo" /></a>
                        <a href="http://www.umw.edu"><img src="images/iphone_test.png" alt="photo" /></a>
                    </div>
                </div>
                <div id="left">
			<div id="nav-box" align="center">
			
<?php
			   
			   if(empty($_SESSION['username'])) {
?>
				<form action="login.php" method="post">
				<br>
				<b><i><font size="2" face="Verdana" color="#fff">Username:</b></i><input type="text" size=15 name="username" >
				<br><br>
				<b><i>Password:</b></i><input type="password" size=15 name="password" ></font>
				<br><br>
				<input type="submit" class="formbutton" value="Login">
				<br><br>
				</form>

				<a href="register.php"><i>Register Here</i></a>
<?php			 
			  } else {
?>
				<b><br><i><font size="2.5" face="Verdana" color="#fff">You are currently logged in. <br><br><u>View your</u>: <br></b></i></font>

				&nbsp;&nbsp;<a href="#"><i>Profile</i></a><br>
				&nbsp;&nbsp;<a href="#"><i>Projects</i></a><br>
				&nbsp;&nbsp;<a href="#"><i>Proposals</i></a><br>
				<br><br>

				<a href="logout.php"><i>Logout</i></a>


<?php
			   }

?>
			</div>
		     
                    <h2>Latest news</h2>
                    <a href="http://www.umw.edu">Project Uploads</a>
                    <p>Find out all the new information about recent project uploads!</p>
                    <a href="http://www.umw.edu">Project Proposals</a>
                    <p>See all the new project proposals that have been submitted by current students in the department.</p>
                    <a href="http://www.umw.edu">Project Screenshots</a>
                    <p>Review the most recent screenshot uploads of any project currently in progress for for previous projects now submitted.</p>
                </div>
		
<?php
   include('footer.html');
?>  
	</div>