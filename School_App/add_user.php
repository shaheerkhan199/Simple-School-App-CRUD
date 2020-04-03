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
	<div class="user_form_container">
		<h1 align="center">Add User</h1>
		<form method="post" action="add_user.php">
			<table align="center" id="form">
				<tr>
					<td><label>Name : </label> </td>
					<td><input type="text" name="name" required="required"></td>
					<td><label>User Id : </label></td>
					<td><input type="text" name="user_id" required="required"></td>
				</tr>
				
				
				<tr>
					<td><label>Email : </label></td>
					<td><input type="Email" name="mail" required="required"></td>
					<td><label>Password : </label></td>
					<td><input type="password" name="password" required="required"></td>
				</tr>
				
				<tr>
					<td><label>Designation : </label></td>
					<td><input type="text" name="designation" required="required"></td>
					<td><label>Emp. Code : </label></td>
					<td><input type="text" name="emp_code" required="required"></td>
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
	$name = ucfirst($_POST['name']);
	$user_id = $_POST['user_id'];
	$mail = $_POST['mail'];
	$user_password = $_POST['password'];
	$designation = $_POST['designation'];
	$emp_code = $_POST['emp_code'];

$server_name = "127.0.0.1";
$user_name = "root";
$password = "";
$db_name = "school_database";

$conn = new mysqli($server_name, $user_name, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
$sql = "INSERT INTO users VALUES ('$name', '$user_id', '$mail', '$user_password' , '$designation', '$emp_code')";
    mysqli_query($conn,$sql);
    data_inserted_alert();
    
}

$conn->close();

}



?>