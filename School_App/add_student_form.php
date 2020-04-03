<?php
include("elements/header.php");
error_reporting(0);
session_start();

if ($_SESSION['name'] == true) {
}
else{
  header('Location:index.php');
}
?>
<?php
function data_inserted_alert()
{
?>
	<script type="text/javascript" language="javascript">alert("Data Inserted Successfully");</script>
<?php
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="css/style.css"></script>
</head>
<body>
	<div class="student_form_container">
		<h1 align="center">Add Student</h1>
		<form method="post" action="add_student_form.php">
			<table align="center" id="form">
				<tr>
					<td><label>First name : </label> </td>
					<td><input type="text" name="fir_name" required="required"></td>
					<td><label>Last name : </label></td>
					<td><input type="text" name="last_name" required="required"></td>
				</tr>
				
				
				<tr>
					<td><label>Email : </label></td>
					<td><input type="Email" name="mail" required="required"></td>
					<td><label>Mobile # : </label></td>
					<td><input type="text" name="cell_no" required="required"></td>
				</tr>
				
				<tr>
					<td><label>Age : </label></td>
					<td><input type="text" name="age" required="required"></td>
					<td><label>Reg # : </label></td>
					<td><input type="text" name="reg_no" required="required"></td>
				</tr>
				
				<tr>
					<td><label>Date of Birth : </label></td>
					<td><input type="Date" name="dob" required=""></td>
					<td><label>Gender : </label></td>
					<td>
						<input type="radio" name="r1" required="required" value="Male"> Male
						<input type="radio" name="r1" required="required" value="Female"> Female
					</td>
				</tr>
				
				
				<tr>
					<td><label>Level : </label></td>
					<td>
						<select name="class" required="required" id="level" onBlur="fillFees();">
							<option></option>
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

					<script>
					function fillFees() {
						 var fees;
						 var level = document.getElementById("level").value;
						 switch (level) {
							 case "Level-1" :
							 fees = 500;
							 break;
							 case "Level-2" :
							 fees = 650;
							 break;
							 case "Level-3" :
							 fees = 800;
							 break;
							 case "Level-4" :
							 fees = 900;
							 break;
							 case "Level-5" :
							 fees = 950;
							 break;
							 case "Level-6" :
							 fees = 1000;
							 break;
							 case "Level-7" :
							 fees = 1100;
							 break;
							 case "Level-8" :
							 fees = 1250;
							 break;
							 case "Level-9" :
							 fees = 1500;
							 break;
							 case "Level-10" :
							 fees = 2000;
							 break;
							 default:
							 fees = 0;
							 break;
					 }
						 document.getElementById("fee_box").value = fees;
					 }
					</script>

					<td><label>Fees : </label></td>
					<td><input type="number" name="fees" required="required" id="fee_box" readonly="readonly"></td>
					
				</tr>

				<tr>
					<td><label>Address : </label></td>
					<td colspan="3"><textarea required="required" name="address" rows="5" cols="60"></textarea></td>
				</tr>
				
				<tr align="center">
					<td colspan="4"><input type="submit" name="submit" id="submit_btn" onclick="" ><input type="reset" name="" id="reset_btn"></td>
				</tr>	

				
				
			</table>
		</form>
	</div>
</body>
</html>

<?php

include("elements/footer.php");

function print_hello()
{
	echo "Hello World";
}

?>

<?php
	

if (isset($_POST['submit'])) {
	$fir_name = $_POST['fir_name'];
	$last_name = $_POST['last_name'];
	$mail = $_POST['mail'];
	$cell_no = $_POST['cell_no'];
	$age = $_POST['age'];
	$reg_no = $_POST['reg_no'];
	$dob = $_POST['dob'];
	$gender = $_POST['r1'];
	$class = $_POST['class'];
	$fees = $_POST['fees'];
	$address = $_POST['address'];

$server_name = "127.0.0.1";
$user_name = "root";
$password = "";
$db_name = "school_database";

$conn = new mysqli($server_name, $user_name, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
$sql = "INSERT INTO students VALUES ('$fir_name', '$last_name', '$mail', '$cell_no' , '$age', '$reg_no', '$dob', '$gender', '$class','$fees' ,'$address')";
    mysqli_query($conn,$sql);
    data_inserted_alert();
    
}

$conn->close();

}



?>