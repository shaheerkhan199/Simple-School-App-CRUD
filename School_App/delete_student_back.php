
<?php
	
error_reporting(0);
session_start();

if ($_SESSION['name'] == true) {
}
else{
  header('Location:index.php');
}

	
	$reg_no = $_GET['t1'];
	$conn = new mysqli('127.0.0.1','root','','school_database');

	if ($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
	}

	$sql = "DELETE FROM students WHERE reg_no='$reg_no'";
	 $result=mysqli_query($conn,$sql);

	 header("Location: delete_student.php");
	

$conn->close();


?>
