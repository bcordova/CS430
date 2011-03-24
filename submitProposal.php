<?php
  session_start(); 
  include('header.php');
  //include('db_connect.php');
?>
			
       <div id="content">
                <div id="right">
                    <h1>Submit a Proposal</h1>
                    <p>If you would like to submit a proposal, please enter the following information: </p>
                  
   
<form action="submitProposal.php" method="post">
<table>
<?php
if(isset($_POST['SubmitProposal']))
{
	//$query ="insert into proposals 
	//mysqli_query($db,$query);
	//echo "Thank you!  The following proposal information has been submitted: ";
	//display info here
}
else
{
?>
<tr>
	<td>Course: </td><td>
		<select name="course"> 
		<option class="group">CPSC 391</option>
		<option class="group">CPSC 491</option>
		</select>

	</td>
</tr>

<tr>
	<td>Credits: </td><td>
		<select name="credits"> 
		<option class="group">1</option>
		<option class="group">2</option>
		<option class="group">3</option>
		<option class="group">4</option>
		</select>

	</td>
</tr>

<tr>
	<td>Major Advisor: </td><td><input type="text" name="majAdv"></td>
</tr>
<tr>
	<td>Class: </td><td><input type="text" name="class"></td>
</tr>
<tr>
<tr>
	<td>Semester:  </td><td>
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
	<td>Course Grades: </td><td><input type="text" name="grade"></td>
</tr>
<tr>
	<td>Topic of Study:   </td><td><input type="text" name="topic"></td>
</tr>
<tr>
	<td>Course Title:   </td><td><input type="text" name="title"></td>
</tr>

<tr>
	<td>Supervising Instructor:   </td><td><input type="text" name="super"></td>
</tr>

<tr>
	<td>Project Type: </td><td>
		<select name="type"> 
		<option class="group">Preliminary to an honors project</option>
		<option class="group">An honors project</option>
		<option class="group">NOT an honors project</option>
		</select>

	</td>
</tr>

<tr>
	<td>Calendar:   </td><td><input type="textarea" name="calendar"></td>
</tr>

<tr>
	<td>Performance Evaluation:   </td><td><input type="textarea" name="eval"></td>
</tr>

<tr>
	<td>Why an individual study?:   </td><td><input type="textarea" name="indStudy"></td>
</tr>

<tr>
	<td>Special hardware/software needs and costs:   </td><td><input type="textarea" name="needs"></td>
</tr>
</table>
	<br />
	<input type="submit" value="Submit Proposal" name="SubmitProposal">
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