<?php

	if(!isset($_SESSION['IS_LOGIN'])){ 
    //session_start(); 
    //include database configuration
	include_once('connect.php');
    //set session "id" as email
    $_SESSION['session_email']=session_id();
    
    //selects everything from student_database table that is relevant to the username's row
    $query=mysqli_query($con, "SELECT * FROM 'student_detail' WHERE email='$session_email'");
	//will fetch the student id and firstname from respective row
    while($row = mysqli_fetch_row($query)) {
        $stn = $_GET['fname'];
    }
}

?>
<html>
	<head>
		<title>Dashboard</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		body{
			background-image: url("https://as2.ftcdn.net/v2/jpg/02/79/78/77/1000_F_279787704_4HlcYQoVtT5ANIBc0KIC9VGXPGd4VT6Q.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
		p{
			text-shadow: 1px 1px 2px black, 0 0 25px #20233F, 0 0 5px blue;
			color: #000080;
			font-size: 100px;
			text-transform: bold;
			font-family: Georgia;
			font-position: Center;
		}
		h3{
			margin-top: -95px;
			margin-bottom: 30px;
		}
		table{
			width: 100%;
			margin-top: 30px;
		}
		th, img:hover{
			transform: scale(1.06);
			transition: all 1s ease;
		}
		a{
			text-decoration: none;
		}
		</style>
	</head>
		<p><table>
				<tr>
					<th>
						<a href="Student-Details.html" target="_parent"><p>
						<img  text src="Student.png" class="Student" height="120px"width="120px" style="border-radius:50%" /><br>
						<h3 style="color:#c0c0c0">Student<br>Details</h3></p></a>
					</th>
					<th>
						<a href="Course-Details.html" target="_parent" ><p>
						<img  text src="Course.png" class="Student" height="120px"width="120px" style="border-radius:50%" /><br>
						<h3 style="color:#c0c0c0">Course<br>Details</h3></p></a>
					</th>
					<th>
						<a href="Fee-Details.html" target="_parent"><p>
						<img  text src="Fees.png" class="Student" height="120px"width="120px" style="border-radius:50%" /><br>
						<h3 style="color:#c0c0c0">Fee<br>Details</h3></p></a>
					</th>
					<th>
						<a href="Attendance-Details.html" target="_parent"><p>
						<img  text src="Attendance.png" class="Student" height="120px"width="120px" style="border-radius:50%" /><br>
						<h3 style="color:#c0c0c0">Attendance</h3></p></a>
					</th>
				</tr>
				<tr>
					<th>
						<a href="Support.html" target="_parent"><p>
						<img  text src="Support.png" class="Student" height="120px"width="120px" style="border-radius:50%" /><br>
						<h3 style="color:#c0c0c0">Support</h3></p></a>
					</th>
					<th>
						<a href="FAQs.html" target="_parent"><p>
						<img  text src="FAQs.png" class="Student" height="120px"width="120px" style="border-radius:50%" /><br>
						<h3 style="color:#c0c0c0">FAQs</h3></p></a>
					</th>
				</tr>
		</p>
	<body>
	
		
		
	</body>	
	
	
</html>