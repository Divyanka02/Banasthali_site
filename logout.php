<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>LOG-OUT PAGE</title>
</head>
<body>

   
    <?php
session_start();
unset($_SESSION['session_email']);
session_destroy();
header('location:login.html');
?>

    
</body>
</html>