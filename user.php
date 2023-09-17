

<?php 
// initialize errors variable
$errors = "";

// connect to database
$db = mysqli_connect("localhost", "root", "", "BANASTHALI_WEBSITE");

// insert a quote if submit button is clicked
if (isset($_POST['submit'])) {
    if (empty($_POST['task'])) {
        $errors = "You must fill in the task";
    }else{
        $task = $_POST['task'];
        $sql = "INSERT INTO notice (task) VALUES ('$task')";
        mysqli_query($db, $sql);
        header('location: homepage.php');
    }
}	
if (isset($_GET['del_task'])) {
$id = $_GET['del_task'];

mysqli_query($db, "DELETE FROM notice WHERE id=".$id);
header('location: homepage.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HOME PAGE</title>
<link rel="stylesheet" href="style.css">
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <!-- Boxicons CDN Link -->
 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<style>


.section1{
height: 80vh;
}
.section1 .slider {
position: absolute;
top: 38%;
left: 0;
width: 499%;
height: 100%;
animation: animate 10s linear infinite;

}
.section1 .slider .slide {
position: relative;
width: 20%;
height: 80%;
float: left;

}
.section1 .slider .slide .caption {
position: absolute;
bottom: 60px;
left: 60px;
right: 60px;
padding: 30px;
background: rgba(0, 0, 0, .5);
box-sizing: border-box;
transition: 0.5s;


}
.section1 .slider .slide .caption h2 {
margin: 0 0 20;
padding: 0;
color: #fff;
font-size: 48px;
transition: 0.5s;
}
.section1 .slider .slide .caption p {
margin: 0;
padding: 0;
color: #fff;
font-size: 20px;
transition: 0.5s;

}
.section1 .slider .slide .caption a {
text-decoration: underline;
cursor: pointer;
color:blue;
}
@media (max-width: 768px) {
.section1 .slider {
top: 34%;
}
.section1 .slider .slide .caption {
position: absolute;
bottom: 20px;
left: 20px;
right: 20px;
padding: 20px;
}
.section1 .slider .slide .caption h2 {
margin: 0 0 10;
font-size: 30px;
}
.section1 .slider .slide .caption p {
font-size: 16px;
}
}


@keyframes animate {
0% {
  left: 0;
}
20% {
  left: 0;
}
25% {
  left: -100%;
}
45% {
  left: -100%;
}
50% {
  left: -200%;
}
70% {
  left: -200%;
}
75% {
  left: -300%;
}
95% {
  left: -300%;
}
100% {
  left: -400%;
}
}


.section1 .slider .slide.slide1{
background-image: url(homeslide1\ \(1\).jpg);
background-size: cover;
background-position: center;
z-index: -1;


}
.section1 .slider .slide.slide2 {
background: url(homeslide1\ \(2\).jpg);
background-size: cover;
background-position: center;
z-index: -1;

}
.section1 .slider .slide.slide3 {
background: url(homeslide1\ \(3\).jpg);
background-size: cover;
background-position: center;
z-index: -1;
}
.section1 .slider .slide.slide4 {
background: url(homeslide1\ \(5\).jpg);
background-size: cover;
background-position: center;
z-index: -1;
}



/*SECTION2*/
.section2{
width: 100%;
height: 50vh;
background-color: #01142c; 
margin: 0;
padding: 20px;

    margin-bottom: 50px;
   
    display: flex;
    align-items: center;
    justify-content: center;
   
}

.section2 .card{
    margin: 50px;
    padding: 20px;
    width: 300px;
    height: 280px;
    text-align: center;
    margin-top: 80px;
  
   
   
}
.section2 .card .bx{
    
    padding: 10px;
    background-color: white;
    border-radius: 50%;
   
}
.section2 .card h5{
margin-top: 16px;
font-size: 20px;
font-weight: 500;
color: white;
}
.section2 .card h5 a:hover{
color: #fff;
}

.section2 .card p{
margin-top: 25px;
color: white;
}
.section2 .card p a{
  text-decoration:underline;
}

.bxs-school,.bx-cycling,.bxs-certification{
font-size: 70px;
}
@media (max-width: 1000px) {
.section2{
flex-direction: column;
height: 160vh;
}
.section2 .card{
   
    width: 500px;
    height: 280px;
    margin-top: 10px;

}
}
@media (max-width: 600px) {
.section2{
flex-direction: column;
height: 180vh;
}
.section2 .card{
   
   width: 300px;
   height: 280px;
   margin-top: 10px;

}
}



.section3{
width: 100%;
height: 220vh;

}
.section3 h2{
text-align: center;
font-size: 50px;
text-shadow: 3px 3px 5px gray;
font-weight: 600;
}
.section3 #coursesprovided{
border-collapse: separate;
margin-left: 180px;
border: 10px double black;
background-color: rgba(151, 170, 237, 0.349);

}
.section3 #coursesprovided th{
border-bottom: 2px dashed black ;
font-weight: 600;
padding: 25px;
font-size: 26px;
text-align: center;
background-color: #01142c;
color: white;
}
.section3 #coursesprovided td{
padding: 25px;
font-size: 18px;
text-align: center;

}
@media (max-width: 1000px) {
.section3{
width: 100%;
height: 225vh;

}

.section3 #coursesprovided{

margin-left: 0px;

}
.section3 #coursesprovided th{

font-size: 22px;

}
.section3 #coursesprovided td{

font-size: 18px;

}

}
@media (max-width: 600px) {
.section3{
width: 100%;
height: 180vh;

}
.section3 h2{
font-size: 40px;
}

.section3 #coursesprovided{

margin-left: 0px;

}
.section3 #coursesprovided th{

font-size: 20px;

}
.section3 #coursesprovided td{

font-size: 15px;
padding: 15px;

}


}




/*SECTION-4*/
.section4{
width: 100%;
height: 30vh;
background-color: #01142cc4; 

padding: 20px;

    margin-bottom: 0px;
   
    display: flex;
    align-items: center;
    justify-content: center;
   
}

.section4 .card{
    margin: 40px;
    padding: 20px;
    width: 300px;
    height: 280px;
    text-align: center;
    margin-top: 60px;
   
}

.section4 .card h5{
margin-top: 16px;
font-size: 60px;
font-weight: 700;
color: white;
}

.section4 .card p{
margin-top: 25px;
color: white;
font-size: 13px;
font-weight: 700;
}

@media (max-width: 1000px) {
.section4{
flex-direction: row;
height: 38vh;
}
.section4 .card{
   
    width: 200px;
    height: 200px;
    margin-top: 6px;

}
.section4 .card h5{
margin-top: 6px;
font-size: 37px;

}

.section4 .card p{
margin-top: 10px;

font-size: 10px;

}
}
@media (max-width: 600px) {
.section4{
flex-direction: row;
height: 26vh;
}
.section4 .card{
   
    width: 100px;
    height: 100px;
    margin-top: 0px;
    margin: 0;

}
.section4 .card h5{
margin-top: 0px;
font-size: 20px;

}

.section4 .card p{
margin-top: 10px;

font-size: 6px;

}
}


.section5{
margin-top: 0;
width:100%;

background-color: #e9eef471;
display: none;
}
.section5 #noticeboard h1{
text-align: center;
font-size: 40px;
font-weight: 600;
text-shadow: 3px 3px 5px gray;
color: black;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.section5 #noticeboard .section5line{
background-color: #01142c;
height: 2px;
width: 87%;
margin-left: 100px;
border-radius: 20px;
}

.section5 form {
width: 50%; 
margin: 30px auto; 
border-radius: 5px; 
padding: 10px;

border: 1px solid #000000;
}
.section5 form p {
color: red;
margin: 0px;
}
.section5 .task_input {
width: 75%;
height: 15px; 
padding: 10px;
border: 2px solid black;
}
.section5 .add_btn {
height: 39px;

color: 	black;
border: 2px solid #070707;
border-radius: 5px; 
padding: 5px 20px;
}/*
.section5 .display{
display: flex;
flex-direction: row;
width: 100%;
border: 2px solid black;
padding: 50px;

}
.section5 .display .task{
margin-left: 100px;
font-size: 20px;
}
.section5 .display .delete{
background-color: red;
}
*/

.section5 table {
width: 80%;
margin: 30px auto;
border-collapse: collapse;


}

.section5 tr {
border-bottom: 2px solid #cbcbcb;

}


.section5 th, td{
border: none;
height: 50px;
padding: 50px;
font-size: 20px;
font-weight: 600;

}

.section5 tr:hover {
background: #E9E9E9;
}

.section5 .task {
text-align: left;

}

.section5 .delete{
text-align: center;
}
.section5 .delete a{
color: white;
background: #a52a2a;
padding: 1px 6px;
border-radius: 3px;
text-decoration: none;
}







</style>
<body>


<!-- <div id="preloader"></div>-->

<div class="upsidenav" id="upsidenav">

<a href="feedback.html">Feedback</a>
<a href="faq.html">FAQ</a>
<a href="contactus.html">Contact Us</a>
<a href="howtoreach.html">How to Reach</a>

</div>
<div class="navigation">
  <div class="container">
     <div class="navbar">
        <div class="logo-toggle-container">
           <a href="#">
           <img src="logo2.jpg" alt="logo" style="border-radius:50%"/>
           </a>
           <span class="toggle-box">
           <span></span>
           <span></span>
           <span></span>
           </span>
        </div>
        <ul class="menu">
           <li><a href="user.php">HOME</a></li>
           <li><a href="About-Us.html">ABOUT US</a></li>
           <li><a href="schooleducation.php" target="blank">SCHOOL EDUCATION</a></li>
           <li><a href="HigherEducation.html" target="blank">HIGHER EDUCATION</a></li>
           <li><a href="CampusPage.html">CAMPUS</a></li>
           <li><a href="higherAdmissionForm.html" class="admission">ADMISSION</a></li>
        </ul>
     </div>
  </div>
</div>
 <br>
 <div class="topnav" id="myTopnav">
 <a href="login.html" target="blank"><?php/*
 if($_SESSION['session_email']==""){
   echo "LOGIN";
 }
 else{
  session_start();
  echo "WELCOME ".$_SESSION['session_email'];
 }
 */

 ?>LOGIN</a>
    <a href="fivefoldhome.html">FIVE-FOLD ACTIVITY </a>
    <a href="examination/examination.html" target="blank">EXAMINATION</a>
    <a href="deparment homepage.html">DEPARTMENTS</a>
    <a href="photogallary.html">PHOTO GALLARY</a>
    
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>


<div class="section1">
<div class="slider">
<div class="slide slide1">

  <div class="caption">
   
    <h2>UNIVERSITY FOR WOMEN</h2>
    <p>UNIVERSITY WITH DIFFERENCE</p>
  </div>
</div>
<div class="slide slide2">
  <div class="caption">
    <h2>ADMISSION OPEN</h2>
    <p>UG PG admission open</p>
  </div>
</div>
<div class="slide slide3">
  <div class="caption">
    <h2>Campus Life</h2>
    <p>Explore campus life</p>
  </div>
</div>
<div class="slide slide4">
  <div class="caption">
    <h2>Corona Update</h2>
    <p>Recent cases in India <a href="https://www.mohfw.gov.in/">Visit</a></p>
  </div>
</div>
<div class="slide slide1">
  <div class="caption">
    <h2>UNIVERSITY FOR WOMEN</h2>
    <p>UNIVERSITY WITH DIFFERENCE</p>
  </div>
</div>
</div>
</div>


<div class="section2">

<div class="card">
  <i class='bx bxs-school'></i>
    <h5><a href="Student Portal\Student Login Page.html"> STUDENT PORTAL</a></h5>
    <p>Student portal <a href="Student Portal\Student Login Page.html">student portal</a></p>
</div>
<div class="card">
  <i class='bx bx-cycling'></i>
    <h5><a href="fivefoldhome.html">FIVE FOLD EDUCATION</a></h5>
    <p>The speciality of our collage in which we focuse on all round development of our child</p>
</div>
<div class="card">
  <i class='bx bxs-certification'></i>
    <h5><a href=""> CERTIFICATES</a></h5>
    <p>Recived A++ by Naac</p>
</div>

</div>



<div class="section3">
<h2>COURSES PROVIDED</h2>
<br><br><br>
<table border="0" id="coursesprovided">
  <tr>
    <th>UNDER GRADUATE PROGRAMS</th>
    <th>POST GRADUATE PROGRAMS</th>
  </tr>
  <tr>
    <td>B.A.</td>
    <td>M.A.</td>
  </tr>
  <tr>
    <td> B.Sc.(Mathematics) </td>
    <td>Master of Social Work (MSW)</td>
  </tr>
  <tr>
    <td>B.Sc(Bio Science)</td>
    <td>M.Sc.</td>
  </tr>
  <tr>
    <td> B.Sc(Bio Technology)</td>
    <td>M.Sc. (Home Science) </td>
  </tr>
  <tr>
    <td>B.Sc (Geology)</td>
    <td>Master of Education (M.Ed.)</td>
  </tr>
  <tr>
    <td>B.Sc. (Home Science)</td>
    <td>  Master of Computer Applications (MCA)</td>
  </tr>
  <tr>
    <td> B.Sc. (Aviation Science)</td>
    <td>Post Graduate Diploma in Computer Applications (PGDCA)</td>
  </tr>
  <tr>
    <td>BCA</td>
    <td>Master of Business Administration (MBA)</td>
  </tr>
  <tr>
    <td>BBA</td>
    <td>M.Pharm. </td>
  </tr>
  <tr>
    <td>B.Com</td>
    <td>M.Tech.</td>
  </tr>
  <tr>
    <td>B.Ed. - 2 Years</td>
    <td>M.Phil. </td>
  </tr>
  <tr>
    <td>B.A. (B.Ed.)</td>
    <td>LL.M.</td>
  </tr>
  <tr>
    <td>B.Sc.(B.Ed.) - 4 Years</td>
    <td>M.Com</td>
  </tr>
  <tr>
    <td>B.A. LL.B (I)</td>
    <td>M.Des</td>
  </tr>
  <tr>
    <td>B.Com. LL.B.(I) </td>
    <td>Ph.D. </td>
  </tr>
  <tr>
    <td>B.B.A. LL.B.(I) - 5 Years</td>
    <td>--</td>
  </tr>
  <tr>
    <td>B.Arch.- 5 Years</td>
    <td>--</td>
  </tr>
  <tr>
  
  </tr>
</table>
</div>








<div class="section5">
<div id="noticeboard">
<h1>NOTICE BOARD</h1>
<div class="section5line"></div>
<?php if($_SESSION['session_email'] == 'divyankanandj02@gmail.com'){?>

<form method="post" action="homepage.php" class="input_form">
<?php if (isset($errors)) { ?>
<p><?php echo $errors; ?></p>
<?php } ?>

    <input type="text" name="task" class="task_input">
    <button type="submit" name="submit" id="add_btn" class="add_btn">Add</button>
<?php } ?>

</form>
<table>


<tbody>
    <?php
    // select all notice if page is visited or refreshed
    $notice = mysqli_query($db, "SELECT * FROM notice");

    $i = 1; while ($row = mysqli_fetch_array($notice)) { ?>
        <tr>
            <td> <?php //echo $i; ?> </td>
            <td class="task"> <?php echo $row['task']; ?> </td>
    <?php if($_SESSION['session_email'] == 'divyankanandj02@gmail.com'){?>
      <td class="delete"> 
                <a href="homepage.php?del_task=<?php echo $row['id'] ?>">x</a> 
            </td>
   <?php } ?>
            
        </tr>
    <?php $i++; } ?>	
</tbody>
</table>

</div>
</div>

<div class="section4">
<div class="card">

  <h5>A++</h5>
  <p>Naac graded Banasthali University A++ with score 3.63 </p>
</div>
<div class="card">

  <h5>#79</h5>
  <p>(NIRF) ranked 79th overall in India in 2020, 55th among universities</p>
</div>
<div class="card">

  <h5>1201+</h5>
  <p> World University Rankings 2022.
    <strong>Tier 1 collage</strong>
  </p>
</div>
<div class="card">

  <h5>95%</h5>
  <p>Placement record of our collage for (B.tech , MBA...)</p>
</div>

</div>



<?php include('footer.html')?>


<script src="script.js"></script>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
for(i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
}
slideIndex++;
if(slideIndex > slides.length) {
  slideIndex = 1
}
slides[slideIndex - 1].style.display = "block";
setTimeout(showSlides, 10000); // Change image every 2 seconds
}




</script>

</body>

</html>