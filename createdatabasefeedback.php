<?php


$link = new mysqli("localhost" , "root", "");
if($link ==false){
    die("ERROR : Could not connect ".$link->connection_error);

}
$sql = "CREATE DATABASE BANASTHALI_WEBSITE";
if($link->query($sql)==true)
{
    echo "Database created sucessfully";
}
else{
    echo("ERROR : Could not connect $sql".$link->error);
}
$link->close();


$link = new mysqli("localhost" , "root", "","BANASTHALI_WEBSITE");
if($link ==false){
    die("ERROR : Could not connect ".$link->connection_error);

}
$sql = "CREATE TABLE feedback (email VARCHAR(30) UNIQUE,name VARCHAR(30),visitor_type VARCHAR(30),city VARCHAR(20),comment VARCHAR(60))";
if($link->query($sql)==true){
    echo "Table created Scessfully";

}
else{
    echo("ERROR : Could not connect $sql".$link->error);
}
?>