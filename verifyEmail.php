<?php
  session_start(); 
  include('header.php');
  include("db_connect.php");
?>
<div id="content">
                <div id="right">
<?php                
$token= $_GET['q'];      

$query = "SELECT user_id FROM user WHERE email_token = '$token' LIMIT 1";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    $result = $row["user_id"];  
    
$query = "UPDATE user SET email_authenticated = 'Y' WHERE user_id = '$result'";
$result = mysqli_query($db, $query)
   	  or die("Error".mysqli_error($db));  
   	  
print "THANK YOU FOR VERIFYING YOUR EMAIL.";
?>      
					
 
</div>
		
<?php
   include('footer.html');
?>  
</div>