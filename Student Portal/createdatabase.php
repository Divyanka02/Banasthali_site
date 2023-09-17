<?php
$link = new mysqli("localhost", "root", "");
if($link === false)
{
  die("ERROR: Could not connect.".$link->connect_error);
}
$sql = "CREATE DATABASE student_database";
if($link->query($sql) === true)
{
  echo "database created successfully";
}
else
{
  echo "ERROR: Could not able to execute $sql.".$link->error;
}
$link->close(); 
?>