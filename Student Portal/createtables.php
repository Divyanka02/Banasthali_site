<?php
$link = mysqli_connect("localhost", "root", "", "student_database");
if($link === false)
{
  die("ERROR: Could not connect.".$link->connect_error);
}
//login table
$sql = "CREATE TABLE student_login (email VARCHAR(50) NOT NULL UNIQUE, password VARCHAR(30) NOT NULL)";
if($link->query($sql) === true)
{
  echo "table created successfully";
}
else
{
  echo "ERROR: Could not able to execute $sql.".$link->error;
}

//student detail
$sql = "CREATE TABLE student_detail (email VARCHAR(50) NOT NULL UNIQUE, fname VARCHAR(30), phone INT(10), address VARCHAR(30))";
if($link->query($sql) === true)
{
  echo "table created successfully";
}
else
{
  echo "ERROR: Could not able to execute $sql.".$link->error;
}

//student course
$sql = "CREATE TABLE student_course (email VARCHAR(50) NOT NULL UNIQUE, cname VARCHAR(30), duration  VARCHAR(10), semester INT(2))";
if($link->query($sql) === true)
{
  echo "table created successfully";
}
else
{
  echo "ERROR: Could not able to execute $sql.".$link->error;
}

//student fee
$sql = "CREATE TABLE student_fee (email VARCHAR(50) NOT NULL UNIQUE, total INT(5), paid  INT(5), dues INT(5))";
if($link->query($sql) === true)
{
  echo "table created successfully";
}
else
{
  echo "ERROR: Could not able to execute $sql.".$link->error;
}

//student attendance
$sql = "CREATE TABLE student_attendance (email VARCHAR(50) NOT NULL UNIQUE, sem CHAR(10), record  INT(3), eligible CHAR(3))";

if($link->query($sql) === true)
{
  echo "table created successfully";
}
else
{
  echo "ERROR: Could not able to execute $sql.".$link->error;
}
$link->close(); 
?>