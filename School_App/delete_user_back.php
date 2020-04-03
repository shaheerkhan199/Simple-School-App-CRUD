
<?php
error_reporting(0);
session_start();

if ($_SESSION['name'] == true) {
}
else{
  header('Location:index.php');
}

	
	$emp_code = $_GET['t1'];
	$conn = new mysqli('127.0.0.1','root','','school_database');

	if ($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
	}

	$sql = "DELETE FROM users WHERE emp_code='$emp_code'";
	 $result=mysqli_query($conn,$sql);

	 header("Location: delete_user.php");
	

$conn->close();


?>
