<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr =  "";
$passwordErr =  "";


$name =  "";
$password =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Email is required";
  } else {
    $password = test_input($_POST["password"]);
  }
    
}

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
// ?>

<h2>Login form</h2>
<form method="post" action="adminPage.php">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>


  Password: <input type="password" name="password"value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>

  <input type="submit" value="Login">  
</form>
<a href="Index.php">Registration here</a>

</body>
<!-- </html>
<html>
  <head>
    <title>Video in HTML</title>
  </head>
    
  <body> 
    
    <form method="POST" action="myPage.php">
      <input type="submit"/>
    </form>
    
  </body>    
</html> -->