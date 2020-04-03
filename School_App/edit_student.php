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

	<form method="get" action="edit_student.php">
		<table align="center">
			<tr>
				<th>Reg. #</th>
				<td><input type="text" required="required" placeholder="Search.." name="search">
					<button type="submit" name="reg"><i class="fa fa-search" style="font-size: 15px;"></i></button>
				</td>
			</tr>
		</table>
	</form>
      
<!--For Search Record-->
<?php

if(isset($_GET['reg'])){

 	$search_key = $_GET['search'];
 

	$conn = new mysqli('127.0.0.1','root','','school_database');

	if ($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
	}

	$sql = "SELECT * FROM students WHERE reg_no='$search_key'";
	$result = $conn->query($sql);
	
	if($result->num_rows>0)
	{
		echo "<h1 align='center'>Search Records for ".$search_key." </h1>";
		$row = $result->fetch_assoc();

		echo "<table border=1 align='center' cellpadding=10 style='margin-bottom:20px;border-collapse:collapse; width:98%;'>";
		echo "<th align='center' bgcolor='#d2d7dd'>S.No</th><th align='center' bgcolor='#d2d7dd'>Name</th><th align='center' bgcolor='#d2d7dd'>Email</th><th align='center' bgcolor='#d2d7dd'>Cell</th><th align='center' bgcolor='#d2d7dd'>Age</th><th align='center' bgcolor='#d2d7dd'>Reg. #</th><th align='center' bgcolor='#d2d7dd'>D.O.B</th><th align='center' bgcolor='#d2d7dd'>Gender</th><th align='center' bgcolor='#d2d7dd'>Class</th><th align='center' bgcolor='#d2d7dd'>Fees</th><th align='center' bgcolor='#d2d7dd'>Address</th><th align='center' bgcolor='#d2d7dd'>Edit</th>";
		$i=1;
		$reg_no=$row['reg_no'];
		echo "<tr>";
 		echo "<td align='center'>".$i."</td>";
 		echo "<td align='center'>".$row['fir_name']." ".$row['last_name']."</td>";
 		echo "<td align='center'>".$row['mail']."</td>";
 		echo "<td align='center'>".$row['cell_no']."</td>";
 		echo "<td align='center'>".$row['age']."</td>";
 		echo "<td align='center'>".$row['reg_no']."</td>";
 		echo "<td align='center'>".$row['dob']."</td>";
 		echo "<td align='center'>".$row['gender']."</td>";
 		echo "<td align='center'>".$row['class']."</td>";
 		echo "<td align='center'>".$row['fees']."</td>";
 		echo "<td align='center'>".$row['address']."</td>";
 		echo "<td align='center'><a href='edit_student_back.php?t1=$reg_no'><i class='fa fa-edit'></i></a></td>";
 		echo "</tr>";
 		$i++;

	}
	else
	{
		 echo "<center><b><font size='3' align='center' color='red'>No Record Found For ".$search_key." </font></b></center>";
	}

}


?>
	
<!--For All Record-->
<?php
	
	

$conn = new mysqli('127.0.0.1','root','','school_database');
if ($conn->connect_error) {
	die("Connection Failed " . $conn->connect_error);
}
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if($result->num_rows>0){

	echo "<table border=1 align='center' cellpadding=10 style='margin-bottom:20px;border-collapse:collapse; width:98%;'>";
		echo "<th align='center' bgcolor='#d2d7dd'>S.No</th><th align='center' bgcolor='#d2d7dd'>Name</th><th align='center' bgcolor='#d2d7dd'>Email</th><th align='center' bgcolor='#d2d7dd'>Cell</th><th align='center' bgcolor='#d2d7dd'>Age</th><th align='center' bgcolor='#d2d7dd'>Reg. #</th><th align='center' bgcolor='#d2d7dd'>D.O.B</th><th align='center' bgcolor='#d2d7dd'>Gender</th><th align='center' bgcolor='#d2d7dd'>Class</th><th align='center' bgcolor='#d2d7dd'>Fees</th><th align='center' bgcolor='#d2d7dd'>Address</th><th align='center' bgcolor='#d2d7dd'>Edit</th>";
		echo "<h1 align='center'>All Students Record</h1>";
		$i=1;
		while ($row = $result->fetch_assoc()) {
 		
 		$reg_no=$row['reg_no'];
		echo "<tr>";
 		echo "<td align='center'>".$i."</td>";
 		echo "<td align='center'>".$row['fir_name']." ".$row['last_name']."</td>";
 		echo "<td align='center'>".$row['mail']."</td>";
 		echo "<td align='center'>".$row['cell_no']."</td>";
 		echo "<td align='center'>".$row['age']."</td>";
 		echo "<td align='center'>".$row['reg_no']."</td>";
 		echo "<td align='center'>".$row['dob']."</td>";
 		echo "<td align='center'>".$row['gender']."</td>";
 		echo "<td align='center'>".$row['class']."</td>";
 		echo "<td align='center'>".$row['fees']."</td>";
 		echo "<td align='center'>".$row['address']."</td>";
 		echo "<td align='center'><a href='edit_student_back.php?t1=$reg_no'><i class='fa fa-edit'></i></a></td>";
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