<?php
$link = new mysqli("localhost","root","","BANASTHALI_WEBSITE");
if($link===false)
{
die("ERROR: Could not connect.".$link->Connect_error);
}
$sql = "INSERT INTO higheradmission(name,dob,fname,mname,email,course,address,city,state,pincode,number) VALUES ('$_POST[name]','$_POST[dob]','$_POST[fname]','$_POST[mname]','$_POST[email]','$_POST[course]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[pincode]','$_POST[number]')";

if($link->query($sql)===true)
{
    header('location:success.html');
    exit();


}else{
echo "ERROR: Could not able to execute $sql.".$link->error;
}
$link->close();
?>
