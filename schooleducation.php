

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOL EDUCATION</title>
   <!-- <link rel="stylesheet" href="schooleducation.css">-->
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
     <!-- Boxicons CDN Link -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
}
/*SCHOOL NAVBAR 1*/
.nav{
    display: flex;
    flex-direction: row;
    background-color:#084ca4;
    height: 17vh;
    width: 100%;


}
.nav img{
    width: 300px;
    height: 100px;
    margin-top: 15px;
    margin-left: 40px;
    border-radius: 20px;
}
.nav h1{
    color: white;
    font-size: 60px;
    font-weight: bolder;
    text-shadow: 3px 3px 10px gray;
    margin-top: 40px;
    margin-left: 310px;
}
@media screen and (max-width: 800px) {
    .nav img{
        margin-left: 10px;
        width: 200px;
        height: 80px;
    }
    .nav h1{
        font-size: 40px;
        margin-top: 40px;
        margin-left: 30px;
        text-shadow: 5px 5px 10px gray;
    }
}
@media screen and (max-width: 600px) {
    .nav img{
        margin-left: 10px;
        width: 150px;
        height: 80px;
    }
    .nav h1{
        font-size: 30px;
        margin-top: 40px;
        margin-left: 15px;
        text-shadow: 5px 5px 10px gray;
    }

}

/*SECOND NAVABR*/

/* Add a black background color to the top navigation */
.schoolnav2 {
background-color: #123f79;
overflow: hidden;
}

/* Style the links inside the navigation bar */
.schoolnav2 a {
float: left;
display: block;
color: white;
font-weight: 500;
text-align: center;
padding: 12px 10px;
text-decoration: none;
font-size: 16px;
margin-left: 20px;
}

/* Change the color of links on hover */
.schoolnav2 a:hover {
background-color: #ddd;
color: black;
}

/* Hide the link that should open and close the schoolnav2 on small screens */
.schoolnav2 .icon {
display: none;
}
@media screen and (max-width: 600px) {
.schoolnav2 a:not(:first-child) {display: none;}
.schoolnav2 a.icon {
  float: right;
  display: block;
}
}

/* The "responsive" class is added to the schoolnav2 with JavaScript when the user clicks on the icon. This class makes the schoolnav2 look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
.schoolnav2.responsive {position: relative;}
.schoolnav2.responsive a.icon {
  position: absolute;
  right: 0;
  top: 0;
}
.schoolnav2.responsive a {
  float: none;
  display: block;
  text-align: left;
}
}
 




/*SECTION -1 */
.section1{
  width: 100%;
  height: 40vh;
  background-image: url("school_bg.jpg");
  background-position: center;
  background-repeat: repeat;
  background-size: 100%;
 
display: flex;
justify-content: center;
align-items: center;

  
}
.section1 h1{
  font-size: 70px;
  font-weight: bolder;
  color: black;
  text-shadow: 3px 3px 5px gray;
}
@media screen and (max-width: 800px) {
  
 .section1 h1{
   font-size: 50px;
 }
}
@media screen and (max-width: 600px) {
  .section1 h1{
    font-size: 40px;
  }

}

/*SECTION-2*/
.section2{
  width: 100%;
  height: 35vh;
  display: flex;
  flex-direction: column;
}
.section2 .part1{
  
  color: black;
  font-weight: 600;
 
}
.section2 .part1 .right{
width: 100%;
height: 100%;
float: middle;
text-align: center;
margin-right: 30px;
margin-top: 20px;

}

.section2 .part1 .right h1{
padding-right: 40px;
font-weight: 700;
font-size: 50px;
}
.section2 .part1 .right p{
font-size: 20px;
margin: 10px;
padding-right: 2px;
width: 90%;
margin-left:100px;
text-align: center; 



}
.section2 .part1 .right a{
color: #084ca4;
}
.line_h{
width: 80%;
height: 4px;
background-color: #084ca4;
border-radius: 20px;
float: middle;
margin-left: 12%;
}

@media screen and (max-width: 800px) {
  .section2{
    height: 50vh;
  }
  .section2 .part1 .right p{
  
  margin-left:50px; 
  }
  
 }
 @media screen and (max-width: 600px) {
  .section2{
    height: 60vh;
  }
  .section2 .part1 .right p{
  
  margin-left:20px; 
  font-size: 17px;
  }
  
 
 }





/*SECTION-3*/
.section3{
margin-top: 50px;
width: 100%;
height: 97vh;

}
.section3 .container3{

width: 100%;
margin: auto;
height: 100%;
box-shadow: 5px 5px 30px black;


}
.section3 .container3 .box{
width: 100%;
height: 100%;
background-color: white;
position: relative;
}
#box1{
top: 0;
left: 0;
background-image: url("school4.jpg");
background-position: center;
background-repeat: no-repeat;
background-size: 100%;
width: 50%;
height: 50%;
position: absolute;
}
#box2{
top: 0;
right: 0;
/* background-color: blue;*/
width: 50%;
height: 50%;
position: absolute;

}
#box2 .text{

display: flex;
flex-direction: column;
margin-top: 50px;
margin-left: 30px;
}
#box2 .text h2{
font-size: 45px;
}
.line{
width: 90%;
height: 3px;
border-radius: 20px;
background-color:  rgb(166, 188, 224);
}
#box2 .text p{
margin-top: 10px;
padding: 8px;
font-size: 17px;
}
#box3{
top: 50%;
left: 0;

width: 50%;
height: 50%;
position: absolute;
display: flex;

}
#box3 .bx1{
flex: 50%;

background-image: url('school2.jpg');
background-position: center;
background-repeat: no-repeat;
background-size: 100%;
}
#box3 .bx2{
flex: 50%;
background-color:#084ca4;
color: white;


}
#box3 .bx2 li{
margin-top: 80px;
padding: 10px;
margin-left: 30px;
font-size: 30px;
font-weight: 600;
list-style: none;
padding: 5px;
}
#box3 .bx2 li a{
background-color: #ddd;
color:#084ca4;
text-decoration: none;
padding: 12px;
border-radius: 20px;
margin-left: 20px;
font-size: 20px;

}
#box3 .bx2 li a:hover{
background-color:#084ca4;
color: white;
}
#box4{
top: 50%;
right: 0;
background-image: url("school3.jpg");
background-position: center;
background-repeat: no-repeat;
background-size: 100%;
width: 50%;
height: 50%;
position: absolute;

}

@media screen and (max-width: 1000px) {

  #box2 .text h2{
    font-size: 33px;
    }
    #box3{
      flex-direction: column;
    }
 
#box3 .bx1{
  flex:0%;
}

  #box3 .bx2{
  flex: 100%;
 
  
  
  }
  
  #box3 .bx2 li a{

  margin-left: 10px;

  
  }
  
  
 }
 @media screen and (max-width: 600px) {
  #box2 .text h2{
    font-size: 21px;
    }
    #box2 .text p{
    
      font-size: 12px;
      }
      #box3{
        flex-direction: column;
      }
   
  #box3 .bx1{
    flex:0%;
  }
  
    #box3 .bx2{
    flex: 100%;
   
    
    
    }
    
  
  #box3 .bx2 li{
    margin-top: 50px;
    font-size: 20px;
    }
    #box3 .bx2 li a{
    margin-left: 0;
    font-size: 15px;
    padding: 1px;
    }
    
 
 }

/*COURSES*/
.courses{
/*margin-top: 50px;*/
width: 100%;
height: 75vh;
box-shadow: inset 10px 10px 30px gray,
inset -10px -10px 30px gray;
/*background-image: linear-gradient(rgb(168, 192, 241),white,white,white,white,white,rgb(168, 192, 241));*/

} 
.courses .content{
padding: 50px;

}
.courses .content h2 {
text-align: center;
font-size: 40px;
font-weight: 900;

}
.courses .content p{
margin-top: 30px;
font-size: 20px;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
font-weight: 500;
}
.courses .content .coursetable{
margin-top: 50px;
border-collapse: separate;
width: 700px;
height: 200px;
padding: 10px;



}
.courses .content .coursetable th{
padding: 6px;
font-size: 23px;
font-weight: 700;
border: 3px solid black;
color: black;

}
.courses .content .coursetable td{
padding: 6px;
border: 2px dashed black;
font-size: 18px;

}


@media screen and (max-width: 1000px) {
  .courses{
  
    height: 80vh;
   
    } 
    
    .courses .content h2 {
   
    font-size: 40px;
    
    }
    .courses .content p{
      
    font-size: 17px;
    }
    .courses .content .coursetable{
      margin-top: 30px;
    width: 400px;
    height: 200px;
    }
  
 }
 @media screen and (max-width: 600px) {
  .courses{
   
    height: 100vh;
   
    } 
    
    .courses .content h2 {
   
    font-size: 30px;
    
    }
    .courses .content p{
    font-size: 17px;
    }
    .courses .content .coursetable{
  
    width: 400px;
    height: 200px;
    }
  
 
 }



/*SECTION-4*/
.section4{
margin-top: 0px;
width: 100%;
height: 69vh;
display: flex;

}
.section4 .schoolphoto{

flex: 50%;
background-color: #22a408;
margin: 0;
padding: 0;

  
    position: relative;
    width: 70%;
    height: 0;
    padding-bottom: 34%;
  user-select: none;
}
#i1, #i2, #i3, #i4, #i5{ display: none;}
.schoolphoto .slide_img{
    position: absolute;
    width: 100%;;
    height: 100%;
}
.schoolphoto .slide_img img{
    width: inherit;
    height: inherit;
}
 .prev, .next{
    width: 12%;
    height: inherit;
    position: absolute;
    top:0; 
    background-color: rgba(88, 88, 88,.2);
    color:rgba(244, 244, 244,.9);
    z-index: 99;
    transition: .45s;
    cursor: pointer;
    text-align: center;
}
.next{right:0;}
.prev{left:0;}
label span{
    position: absolute;
    font-size: 100pt;
    top: 50%;
     transform: translateY(-50%);
}
.prev:hover, .next:hover{
    transition: .3s;
    background-color: rgba(88, 88, 89,.8);
    color: #ffffff; 
}
.schoolphoto #nav_slide{
width: 100%;
bottom: 12%;
height: 11px;
position: absolute;
text-align: center;
z-index: 99;
cursor: default;
}
#nav_slide .dots{
top: 20px;
width: 14px;
height: 14px;
margin: 0 4px;
position: relative;
border-radius: 100%;
display: inline-block;
background-color: rgba(0, 0, 0, 0.6);
transition: .4s;
}
#nav_slide .dots:hover {
cursor: pointer;
background-color: rgba(255, 255, 255, 0.9);
transition: .25s
}
.slide_img{z-index: -1;}
#i1:checked ~ #one  ,
#i2:checked ~ #two  ,
#i3:checked ~ #three,
#i4:checked ~ #four ,
#i5:checked ~ #five 
{z-index: 9; animation: scroll 1s ease-in-out;}
#i1:checked  ~  #nav_slide #dot1,
#i2:checked  ~  #nav_slide #dot2,
#i3:checked  ~  #nav_slide #dot3,
#i4:checked  ~  #nav_slide #dot4,
#i5:checked  ~  #nav_slide #dot5
{ background-color: rgba(255,255,255,.9);}
@keyframes scroll{
0%{    opacity:.4;}
100%{opacity:1;}
}        
@media screen and (max-width: 685px){
.schoolphoto{
    border: none;
    width: 100%;
    height: 0;
    padding-bottom: 55%; 
    display: none;
}    


label span { font-size: 50pt; }

.prev, .next{
    width: 15%;
}    
#nav_slide .dots{
    width: 12px;
    height: 12px;
}
}
@media screen and (max-width: 1000px) {
  .schoolphoto{
   
    display: none;
}    

}
@media screen  and(min-width: 970px){
.me{ display: none;}

}
.section4 .schoolfeature{
flex: 50%;
padding: 30px;

}
.section4 .schoolfeature h2{
font-weight: bold;
font-size: 50px;
padding: 40px;
text-shadow: 3px 3px 7px gray;
}
.section4 .schoolfeature .linefeature{
background-color: #084ca4;
width: 70%;
height: 5px;
border-radius: 30px;
margin-left: 70px;
}
.section4 .schoolfeature p{
font-size: 20px;
padding: 50px;
}
.section4 .schoolfeature .blink{
margin-top: 30px;
font-size: 30px;
font-weight: 900;
text-align: right;

    animation: blinker 0.6s linear infinite;
}
@keyframes blinker {
    10% {
      opacity: 0.5;
    }
  }
  @media screen and (max-width: 1000px) {
    .section4{
      height: 70vh;
    }
  }
  @media screen and (max-width: 685px){
    .section4{
      height: 95vh;
    }
   
    }
   

.footericons{
width: 100%;
height: 10vh;
background-color: #084ca4;
font-size: 50px;
text-align: center;
display: block;

}
.footericons .bx{
margin-top: 12px;
color: rgb(255, 253, 253);
margin-left: 70px;

}

/*FOOTER*/
.footer{

width: 100%;
height: 50vh;
background-color: black
}
</style>
<body>
   
   
   <div class="nav">
       <img src="logo.jpg" alt="logo">
       <h1>SCHOOL EDUCATION</h1>
   </div>
   <div class="schoolnav2" id="schoolnav2">
    <a href="schooleducation.php">HOME </a>
    <a href="aboutuschool.html">ABOUT US</a>
    <a href="examination/examination.html">EXAMINATION</a>
    <a href="schooladmission.php">ADMISSION</a>
    <a href="feestructure.html">FEE STRUCTURE</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  
  <div class="section1">

   <h1>सा विद्या या विमुक्तये</h1>
     
  </div>




  <div class="section2">
      <div class="part1">
        <div class="right">
           
            
            <h1>ABOUT US</h1>
            <div class="line_h"></div><br>
            <p>The origin of Banasthali is unique in more ways than one. Banasthali Vidyapith owes its existence neither to the zeal of an educationist, nor to that of a social reformer. It is also not the creation of a philanthropist's purse. It has arisen like the fabled phoenix from the ashes of a
                 blossoming flower Shanta Bai that had withered before its bloom. It is a spontaneous filling up of the vacuum caused by Shantabai's death. Here, love, eternal love has been the fountain head of all the thinking and action and this <br>
                 6+0 spirit has been the motivating force.
               <strong> <a href="aboutuschool.html">Know more</a></strong></p>
        </div>
      </div>
    </div>
    




    <div class="section3">
        <div class="container3">
            <div class="box">
            <div id="box1"></div>
            <div id="box2">
                <div class="text">
                    <h2>SCHOOL ACTIVITES</h2>
                    <div class="line"></div>
                    <p><strong>Major School Activities :</strong> The School firmly believes that textual studies are only but a part of the full development of a child and therefore provides a spectrum of in house activities through its program of panchmukhi shiksha. The main thrust of activities at the Vidyapith are visualized to promote the development of a balanced and harmonious personality of the students including physical, practical, aesthetic, moral and intellectual aspects. <a href="schoolactivities.html">Know more</a></p>
                
                </div>
            </div>
            <div id="box3">
                <div class="bx1"></div>
                <div class="bx2">
                    
                        <li>OUR SCHOLARS FACUILTY AND STAFFS </li>
                        <li><a href="facuiltyandstaff.html">Check here to know more</a></li>
                  
                </div>
            </div>
            <div id="box4"></div>
        </div>

        </div>

    </div>



    <div class="courses">
      <div class="content">
      <h2><a href="coursesandschemes.html" style="color: black;"> COURSES AND SCHEMES</a></h2>
      <p>Banasthali Vidyapith's work in the field of women's education has been of a special type. It can neither be classified as routine type nor welfare type of work. It is a unique blending of the two types.

        In this regard the courses offered by the school education wing of the Banasthali Vidyapith are as follows : 
       <br><strong><a href="coursesandschemes.html">Check here</a></strong></p>
       <center>
        <table border="5" class="coursetable">
          <tr>
            <th> Elementary Education</th>
            <th> Secondary & Senior Secondary </th>
          </tr>
          <tr>
            <td>Class 1 to 2 </td>
            <td>IX th and Xth</td>
          <tr>
            <td>Class 3 to 5</td>
            <td>XI th and XII th</td>
           
          </tr>
          <tr>
            <td>Class 6 to 8  </td>
            <td><a href="HigherEducation.html">Higher Education</a></td>
          </tr>
        </table>
      </center>
    </div>
  </div>




 <div class="section4">
    <div class="schoolphoto">
      <input type="radio" id="i1" name="images" checked />
      <input type="radio" id="i2" name="images" />
      <input type="radio" id="i3" name="images" />
      <input type="radio" id="i4" name="images" />
      <input type="radio" id="i5" name="images" />    
      
      <div class="slide_img" id="one">            
              
              <img src="school1.jpg">
              
                  <label class="prev" for="i5"><span>&#x2039;</span></label>
                  <label class="next" for="i2"><span>&#x203a;</span></label>    
          
      </div>
      
      <div class="slide_img" id="two">
          
              <img src="school5.jpg" >
              
                  <label class="prev" for="i1"><span>&#x2039;</span></label>
                  <label class="next" for="i3"><span>&#x203a;</span></label>
          
      </div>
              
      <div class="slide_img" id="three">
              <img src="school6.jpg">    
              
                  <label class="prev" for="i2"><span>&#x2039;</span></label>
                  <label class="next" for="i4"><span>&#x203a;</span></label>
      </div>
      <div class="slide_img" id="four">
              <img src="school7.jpg">    
              
                  <label class="prev" for="i3"><span>&#x2039;</span></label>
                  <label class="next" for="i5"><span>&#x203a;</span></label>
      </div>
      <div class="slide_img" id="five">
              <img src="school4.jpg"> 
              
              
                  <label class="prev" for="i4"><span>&#x2039;</span></label>
                  <label class="next" for="i1"><span>&#x203a;</span></label>
      </div>
     <div id="nav_slide">
          <label for="i1" class="dots" id="dot1"></label>
          <label for="i2" class="dots" id="dot2"></label>
          <label for="i3" class="dots" id="dot3"></label>
          <label for="i4" class="dots" id="dot4"></label>
          <label for="i5" class="dots" id="dot5"></label>
      </div>
    </div>
    <div class="schoolfeature">
        <div class="textfeature">
          <h2>FIVE FOLD EDUCATION</h2>
          <div class="linefeature"></div>
          <p>Banasthali Residential Senior Secondary School firmly believes in 
            developing an integrated and complete personality of its students through
             five fold education namely:  Moral, Physical, Intellectual, Aesthetic & Practical Education.
            <strong><a href="fivefoldhome.html">Know more</a></strong>
          </p>
          <h3 class="blink"><a href="FiveFoldInnerPages.html">EXPLORE GALLARY</a></h3>
        </div>
    </div>

 </div>
  
   <?php include('footer.html') ?> 
          
 
<script>
       function myFunction() {
  var x = document.getElementById("schoolnav2");
  if (x.className === "schoolnav2") {
    x.className += " responsive";
  } else {
    x.className = "schoolnav2";
  }
}

//section 4 image slider
let sliderImages = document.querySelectorAll(".slide"),
  arrowLeft = document.querySelector("#arrow-left"),
  arrowRight = document.querySelector("#arrow-right"),
  current = 0;
  
// Clear all images
function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = "none";
  }
}
  
// Initial slide
function startSlide() {
  reset();
  sliderImages[0].style.display = "block";
}
  
// Show previous
function slideLeft() {
  reset();
  sliderImages[current - 1].style.display = "block";
  current--;
}
  
// Show next
function slideRight() {
  reset();
  sliderImages[current + 1].style.display = "block";
  current++;
}
  
// Left arrow click
arrowLeft.addEventListener("click", function () {
  if (current === 0) {
    current = sliderImages.length;
  }
  slideLeft();
});
  
// Right arrow click
arrowRight.addEventListener("click", function () {
  if (current === sliderImages.length - 1) {
    current = -1;
  }
  slideRight();
});
  
startSlide();
</script>

</body>
</html>