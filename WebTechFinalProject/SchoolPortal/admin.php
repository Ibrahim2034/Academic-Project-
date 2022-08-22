<?php

  session_start();
  if(!empty($_SESSION['login'])){
    echo $_SESSION['login'];
  }else{

    header('location:login.php');
  }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3><p><a href="student.php">Student details</a></p></h3>
<h3><p><a href="teachers.php">Teachers details</a></p></h3>
<h3><p><a href="employees.php">Employees detailes</a></p></h3>


    
</body>
</html>
<h3><a href="logout.php">Logout</a></h3>