<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>  

<?php
// define variables and set to empty values

$name = $email = $comment = $course = "";


?>
<form id="myForm" method="post" action="Qustion1PHP.php" >  
<table align="center">
		<tr>
		<td colspan="2">
		<h1 align="center"><u><i>Please Enter your Comments.....</i></u></h1>
		</td>
		</tr>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" value="<?php echo $name;?>">
			
			</td>
		</tr>
  <br><br>
		<tr>
			<td>E-mail: </td>
			<td><input type="text" name="email" value="<?php echo $email;?>">
			
		</tr>
  <br><br>
		<tr>
			<td>Course: </td>
			<td><input type="text" name="course" value="<?php echo $course;?>"></td>
		</tr>
  <br><br>
		<tr>
			<td colspan="2">Your Comments about including PHP your course....</td> 
		</tr>
		<tr>
			<td colspan="2"><textarea name="comment" rows="5" cols="40"><?php echo $comment;?>
			</textarea></td>
		</tr>
  <br><br>
	<tr align="center">
			<td colspan="2"><input type="submit" name="submit" value="Submit">  
			<input type="button" onClick="this.form.reset()"value="Reset form">
			</td>
	</tr>
   
</table>
</form>



</body>
</html>