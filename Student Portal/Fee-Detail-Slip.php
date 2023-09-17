<?php

	if(!isset($_SESSION['IS_LOGIN'])){ 
    //session_start(); 
    //include database configuration
	include_once('connect.php');
    //set session "id" as email
    $_SESSION['session_email']=$_POST['email'];
    
    //selects everything from student_database table that is relevant to the username's row
    $query=mysqli_query($con, "SELECT * FROM 'student_fee' WHERE email='$session_email'");
	//will fetch the student id and firstname from respective row
    while($row = mysqli_fetch_row($query)) {
        $t = $_GET['total'];
		$p = $_GET['paid'];
		$d = $_GET['dues'];
    }
}

?>
<html>

<head>
	<meta charset="UTF-8">
	<title>Fee-Slip</title>
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
						<h1 class="m-3 pt-3">Fee details</h1>
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<h5>Total Fee </h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$t"; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-3">
									<h5>Fee Paid</h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$p"; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-3">
									<h5>Fee Due</h5>
								</div>
								<div class="col-md-9 text-secondary">
									<?php echo "$d"; ?>
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