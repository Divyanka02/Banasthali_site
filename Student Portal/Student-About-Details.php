<?php

	if(!isset($_SESSION['IS_LOGIN'])){ 
    //session_start(); 
    //include database configuration
	include_once('connect.php');
    //set session "id" as email
    $_SESSION['session_email']=$_POST['email'];
    
    //selects everything from student_database table that is relevant to the username's row
    $query=mysqli_query($con, "SELECT * FROM 'student_detail' WHERE email='$session_email'");
	//will fetch the student id and firstname from respective row
    while($row = mysqli_fetch_row($query)) {
        $stn = $_GET['fname'];
		$em = $_GET['email'];
		$ph = $_GET['phone'];
		$add = $_GET['address'];
    }
}

?>

<html>

<head>
	<meta charset="UTF-8">
	<title>Student-Profile</title>
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
				
				<!-- ABOUT STUDENT START -->
				<div class="col-md 8 mt-1">
					<div class="card mb-3 content">
						<h1 class="m-3 pt-3">About</h1>
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<h5>Full Name</h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$stn"; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-3">
									<h5>Email</h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$em"; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-3">
									<h5>Phone</h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$ph"; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Address</h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$add"; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- ABOUT STUDENT END -->
					
					<!-- MATRICULATION DETAILS START 
					<div class="card mb-3 content">
						<h1 class="m-3">Matriculation Details</h1>
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<h5>Board/University:</h5>
								</div>
								<div class="col-md-9 text-second">
									Council for Indian School Certificate Examination
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Year of Passing:</h5>
								</div>
								<div class="col-md-9 text-second">
									2015
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Subjects:</h5>
								</div>
								<div class="col-md-9 text-second">
									English, Hindi, Social Sciences, Science, Mathematics, Computer Applications
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Maximum Marks:</h5>
								</div>
								<div class="col-md-9 text-second">
									600
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Marks Obtained:</h5>
								</div>
								<div class="col-md-9 text-second">
									522
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Percentage:</h5>
								</div>
								<div class="col-md-9 text-second">
									87
								</div>
							</div>
						</div>
					</div>
					 MATRICULATION DETAILS END -->
					
					<!-- INTERMEDIATE DETAILS START 
					<div class="card mb-3 content">
						<h1 class="m-3">Intermediate details</h1>
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<h5>Board/University:</h5>
								</div>
								<div class="col-md-9 text-second">
									CBSE
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Year of Passing:</h5>
								</div>
								<div class="col-md-9 text-second">
									2017
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Subjects:</h5>
								</div>
								<div class="col-md-9 text-second">
									English, Mathematics, Physics, Chemistry, Music Vocal
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Maximum Marks:</h5>
								</div>
								<div class="col-md-9 text-second">
									500
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Marks Obtained:</h5>
								</div>
								<div class="col-md-9 text-second">
									359
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h5>Percentage:</h5>
								</div>
								<div class="col-md-9 text-second">
									71.8
								</div>
							</div>
						</div>
					</div>
					 INTERMEDIATE DETAILS END -->
					
				</div>-->
			</div>
		</div>
	</div>
</body>

</html>