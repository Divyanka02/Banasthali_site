<?php include('schooleducationnavbar.html')?>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .sectioncontent{
        width: 100%;
        height: 80vh;   
    }
    .sectioncontent p{
        font-size: 18px;
        padding: 60px;
    }
.sectionform{
    margin-top: 30px;
    height: 150vh;
    background-color: rgba(202, 205, 207, 0.514);

}
.sectionform h1{
    text-align: center;
    font-size: 3rem;
    text-shadow: 3px 3px 5px gray;
    margin-bottom: 20px;
}
.sectionform .admissionline{
    width: 90%;
    height: 2px;
    background-color: black;
    margin-left: 80px;
}
.sectionform .schooladmissionform{
    margin-left: 350px;
    background-color: rgb(233, 225, 225);
    margin-right: 300px;
}
.sectionform .schooladmissionform p{
    font-size: 23px;
    margin: 15px;
    font-weight: 500;
    line-height: 50px;
}
input[type="text"],
input[type="number"],
input[type="password"]{
    padding: 6px;
    margin-left: 50px;
    width: 300px;
    border: 0;
}
input[type="radio"]{
    padding: 10px;
    margin-left: 50px;


}
.sectionform .schooladmissionform .btn{
    padding: 10px;
    font-size: 20px;
    margin-left: 200px;
    background-color: white;
    color: black;
    font-weight: 500;
    border-radius: 10px;
}
.sectionform .schooladmissionform .btn:hover{
    background-color: black;
    color: white;
}
.admissiontable{
        margin-left: 500px;
        font-size: 18px;
        border-collapse: separate;
        border-spacing: 5px;
        background-color: rgba(230, 221, 221, 0.251);

    }
    th,td{
        padding: 17px;
    }
    

    
    @media screen and (max-width: 1000px) {
        .sectioncontent{
       
        height: 120vh;   
    }
        .admissiontable{
            margin-left: 130px;
        }
        .sectionform{
    margin-top: 30px;
    height: 150vh;
    background-color: rgba(202, 205, 207, 0.514);

}
.sectionform h1{
   
   padding-top: 20px;
}
.sectionform .admissionline{
    width: 80%;
    
}
.sectionform .schooladmissionform{
    margin-left: 50px;
  
    margin-right: 50px;
}
.sectionform .schooladmissionform p{
    font-size: 20px;
    
}
input[type="text"],
input[type="number"],
input[type="password"]{
    padding: 1px;
    margin-left: 50px;
    width: 250px;
    border: 0;
}

        
}
    @media screen and (max-width: 600px) {
        
        .sectioncontent{
       
       height: 160vh;   
   }
       .admissiontable{
           margin-left: 14px;
       }
       .sectionform{
   margin-top: 30px;
   height: 210vh;
   

}
.sectionform h1{
  
  padding-top: 20px;
}
.sectionform .admissionline{
   width: 80%;
   
}
.sectionform .schooladmissionform{
   margin-left: 50px;
 
   margin-right: 50px;
}
.sectionform .schooladmissionform p{
   font-size: 20px;
   
}
input[type="text"],
input[type="number"],
input[type="password"]{
   padding: 1px;
   margin-left: 50px;
   width: 270px;
   border: 0;
}
.sectionform .schooladmissionform .btn{
    
    font-size: 18px;
    margin-left: 130px;
    
}

}
   
</style>
<body>
    <div class="sectioncontent">
        <p>
            Elementary Education: Nursery to class VIII. Admissions for Nursery to Class Vth are only for Day Scholars (Staff Wards).
    Secondary School Certificate (IX & X)
    Senior Secondary School Certificate (XI & XII) (Humanities, Sciences and Commerce).
    
    New admissions based on merit are made only in classes VI and IX. Admissions to class XI are based on merit of marks of secondary certificate/equivalent examination.
    
    Medium of instruction for school education is Hindi. However we cater to the need of students who want to study in English medium by providing bilingual system - Instructions, Books and Question Papers are in English as well as Hindi.
    
    Age Requirement (as on 1 July, 2022)</p>
    <table border="2" class="admissiontable">
    <tr>
        <th>Class</th>
        <th>Minimum Age</th>
        <th>Maximum Age</th>
        
    </tr>
    <tr>
        <td>VI</td>
        <td>10 years</td>
        <td>11 year 6 month</td>
       
    </tr>
    <tr>
        <td>IX</td>
        <td>13 years</td>
        <td>14 years 6 months</td>
    </tr>
    </table>
<p>
    Last date for application form submission for admission in Class VI, IX & XI is May 15, 2022.
    
    ( with a late fee of Rs. 900/- it is  May 30, 2022) .
    
    Offer Letter for admission will be sent to the qualified candidates.                                          
    
    Admissions to Class XI are based on Merit of Secondary Certificate/Equivalent Examination.
    Limited seats in select courses are available for admission against Foreign Nationals & NRI/NRI sponsored wards. Admission against Foreign Nationals & NRI/NRI sponsored wards is based on merit, without appearing in aptitude test.
        </p>
    </div>
<div class="sectionform">
<h1>ADMISSION FORM</h1>
<div class="admissionline"></div>
<form method="post" action="schooladmissionInsert.php" class="schooladmissionform">
<p> Name: * <input type="text" name="name" required></p>
<p> Father's Name: <input type="text" name="fname"></p>
<p> Mother's Name: <input type="text" name="mname"></p>
<p>  Email: * <input type="email" name="email" required></p>
<p>Class :
<input type="radio" name="class" value="6">VI
<input type="radio" name="class" value="9">IX
<input type="radio" name="class" value="11">XII
</p>
<p>  Address: * <input type="text" name="address" required></p>
<p>  City: <input type="text" name="city"></p>
<p>  State: <input type="text" name="state"></p>
<p>  Pincode: <input type="number" name="pincode"></p>
<p>Contact Number: *<input type="number" name="number" max-length="10" required></p>

<br>
<input type="submit" value="Submit" class="btn">

</form> 
</div>

  
</body>
</html>