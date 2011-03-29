<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>CPSC Project Repository</title>
    </head>
    <!-- #474553, #7378F7-->
    <body>
        <div id="container">
            <div id="header">

		<form action="search.php" method="post" class="searchform">
			<select name="searchType">
				<option class="group" value="title">Project Title</option>
				<option class="group" value="tag">Tag</option>
				<option class="group" value="student">Student</option>
			</select>
			<input type="text"  name="searchedFor" />
			<input type="submit" class="formbutton" value="Search" />
		</form>
                

	    	<div id="navcontainer">
		<ul>
			<li ><a href="index.php" id="current">Home</a></li>
			<li><a href="#">Members</a>
				<ul>
					<li><a href="viewUsers.php">View All Users</a></li> 
				</ul>
			</li>
			<li><a href="#">Proposals</a>
				<ul>
        				<li><a href="submitProposal.php">Submit A Proposal</a></li> 
        				<li><a href="#">View Proposal Form</a></li> 
					<li><a href="#">View All Proposals</a></li>
        			</ul>
			</li>
			<li><a href="#">Projects</a>
				<ul>
					<li><a href="submitProject.php">Submit a Project</a></li> 
        				<li><a href="#">View All Projects</a></li> 
        				<li><a href="#">View All Tags</a></li>
				</ul>
			</li>
			
			<li><a href="#">About Us</a></li>
		</ul>
	    
		</div>
          </div>

<div id="left">
			<div id="nav-box" align="center">
<?php
			   $errorToPrint = "hi";
			   if(empty($_SESSION['user_id'])) {
					$errorToPrint = "";
					
					$error=$_GET['error'];				 

					if ($error=="empty") {

						$errorToPrint = "A username and password must be entered!";

					} else if ($error=="invalid") {
				
       						$errorToPrint = "The username or password you entered was incorrect!";
				
   					} 

				echo "<br><center><b><i><h4><font color=#FF0000 >" . $errorToPrint . "</font></h4></i></b></center></b></i>";

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
			
<!--<a href="register.php"><i>Register</i></a>	-->		
<form onsubmit="this.js_enabled.value=1;return true;" action="register.php" method="post" >
    <input type="hidden" name="js_enabled" value="0">
    <input type="submit" class = "hiddenbutton" value="Register">
</form>
			
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
		     <br><br>

<div id="nav-box2" align="center">
<br>		
		<b><i><font size="3" face="Georgia" color="#e7e7e7">Latest News:</b></i></font><br><br>
                    <a href="http://www.umw.edu">Project Uploads</a><br>
                     <font size="2" face="Georgia" color="#fff">Find out all the new information about recent project uploads!<br><br>
                    <a href="http://www.umw.edu">Project Proposals</a><br>
                     See all the new project proposals that have been submitted by current students in the department.<br><br>
                    <a href="http://www.umw.edu">Project Screenshots</a><br>
                     Review the most recent screenshot uploads of any project currently in progress for for previous projects now submitted.</font>

		<br><br>


		</div>



		
                   
                </div>