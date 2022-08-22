

<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'userinformation');
if(!$conn){
    echo 'Not connect';
}
$emptyemail = '';
$emptypassword = '';


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $md5UserPassword = md5($password);

    if(empty($email)){
        $emptyemail = 'Fill up this field';
    }
    
    if(empty($password)){
        $emptypassword = 'Fill up this field';
    }

    if(!empty($email) && !empty($password)){
        
        $sql = "SELECT * FROM users WHERE Email = '$email' AND Passwordd = '$md5UserPassword' ";
        $query = $conn->query($sql);

        if($query->num_rows > 0){
            $_SESSION['login'] = 'login susccess';
            
            header('location:admin.php');



        }else{
            echo 'Not found';
            echo $sql;
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url('Computer_Programmer1920X10180.jpg');
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div class="container">
        <div Class="row">
            <div Class="col-6" style=" margin-left:150px">
            </di>
            <div Class="col-6" style="margin-top:50px">
               <?php 
                    if(isset($_GET['Usercreated'])){
                        echo "User created succesfully";
                    }

               ?>
                <form action="login.php" method="POST">
                    <div class="mt-1">
                        <label class="form-label" style="color:yellow;">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php if(isset($_POST['submit'])){echo $email;}?>" placeholder="Enter your Email" style ="border: 1px solid red;">
                        <?php
                        if(isset($_POST['submit'])) {
                            echo  "<span class='text-danger'>".$emptyemail."</span>";
                        }
                        ?>
                    </div>
                    <div class="mt-1">
                        <label class="form-label" style="color:yellow;">Password</label>
                        <input  type="password" class="form-control" name="password" value="<?php if(isset($_POST['submit'])){echo $password;}?>" placeholder="Enter your Password" style ="border: 1px solid red;">
                        <?php
                        if(isset($_POST['submit'])) {
                            echo  "<span class='text-danger'>".$emptypassword."</span>";
                        }
                        ?>
                    </div>
                    <div class="mt-1">
                        
                        <button class="btn btn-success" name="submit" style="color:yellow;">Login</button>
                    </div>
                </form>
                <h5 style="color:red;">Create your account! <a href="user.php" style="color:yellow;">Register</a></h5>

            </di>
            <div Class="col-6">
            </di>

            
            </div> 
        </div>       

</div>
    
</body>
</html>