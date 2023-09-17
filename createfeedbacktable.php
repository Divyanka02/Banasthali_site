<?php
$link = new mysqli("localhost" , "root", "","BANASTHALI_WEBSITE");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    echo "<br> Connection is established sucessfully ".$link->host_info;

}

$sql = "INSERT INTO feedback (email,name,visitor_type,city,comment)VALUES('$_POST[email]','$_POST[name]','$_POST[visitor_type]','$_POST[city]','$_POST[comment]')";
if($link->query($sql)==true){
   
    header('location:feedback.html');
    exit();

}
else{
    echo("<br>ERROR : Could not connect2 ".$link->error);

}

$link->close();
?>

?>