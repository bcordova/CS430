<?php
  session_start(); 
  include('header.php');
?>
			
       <div id="content">
                <div id="right">
                    <h1>User Registration</h1>
                    <p>The UMW Research Repository registration process requires the following information. Follow the steps below.</p>
                  
   
<form action="register.php" method="post">
<table>
<?php
if(isset($_POST['Register']))
{
	//$query ="insert into users(Username,Email,FirstName,LastName,BirthDate,password) values('" . $_POST['user'] . "','" . $_POST['email'] . "','" . $_POST['first'] . "','" . $_POST['last'] . "','" . $_POST['birth'] . "',SHA('" . $_POST['password'] . "'))";
	//mysqli_query($db,$query);
	//echo "Thank you for signing up
}
else
{
?>
<tr>
	<td>Username </td><td><input type="text" name="user"></td>
</tr>
<tr>
	<td>First Name</td><td><input type="text" name="first"></td>
</tr>
<tr>
	<td>Last Name  </td><td><input type="text" name="last"></td>
</tr>
<tr>
<tr>
	<td>Email  </td><td><input type="text" name="email"></td>
</tr>
	<td>Password  </td><td><input type="password" name="password"></td>
</tr>
<tr>
	<td>Re-Enter Password  </td><td><input type="password" name="password"></td>
</tr>
</table>
	<br />
	<input type="submit" value="Register" name="Register">
	</form>
	<br />
               
           
<?php
}
?>
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