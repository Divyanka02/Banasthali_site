
<?php

$link = new mysqli("localhost" , "root", "","BANASTHALI_WEBSITE");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    echo "<br> -".$link->host_info;

}
$sql = "INSERT INTO schooladmission(name,fname,mname,email,class,address,city,state,pincode,number)VALUES('$_POST[name]','$_POST[fname]','$_POST[mname]','$_POST[email]','$_POST[class]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[pincode]','$_POST[number]')";
if($link->query($sql)==true){
  
   header('location:success.html');
    exit();

}
else{
    echo("<br>ERROR : Could not connect ".$link->error);

}

$link->close();
?>


    
