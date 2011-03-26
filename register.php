<?php
  session_start(); 
  include('header.php');
  include("db_connect.php");
?>
			
       <div id="content">
                <div id="right">
                    <h1>User Registration</h1>
                    <p>The UMW Research Repository registration process requires the following information.</p>
					
 <SCRIPT LANGUAGE="JavaScript">


function checkFields() {

re = "/^(\d{4})\/\(\d{1,2})\/\(\d{1,2})/"; 

missinginfo = "";
if (document.form.username.value == "") {
missinginfo += "\n     -  Username";
}
if (document.form.email.value == "") {
missinginfo += "\n     -  Email";
}
if (document.form.firstname.value == "") {
missinginfo += "\n     -  First Name";
}
if(document.form.lastname.value == "") {
missinginfo += "\n     -  Last Name";
}
if(document.form.password.value == "") {
missinginfo += "\n     -  Password";

}if(document.form.rpassword.value == "") {
missinginfo += "\n     -  Re-enter Password";
}

if (missinginfo != "") {
missinginfo ="_____________________________\n" +
"You failed to correctly fill in your:\n" +
missinginfo + "\n_____________________________" +
"\nPlease re-enter and submit again!";
alert(missinginfo);
return false;
}
else return true;
}

</script>

 <form method="post" form name=form action="completeRegistration.php" onSubmit="return checkFields();">

<input type=hidden name=subject value="Freedback">

<pre>
Username:    	  <input type=text name="username" size=25>

Email Address:    <input type=text name="email" size=25>

First Name:       <input type=text name="firstname" size=25>

Last Name:        <input type=text name="lastname" size=25>

Password:         <input type=text name="password" size=25>

Re-enter Password:<input type=text name="rpassword" size=25>

<input type=submit name="submit" value="Submit Form!">
</pre>

</form>
</div>
		
<?php
   include('footer.html');
?>  
		</div>