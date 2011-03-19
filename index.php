<?php
   include('header.php');
?>
			
       <div id="content">
                <div id="right">
                    <h1>Welcome to the project repository!</h1>
                    <p>This website provides complete access to all student-developed research applications.  </p>
                    <p>From here you can view the list of available projects, submit a project you have already completed or submit a new project proposal.</p>
                    <p>To submit a project or a project proposal, simply click on the link provided above and follow the instructions detailed on that page.</p>
                    <h1>Recent Photos</h1>
                    <div id="photos">
                        <a href="http://www.umw.edu"><img src="images/mdub3d_water_test.jpg" alt="photo" /></a>
                        <a href="http://www.umw.edu"><img src="images/TIE_Intercept.jpg" alt="photo" /></a>
                        <a href="http://www.umw.edu"><img src="images/trinke3d.jpg" alt="photo" /></a>
                        <a href="http://www.umw.edu"><img src="images/iphone_test.png" alt="photo" /></a>
                    </div>
                </div>
                <div id="left">
			<div id="nav-box" align="center">


				<form action="home.php" method="post">
				<br>
				<b><i><font size="2" face="Verdana" color="#e7e7e7">Username:</b></i><input type="text" size=15 name="username" >
				<br><br>
				<b><i>Password:</b></i><input type="password" size=15 name="password" ></font>
				<br><br>
				<input type="submit" class="formbutton" value="Login">
				<br><br>
				</form>

				<a href="#"><i>Register Here</i></a>

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