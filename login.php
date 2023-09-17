<?php

ob_start();

$link = new mysqli("localhost" , "root", "","BANASTHALI_WEBSITE");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    //echo "<br> Connection is established sucessfully ".$link->host_info;

}

$sql = "SELECT * FROM regestration WHERE email='$_POST[email]' and password='$_POST[password]'";
//$res = $link->query($sql);
$numrow=mysqli_num_rows( $link->query($sql));
if($numrow==1){
    //echo "<br>valid user";
    session_start();
if($_SESSION['session_email']=$_POST['email']){
   header('location:homepage.php');
    exit();
}
}
else{
    echo "<br>Invalid user";
}

$link->close();
?>