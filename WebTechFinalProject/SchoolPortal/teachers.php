<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "welcome to Tearchers information page";
    ?>
    <h3><p><a href="teacher1.php">Teacher1 details</a></p></h3>
    <h3><p><a href="teacher2.php">Teacher2 details</a></p></h3>
    <h3><p><a href="teacher3.php">Teacher3 details</a></p></h3>


</body>
</html>
<?php

  session_start();
  if(!empty($_SESSION['login'])){
    echo $_SESSION['login'];
  }else{

    header('location:login.php');
  }
  

?>