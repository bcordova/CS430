<?php
  session_start(); 
  include('header.php');
  include("db_connect.php");

?>
			
       <div id="content">
                <div id="right">
				<br/>
<?php
  
  $username = $_POST['username'];
  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'] ;
  $password = $_POST['password'];
// AN EMAIL VALIDATION SCRIPT THAT RETURNS TRUE OR FALSE
function check_valid_email($email)
{
    // IF PHP 5.2 OR ABOVE, WE CAN USE THE FILTER
    // MAN PAGE: http://us3.php.net/manual/en/intro.filter.php
    if (strnatcmp(phpversion(),'5.2') >= 0)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) return FALSE;
    }
    // IF LOWER-LEVEL PHP, WE CAN CONSTRUCT A REGULAR EXPRESSION
    else
    {
        $regex
        = '/'                       // START REGEX DELIMITER
        . '^'                       // START STRING
        . '[A-Z0-9_-]'              // AN EMAIL - SOME CHARACTER(S)
        . '[A-Z0-9._-]*'            // AN EMAIL - SOME CHARACTER(S) PERMITS DOT
        . '@'                       // A SINGLE AT-SIGN
        . '([A-Z0-9][A-Z0-9-]*\.)+' // A DOMAIN NAME PERMITS DOT, ENDS DOT
        . '[A-Z\.]'                 // A TOP-LEVEL DOMAIN PERMITS DOT
        . '{2,6}'                   // TLD LENGTH >= 2 AND =< 6
        . '$'                       // ENDOF STRING
        . '/'                       // ENDOF REGEX DELIMITER
        . 'i'                       // CASE INSENSITIVE
        ;
        if (!preg_match($regex, $email)) return FALSE;
    }

    // FILTER or PREG DOES NOT TEST IF THE DOMAIN OF THE EMAIL ADDRESS IS ROUTABLE
    $domain = explode('@', $email);
    if ( checkdnsrr($domain[1],"MX") || checkdnsrr($domain[1],"A") ) return TRUE;

    // EMAIL NOT ROUTABLE
    return FALSE;
}

 // VALIDATE THE EMAIL ADDRESS
if (check_valid_email($email) == FALSE) {

print "$email is not a valid email address";
  
} else {

//NORMALIZE THE EMAIL ADDRESS
    $email_address = trim($email);
    $email_address = strtolower($email_address);
    
//CHECK FOR DUPLICATE REGISTRATION
    $query = "SELECT count(email) FROM user WHERE email = '$email_address' AND email_authenticated = 'Y'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    $result = $row["count(email)"];
 
    if ($result > 0){
           print "THANK YOU - YOU ARE ALREADY REGISTERED AND CONFIRMED";
           
    } else if ($result == 0) {
    
    	   $query = "SELECT count(email) FROM user WHERE email = '$email_address'";
   	   $result = mysqli_query($db, $query);
   	   $row = mysqli_fetch_array($result);
    	   $result = $row["count(email)"];
    	   
           if ($result != 0)
           {
           
           print "THANK YOU - YOU ARE ALREADY REGISTERED.  PLEASE CHECK YOUR EMAIL FOR A CONFIRMATION EMAIL.";
           
           } else if ($result == 0) {
    	   //MAKE THE ACTIVATION CODE	
   	   $activate_code= md5( mt_rand(). time(). $email_address. $_SERVER["REMOTE_ADDR"]);
   	   //print "activation code is: $activate_code";
  	   // echo "<br/>";
    		
   	   // SEND THE ACTIVATION EMAIL
   	   $msg = 'THANK YOU FOR YOUR REGISTRATION.  TO CONFIRM, PLEASE CLICK THIS LINK:' . PHP_EOL;
    	   $msg .= "http://" . $_SERVER["HTTP_HOST"]. "/verifyEmail.php" . "?q=$activate_code";
    	   mail( $email_address, 'PLEASE CONFIRM YOUR REGISTRATION', $msg);
   	   print "THANK YOU FOR REGISTERING.  A CONFIRMATION EMAIL HAS BEEN SENT TO THE FOLLOWING EMAIL ADDRESS: $email"; 
    	   $query = "INSERT INTO user (username, password, first_name, last_name, email, email_token) " .
    	   "VALUES ('$username', SHA('$password'), '$firstname', '$lastname', '$email', '$activate_code')";
    	   $result = mysqli_query($db, $query)
   	   or die("Error".mysqli_error($db));    
    	  }}
}  
?>
				  
</div>
		
<?php
   include('footer.html');
   mysqli_close($db);
?>  
</div>