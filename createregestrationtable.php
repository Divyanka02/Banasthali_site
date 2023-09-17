<?php

$link = new mysqli("localhost" , "root", "","BANASTHALI_WEBSITE");
if($link ==false){
    die("ERROR : Could not connect ".$link->connection_error);

}
$sql = "CREATE TABLE regestration (name VARCHAR(20),email VARCHAR(30) UNIQUE,number INT(10),password VARCHAR(20),confirmpassword VARCHAR(20))";
if($link->query($sql)==true){
    echo "Table created Scessfully";

}
else{
    echo("ERROR : Could not connect $sql".$link->error);
}
?>