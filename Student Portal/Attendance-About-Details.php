<?php
ob_start();
	 
    session_start(); 
    //include database configuration
	include_once('connect.php');
    //set session "id" as email
    $_SESSION['session_email']=$_POST['user'];
    
    //selects everything from student_database table that is relevant to the username's row
    $query=mysqli_query($con, "SELECT * FROM 'student_attendance' WHERE email='$session_email'");
	//will fetch the student id and firstname from respective row
    while($row = mysqli_fetch_row($query)) {
        $s = $_GET['sem'];
		$re = $_GET['record'];
		$eli = $_GET['eligible'];
    }
}

?>


<html>

<head>
	<meta charset="UTF-8">
	<title>Attendance-Register</title>
	<meta name="description" content="Student Portal Navigation">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="webpages/Akanksha Kumari">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Student-Portal-Navigation-Bar.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="Student-About-Details.css">
</head>

<body>
	<!--<iframe src="D:\BCA VI SEMESTER\Project Lab\Website Project\Student-Portal-Login-Navigation-Bar.html" frameborder="0" width="100%" style="background:#20233F;margin-top:-20px" height="105px"></iframe>-->
	
	<div class="container" style="margin-top:20px">
		<div class="main">
			<div class="row">
				
				<!-- ABOUT COURSE START -->
				<div class="col-md 8 mt-1">
					<div class="card mb-3 content">
						<h1 class="m-3 pt-3">Attendance</h1>
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<h5>Current Semester</h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$s"; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-3">
									<h5>Record</h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$re"; ?>%
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-3">
									<h5>Eligible for Exam</h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$eli"; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- ABOUT STUDENT END -->
					
				</div>-->
			</div>
		</div>
	</div>
</body>

</html>