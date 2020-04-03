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


<!-- User Data Edit Code -->
<?php
	
$emp_code = $_GET['t1'];


if (isset($_POST['ok'])) {
	$name = ucfirst($_POST['name']);
	$user_id = $_POST['user_id'];
	$mail = $_POST['mail'];
	$user_password = $_POST['password'];
	$designation = $_POST['designation'];
	$new_emp_code = $_POST['emp_id'];

	$server_name = "127.0.0.1";
	$user_name = "root";
	$password = "";
	$db_name = "school_database";

	$conn = new mysqli($server_name, $user_name, $password, $db_name);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "UPDATE  users SET name='$name' , user_id='$user_id' , mail='$mail' , password='$user_password' , designation='$designation' , emp_code='$new_emp_code' WHERE emp_code='$new_emp_code'";

	echo $sql;
	//exit();
	    mysqli_query($conn,$sql);
	    header("Location: edit_user.php");

	$conn->close();
}

?>


<!-- End of User Data Edit Code -->

<!-- Code foor setting value is text fields -->
<?php

$conn = new mysqli('127.0.0.1','root','','school_database');

	if ($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
	}

	$sql = "SELECT * FROM users WHERE emp_code='$emp_code'";
	 $result=mysqli_query($conn,$sql);

	$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="css/style.css"></script>
</head>
<body>
	<div class="user_form_container">
		<h1 align="center">Edit User</h1>
		<form method="post" action="edit_user_back.php">
			<table align="center" id="form">
				<tr>
					<td><label>Name : </label> </td>
					<td><input type="text" name="name" required="required" value="<?php echo htmlentities($row['name']); ?>"></td>
					<td><label>User Id : </label></td>
					<td><input type="text" name="user_id" required="required" value="<?php echo htmlentities($row['user_id']); ?>"></td>
				</tr>
				
				
				<tr>
					<td><label>Email : </label></td>
					<td><input type="Email" name="mail" required="required" value="<?php echo htmlentities($row['mail']); ?>"></td>
					<td><label>Password : </label></td>
					<td><input type="text" name="password" required="required" value="<?php echo htmlentities($row['password']); ?>"></td>
				</tr>
				
				<tr>
					<td><label>Designation : </label></td>
					<td><input type="text" name="designation" required="required" value="<?php echo htmlentities($row['designation']); ?>"></td>
					<td><label>Emp. Code : </label></td>
					<td><input type="text" name="emp_id" required="required" value="<?php echo htmlentities($emp_code); ?>"></td>
				</tr>
				
				

				<tr align="center">
					<td colspan="4"><input type="submit" name="ok" value ="Update" id="submit_btn"  ><input type="reset" value="Cancel" name="" id="reset_btn" ></td>
				</tr>	

				
				
			</table>
		</form>
	</div>
</body>
</html>

<script>
// onclick event is assigned to the #cancel button element.
document.getElementById("reset_btn").onclick = function() {
  window.location.href = "edit_user.php";
};
</script>


<?php
include("elements/footer.php");

?>