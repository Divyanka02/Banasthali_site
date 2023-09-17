<?php

$link = new mysqli("localhost" , "root", "","BANASTHALI_WEBSITE");
if($link ==false){
    die("ERROR : Could not connect ".$link->connection_error);

}
$sql = "CREATE TABLE schooladmission (name VARCHAR(20),fname VARCHAR(20),mname VARCHAR(20),email VARCHAR(30) UNIQUE,class INT(10),address VARCHAR(10),city VARCHAR(20),state VARCHAR(20),pincode INT(10),number INT(12))";
if($link->query($sql)==true){
    echo "Table created Scessfully";

}
else{
    echo("ERROR : Could not connect $sql".$link->error);
}
?>