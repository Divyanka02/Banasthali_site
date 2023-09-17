
<?php

$link = new mysqli("localhost" , "root", "","BANASTHALI_WEBSITE");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    echo "<br> -".$link->host_info;

}
$sql = "INSERT INTO regestration(name,email,number,password,confirmpassword)VALUES('$_POST[name]','$_POST[email]','$_POST[number]','$_POST[password]','$_POST[confirmpassword]')";
if($link->query($sql)==true){
   echo("Connected ".$link->error);
   header('location:login.html');
    exit();

}
else{
    echo("<br>ERROR : Could not connect ".$link->error);

}

$link->close();
?>


    
