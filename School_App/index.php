<?php
session_start();
error_reporting(0);

if ($_SESSION['name'] == true) {
  header('Location:dashboard.php');	
}

?>

<?php
function invalid_login_alert()
{
?>
	<script type="text/javascript" language="javascript">alert("Invalid User Id or Password");</script>
<?php
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="container">
	<h2><em><u>Admin Login</u></em></h2>
	<table border="0" align="center">
		<form method="post" action="index.php">
			<tr>
				<td>
					<label>User name</label>
				</td>
				<td>
					<input type="text" name="user_id" required="required" placeholder="e.g ali ">
				</td>
			</tr>

			<tr>
				<td>
					<label>Password</label>
				</td>
				<td>
					<input type="Password" name="user_password" required="required" placeholder="****">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name='submit' value="Login" align="center" id="login">
				</td>
			</tr>
		</form>
	</table>
</div>
<?php

$server_name = "127.0.0.1";
$user_name = "root";
$password = "";
$db_name = "school_database";
		
			$conn = new mysqli($server_name, $user_name, $password, $db_name);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			
if(isset($_POST['submit']))
{
		$u_id = $_POST['user_id'];
		$u_pass = $_POST['user_password'];
		
		$sql = "SELECT * from users WHERE user_id='$u_id' AND password='$u_pass' ";
		$result = $conn->query($sql);

		if ($result->num_rows<=0) {
			invalid_login_alert();
		}
		else {
			$_SESSION['name'] = $u_id;
			header('Location: dashboard.php');
		}
		
		
// 		 if($u_id == 'Admin' || $u_id == 'admin')
// 		{
// 			if($u_pass == '12345')
// 			{
// 				header('Location: dashboard.php?t1='.$u_id);
// 			}
// 			else
// 			{
// 				invalid_login_alert();
// 			}
// 		}
// 		else
// 		{
// 			invalid_login_alert();
// 		}
 }

$conn->close();

?>

</body>
</html>