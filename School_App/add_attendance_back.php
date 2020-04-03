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

<?php

	$date = $_POST['date_of_att'];
	$class = $_POST['class'];


	$d=strtotime("$date");
	$formatted_date = date("d-m-Y", $d);
	echo "<h1 align='center'>Created date is " .$formatted_date ."</h1>";


	//echo "<h1 align='center'>Attendance for ".$date."</h1>";

	$server_name = "127.0.0.1";
	$user_name = "root";
	$password = "";
	$db_name = "school_database";

	$conn = new mysqli($server_name, $user_name, $password, $db_name);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


	$sql = "SELECT * FROM students WHERE class='$class'";

	$result = $conn->query($sql);
	
	if($result->num_rows>0)
	{ 
		echo "<table border=1 align='center' cellpadding=10 style='margin-bottom:20px;border-collapse:collapse; width:80%;'>";
		echo "<th align='center' bgcolor='#d2d7dd'>S.No</th><th align='center' bgcolor='#d2d7dd'>Name</th><th align='center' bgcolor='#d2d7dd'>Reg #</th><th align='center' bgcolor='#d2d7dd'>Class</th><th align='center' bgcolor='#d2d7dd'>Present/Absent</th>";
		$i=1;
	 	while ($row = $result->fetch_assoc()) 
	 	{
	 		$radio_name="r"+$i;
	 		echo "<tr>";
 			echo "<td align='center'>".$i."</td>";
 			echo "<td align='center'>".$row['fir_name'].' '.$row['last_name']."</td>";
 			echo "<td align='center'>".$row['reg_no']."</td>";
 			echo "<td align='center'>".$row['class']."</td>";
 			echo "<td align='center'><input type='radio' name='$radio_name'>Present&nbsp&nbsp&nbsp<input type='radio' name='$radio_name'>Absent</td>";
 			$i++;
 			echo "</tr>";
 		}

 		echo "<tr>";
 		echo "<td  colspan='5' align='center'><input type='submit' value='Save' name='add' id='submit_btn'>&nbsp&nbsp<input type='button' value='Cancel' id='reset_btn'></td>";
 		//echo "<td></td>";
 		echo "</tr>";
 		echo "</table>";
 	}
?>
<script>
// onclick event is assigned to the #cancel button element.
document.getElementById("reset_btn").onclick = function() {
  window.location.href = "student_attendance.php";
};

</script>


<?php
include('elements/footer.php');
?>