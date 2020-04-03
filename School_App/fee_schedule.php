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

		<h1 align='center'>Fee Schedule</h1>

		

			<?php	

			$conn = new mysqli('127.0.0.1','root','','school_database');
			if ($conn->connect_error) {
				die("Connection Failed " . $conn->connect_error);
			}
			$sql = "SELECT * FROM fee_schedule";
			$result = $conn->query($sql);

			if($result->num_rows>0){

				echo "<table border=1 align='center' cellpadding=10 style='margin-bottom: 20px; border-collapse:collapse; width:50%;'>";
			echo "<tr>";
				echo "<th align='center' bgcolor='#d2d7dd'>S.no</th>";
				echo "<th align='center' bgcolor='#d2d7dd'>Class</th>";
				echo "<th align='center' bgcolor='#d2d7dd'>Fees</th>";
				echo "<th align='center' bgcolor='#d2d7dd'>Edit</th>";
			echo "</tr>";
				$i=1;
			while ($row = $result->fetch_assoc()) {

				echo "<tr>";
				echo "<td align='center'>".$i."</td>";
				echo "<td align='center'>".$row['class']."</td>";
				echo "<td align='center'>".$row['fees']."</td>";
				echo "<td align='center'><a href=''><i class='fa fa-edit'></i></a></td>";
				echo "</tr>";
				$i++;
				}
				echo "</table>";
			}


			?>
		
</body>
</html>


<?php
include("elements/footer.php");

?>