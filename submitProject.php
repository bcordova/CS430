<?php
  session_start(); 
  include('header.php');
  include('db_connect.php');
?>
			
       <div id="content">
                <div id="right">

<?php
if(!isset($_SESSION['user_id'])){

?>
		    <h1><center>If you would like to submit a project, you need to login.  Please use the form on the left.</center></h1>


<?php
} else {
?>
                    <h1>Submit a Project</h1>
                    <p>If you would like to submit a project, please enter the following information: </p>
                  
   
<form action="submitProjectReceipt.php" method="post">
<table>
<?php
if(isset($_POST['SubmitProject']))
{
	//$query ="insert into projects 
	//mysqli_query($db,$query);
	//echo "Thank you!  The following project information has been submitted: ";
	//display info here
}
else
{
?>

<tr>
	<td>Project Title: </td><td><input type="text" name="title"></td>
</tr>
<tr>
	<td>Faculty Advisor Name:  </td><td><input type="text" name="advisor"></td>
</tr>
<tr>
<tr>
	<td>Course affiliation  </td><td>
		<select name="course"> 
		<option class="group">CPSC 391</option>
		<option class="group">CPSC 491</option>
		<option class="group">Honors Project</option>
		<option class="group">Summer Research</option>
		</select>


</td>
</tr>
	<td>Semester  </td><td>
		<select name="semester"> 
		<option class="group" >Fall</option>
		<option class="group" >Spring</option>
		<option class="group" >Summer</option>
		</select>

		<select name="year"> 
		<option class="group" >2011</option>
		<option class="group" >2012</option>
		</select>

</td>
</tr>
<tr>
	<td> <br></td>
</tr>
<tr>
	<td> <br></td>
</tr>

<tr>
	<td> <b>The following fields are optional:</b></td>
</tr>

<tr>
	<td> <br></td>
</tr>
<tr>
	<td>Summary (Project abstract): </td><td><input type="text" name="summary"></td>
</tr>
<tr>
	<td>Tag/Keyword List (separate by commas): </td><td><input type="text" name="tag"></td>
</tr>
<tr>
	<td>Picture Files: </td><td><input type="text" name="picture"></td>
</tr>
<tr>
	<td>Source Files: </td><td><input type="text" name="source"></td>
</tr>

</table>
	<br />
	<input type="submit" class="formbutton" value="Submit Project" name="SubmitProject">
	</form>
	<br />
               
           
<?php
}

}
?>
			 </div>

<?php
   include('footer.html');
?>  
</div>