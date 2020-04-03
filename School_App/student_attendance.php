<?php

include('elements/header.php');
error_reporting(0);
session_start();

if ($_SESSION['name'] == true) {
}
else{
  header('Location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<h1 align="center">Student Attendance</h1>
	<form method="post" action="add_attendance_back.php">
		<table align="center" style=" border-collapse: collapse; margin-bottom: 20px;" border="0">
			<tr>
				<td><input type="date" name="date_of_att" required="required"></td>
				<td>
					<select name="class" required="required" id="level" >
							<option value="Level-1">Level 1</option>
							<option value="Level-2">Level-2</option>
							<option value="Level-3">Level-3</option>
							<option value="Level-4">Level-4</option>
							<option value="Level-5">Level-5</option>
							<option value="Level-6">Level-6</option>
							<option value="Level-7">Level-7</option>
							<option value="Level-8">Level-8</option>
							<option value="Level-9">Level-9</option>
							<option value="Level-10">Level-10</option>	
						</select>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="add" value="Add Atte." id="submit_btn"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
include('elements/footer.php');

?>