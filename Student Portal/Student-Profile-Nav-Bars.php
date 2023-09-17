<?php
ob_start();
	 
    session_start(); 
    //include database configuration
	include_once('connect.php');
    //set session "id" as email
    $_SESSION['session_email']=$_POST['user'];
    
    //selects everything from student_database table that is relevant to the username's row
	
    $query=mysqli_query($con, "SELECT * FROM student_detail WHERE email='$session_email'");
	
	//will fetch the student id and firstname from respective row
    while($row = mysqli_fetch_row($query)) {
        $stn = $_GET['fname'];
    }


?>

<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Dashboard</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		<link rel="stylesheet" href="Student-Profile-Nav-Bars.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style>
		body{
			background-image: url("https://as2.ftcdn.net/v2/jpg/02/79/78/77/1000_F_279787704_4HlcYQoVtT5ANIBc0KIC9VGXPGd4VT6Q.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
		</style>
		
	</head>
	
	<body>
	
		<input type="checkbox" id="check">
		<!--header area start-->
		<header>
			<label for="check">
				<i class='fas fa-bars' id="sidebar_btn"></i>
			</label>
			<label>
				<i id="side_slash"><b>/</b></i>
				<a href="../user.php" target="_blank"><i class='fas fa-home' id="home_btn" button onclick="../user.php"></i></a>
				
			</label>
			<div class="left_area">
				<a href="Student Login Page.html" class="logo" target="_blank">
				<img src="Student Portal Logo.png" alt="Student-Portal-Logo" height="50" style="margin-top: -7px" style="box-shadow: 1px 1px 2px black, 0 0 15px blue, 0 0 5px darkblue">
				</a>
			</div>
			<div class="right_area">
				<a href="log-out.php" class="logout_btn">Logout</a>
			</div>
		</header>
		<!--header area end-->
		<!--sidebar start-->
		<div class="sidebar">
			<center>
				<img src="Profile image.png" class="profile_image" alt="profile picture">
				<h4><?php echo "$stn"; ?></h4>
			</center>
			<a href="Student-Profile-Nav-Bars.php" class="active"><i class="fa fa-th"></i><span>Dashboard</span></a>
			<a href="Student-Details.php"><i class='far fa-address-card'></i><span>Student Details</span></a>
			<a href="Course-Details.php"><i class='fas fa-book-reader'></i><span>Course Details</span></a>
			<a href="Fee-Details.php"><i class='fas fa-money-check'></i><span>Fee Details</span></a>
			<a href="Attendance-Details.php"><i class='fas fa-tasks'></i><span>Attendance</span></a>
			<a href="Support.php"><i class='far fa-handshake'></i><span>Support</span></a>
			<a href="FAQs.php"><i class='fas fa-question'></i><span>FAQs</span></a>
		</div>
		<!--sidebar end-->
		<div class="content">
			<frameset>
			<iframe src="Dashboard_image.html" alt="back_image" frameborder="0" width="1236" height="670px">
			</frameset>
		</div>
	</body>
</html>