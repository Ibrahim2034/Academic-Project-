<?php 
 require("registeer.class.php");
?>
<?php
     
    if(isset($_POST['submit'])){
        $user = new RegisterUser($_POST['username'], $_POST['password']);
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraton form</title>
</head>
<body>

<table>

<form action = "" method = "post" enctype = "multipart/form-data" autocomplete = "off">
    <h2>Registration Form</h2>
    <h4>Both field <span> required</spen></h4>


    <tr><td>
    <label>Username</label></td><td>
    <input type="text" name="username"></td>
</tr>

<tr><td>
    <label>Password</label></td><td>
    <input type="text" name="password"></td>
</tr>

    <tr><td>
    <button type="submit" name="submit">Register</button></td>
</tr>

    <p class="error"><?php echo @$user->error ?></p>
    <p class="success"><?php echo @$user->success ?></p>

</form>
</table>
    
</body>
</html>