<?php
  session_start(); 
  include('header.php');
  include("db_connect.php");
?>
			
       <div id="content">
                <div id="right">
				<br/>
		<h3>Thank you for registering.  A confirmation email has been sent to the 
				following email address: </h3>                  
  
  
  <?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'] ;
  $password = $_POST['password'];
  
  print "$email";
  
  $query = "INSERT INTO user (username, password, first_name, last_name, email) " .
   "VALUES ('$username', '$password', '$firstname', '$lastname', '$email')";
  
  $result = mysqli_query($db, $query)
   or die("Error".mysqli_error($db));
  
   
?>
				  
</div>
		
<?php
   include('footer.html');
   mysqli_close($db);
?>  
		</div>