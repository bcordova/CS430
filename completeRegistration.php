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
  
?>
				  
</div>
		
<?php
   include('footer.html');
?>  
		</div>