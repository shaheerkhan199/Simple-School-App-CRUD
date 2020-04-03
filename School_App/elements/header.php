<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    
<header><!--Start of Header -->
    <img src="img/header_img2.jpg" width="100%" height="120px" border="0"><!--Header Image-->
<nav><!--Start of Navigation Bar-->
    <a href="fee_schedule.php">Fee Schedule</a>
<!-- Students -->
    <div class="dropdown">
      <button class="dropbtn">Manage Students<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="add_student_form.php">Add Student</a>
        <a href="edit_student.php">Edit Student</a>
        <a href="delete_student.php">Delete Student</a>    
      </div>
    </div>
<!-- Users -->  
    <div class="dropdown">
      <button class="dropbtn">Manage Users<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="add_user.php">Add User</a>
        <a href="edit_user.php">Edit User</a>
        <a href="delete_user.php">Delete User</a>
      </div>
    </div>
<!-- Employees -->
    <div class="dropdown">
      <button class="dropbtn">Manage Employees<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="#">Add Emp.</a>
        <a href="#">Edit Emp.</a>
        <a href="#">Delete Emp.</a>
      </div>
    </div>
<!-- Attendance -->
    <div class="dropdown">
      <button class="dropbtn">Manage Attendance<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="student_attendance.php">Student Attendance</a>
        <a href="#">Employee Attendance</a>
      </div>
    </div>

    <!--Logout  -->
     <div class="dropdown" id="logout">
         <?php echo $_SESSION['name']; ?>  <i class="fa fa-caret-down"></i>
      <div class="dropdown-content">
        <a href="logout.php">Logout</a>
      </div>
    </div>
</nav><!--End of Navigation Bar-->
</header><!--End of Header-->

</body>
</html>
