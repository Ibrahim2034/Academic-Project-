<?php

$conn = new mysqli('localhost', 'root', '', 'userinformation');
if(!$conn){
    echo 'Not connect';
}



      $emptymsg_FirstName = '';
      $emptymsg_LastName = '';
      $emptymsg_Email = '';
      $emptymsg_Password = '';
      $emptymsg_PasswordAgain='';

      if(isset($_POST['submit'])){
        $FirstName= $_POST['FirstName'];
        $LastName= $_POST['LastName'];
        $Email= $_POST['Email'];
        $Password= $_POST['Passwordd'];
        $PasswordAgain= $_POST['PasswordAgain'];
         $md5UserPassword = md5($Password);

        if(empty($FirstName)){
            $emptymsg_FirstName='fil up this field';
        }

        if(empty($LastName)){
            $emptymsg_LastName='fil up this field';
        }

        if(empty($Email)){
            $emptymsg_Email='fil up this field';
        }

        if(empty($Password)){
            $emptymsg_Password='fil up this field';
        }

        if(empty($PasswordAgain)){
            $emptymsg_PasswordAgain='fil up this field';
        }

        if(!empty($FirstName) && !empty($LastName) && !empty($Email) && !empty($Password) && !empty($PasswordAgain)){
          if($Password === $PasswordAgain){

            $sql= "INSERT INTO users (FirstName,LastName,Email,Passwordd) VALUES('$FirstName','$LastName','$Email','$md5UserPassword')";
           if( $conn->query($sql) == TRUE){
             header('location:login.php?Usercreated');

           }else{
            echo 'password not match';
          }
             
          }
        }
        


      }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url('images.jfif');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <div Class="row">
            <div Class="col-6" style=" margin-left:150px">
            </di>
            <div Class="col-6" style="margin-top:150px">
                <form action="user.php" method="POST">
                <div class="mt-1">
                        <label class="form-label" style="color:yellow;">First Name</label>
                        <input type="text" class="form-control" name="FirstName" value="<?php if(isset($_POST['submit'])){echo $FirstName;}?>" placeholder="Enter your first Names" style ="border: 1px solid red;">
                        <?php
                        if(isset($_POST['submit'])) {
                            echo  "<span class='text-danger'>".$emptymsg_FirstName."</span>";
                        }
                        ?>
                    </div>
                    <div class="mt-1">
                        <label class="form-label" style="color:yellow;">Last Nmae</label>
                        <input type="text" class="form-control" name="LastName" value="<?php if(isset($_POST['submit'])){echo $LastName;}?>" placeholder="Enter your last Name" style ="border: 1px solid red;">
                        <?php
                        if(isset($_POST['submit'])) {
                            echo  "<span class='text-danger'>".$emptymsg_LastName."</span>";
                        }
                        ?>
                    </div>
                    <div class="mt-1">
                        <label class="form-label"style="color:yellow;">Email</label>
                        <input type="email" class="form-control" name="Email" value="<?php if(isset($_POST['submit'])){echo $Email;}?>" placeholder="Enter your Email" style ="border: 1px solid red;">
                        <?php
                        if(isset($_POST['submit'])) {
                            echo  "<span class='text-danger'>".$emptymsg_Email."</span>";
                        }
                        ?>
                    </div>
                    <div class="mt-1">
                        <label class="form-label" style="color:yellow;">Password</label>
                        <input type="password" class="form-control" name="Passwordd" value="<?php if(isset($_POST['submit'])){echo $Password;}?>" placeholder="Enter your Password" style ="border: 1px solid red;">
                        <?php
                        if(isset($_POST['submit'])) {
                            echo  "<span class='text-danger'>".$emptymsg_Password."</span>";
                        }
                        ?>
                    </div>
                    <div class="mt-1">
                        <label class="form-label" style="color:yellow;">Password Again</label>
                        <input type="password" class="form-control" name="PasswordAgain" value="<?php if(isset($_POST['submit'])){echo $PasswordAgain;}?>" placeholder="Enter your Password again" style ="border: 1px solid red;">
                        <?php
                        if(isset($_POST['submit'])) {
                            echo  "<span class='text-danger'>".$emptymsg_PasswordAgain."</span>";
                        }
                        ?>
                    </div>
                    <div class="mt-1">
                        
                        <button class="btn btn-success" name="submit" >Login</button>
                    </div>
                </form>
                <h5>If you have an account! <a href="login.php">Login</a></h5>


            </di>
            <div Class="col-6">
            </di>

            
            </div> 
        </div>       

</div>
    
</body>
</html>