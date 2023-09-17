<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "examination"; /* Database name */

$con = mysqli_connect("localhost","root","","LoginSystem");
// Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

 USERS TABLE
CREATE TABLE `rsult` (
  `sid` int(11) NOT NULL,
  `student's name` varchar(255) NOT NULL,
  `father's name` varchar(255) NOT NULL
),
 (
  `dob` varchar(11) NOT NULL,
  `physics` int(255) NOT NULL,
  `chemestry` int(255) NOT NULL
),`english` int(255) NOT NULL
),
`maths` int(255) NOT NULL
),`computer` int(255) NOT NULL
),`total` int(255) NOT NULL
);

 ENGINE=InnoDB DEFAULT CHARSET=utf8;

