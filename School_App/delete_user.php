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

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="get" action="delete_user.php">
		<table align="center">
			<tr>
				<th>Emp. Code</th>
				<td><input type="text" required="required" placeholder="Search.." name="search">
					<button type="submit" name="emp"><i class="fa fa-search" style="font-size: 15px;"></i></button>
				</td>
			</tr>
		</table>
	</form>


<!--For Search Record-->
<?php

if(isset($_GET['emp'])){

 	$search_key = $_GET['search'];
 

	$conn = new mysqli('127.0.0.1','root','','school_database');

	if ($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
	}

	$sql = "SELECT * FROM users WHERE emp_code='$search_key'";
	$result = $conn->query($sql);
	
	if($result->num_rows>0)
	{
		echo "<h1 align='center'>Search Records for ".$search_key." </h1>";
		$row = $result->fetch_assoc();

		echo "<table border=1 align='center' cellpadding=10 style='margin-bottom:20px;border-collapse:collapse; width:80%;'>";
		echo "<th align='center' bgcolor='#d2d7dd'>S.No</th><th align='center' bgcolor='#d2d7dd'>Name</th><th align='center' bgcolor='#d2d7dd'>User ID</th><th align='center' bgcolor='#d2d7dd'>Email</th><th align='center' bgcolor='#d2d7dd'>Password</th><th align='center' bgcolor='#d2d7dd'>Designation</th><th align='center' bgcolor='#d2d7dd'>Employee Code</th><th align='center' bgcolor='#d2d7dd'>Edit/Delete</th>";
		$i=1;
		$empcode=$row['emp_code'];
		echo "<tr>";
 		echo "<td align='center'>".$i."</td>";
 		echo "<td align='center'>".$row['name']."</td>";
 		echo "<td align='center'>".$row['user_id']."</td>";
 		echo "<td align='center'>".$row['mail']."</td>";
 		echo "<td align='center'>".$row['password']."</td>";
 		echo "<td align='center'>".$row['designation']."</td>";
 		echo "<td align='center'>".$row['emp_code']."</td>";
 		echo "<td align='center'><a href='delete_user_back.php?t1=$empcode' name='delete'><i class='fa fa-trash-o' style='font-size:20px;color:red'></i></a></td>";
 		echo "</tr>";
 		$i++;

	}
	else
	{
		echo "<center><b><font size='3' align='center' color='red'>No Record Found For ".$search_key." </font></b></center>";
	}
$conn->close();
}


?>
	
<!--For All Record-->
<?php
	
	echo "<h1 align='center'>All Users Record</h1>";

$conn = new mysqli('127.0.0.1','root','','school_database');
if ($conn->connect_error) {
	die("Connection Failed " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if($result->num_rows>0){

	echo "<table border=1 align='center' cellpadding=10 style='margin-bottom:20px;border-collapse:collapse; width:80%;'>";
	echo "<th align='center' bgcolor='#d2d7dd'>S.No</th><th align='center' bgcolor='#d2d7dd'>Name</th><th align='center' bgcolor='#d2d7dd'>User ID</th><th align='center' bgcolor='#d2d7dd'>Email</th><th align='center' bgcolor='#d2d7dd'>Password</th><th align='center' bgcolor='#d2d7dd'>Designation</th><th align='center' bgcolor='#d2d7dd'>Employee Code</th><th align='center' bgcolor='#d2d7dd'>Edit/Delete</th>";
	
	$i=1;
 	while ($row = $result->fetch_assoc()) {
 		$empcode=$row['emp_code'];
 		echo "<tr>";
 		echo "<td align='center'>".$i."</td>";
 		echo "<td align='center'>".$row['name']."</td>";
 		echo "<td align='center'>".$row['user_id']."</td>";
 		echo "<td align='center'>".$row['mail']."</td>";
 		echo "<td align='center'>".$row['password']."</td>";
 		echo "<td align='center'>".$row['designation']."</td>";
 		echo "<td align='center'>".$row['emp_code']."</td>";
 		echo "<td align='center'><a href='delete_user_back.php?t1=$empcode' name='delete'><i class='fa fa-trash-o' style='font-size:20px;color:red'></i></a></td>";
 		echo "</tr>";
 		$i++;
 	}


	echo "</table>";


}
else{
	echo "<center><b><font size='3' align='center' color='red'>No Record Found</font></b></center>";
}


$conn->close();

?>
</body>
</html>

<?php
include("elements/footer.php");

?>