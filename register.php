<?php
  session_start(); 
  include('header.php');
?>
			
       <div id="content">
                <div id="right">
                    <h1>User Registration</h1>
                    <p>The UMW Research Repository registration process requires the following information.</p>
                  
   
<form action="register.php" method="post">
<table width=440px >
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
	<td>Username: </td><td><input type="text" name="user"></td>
</tr>
<tr>
	<td>First Name:</td><td><input type="text" name="first"></td>
</tr>
<tr>
	<td>Last Name:  </td><td><input type="text" name="last"></td>
</tr>
<tr>
<tr>
	<td>Email:  </td><td><input type="text" name="email"></td>
</tr>
	<td>Password:  </td><td><input type="password" name="password"></td>
</tr>
<tr>
	<td>Re-Enter Password:  </td><td><input type="password" name="password"></td>
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
			
<?php
   include('footer.html');
?>  
</div>