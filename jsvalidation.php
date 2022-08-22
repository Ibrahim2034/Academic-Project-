<!-- <html>
	<body>
	<form onsubmit="return validate()">
		Email:<input type="email" id="uname" name="email"><br><br>
		Password:<input type="password" id="pass" name="pass"><br><br>
		<input type="submit" value="Login" name="btnLogin">
	</form>
	<script>
	  function validate()
	  {
		 var username=document.getElementById('uname');
		 var password=document.getElementById('pass');
		 if(username.value=="" || password.value=="")
		 {
			 alert('Username or password cannot be empty');
			 return false;
		 }
		 else

			 return true;
	  }
	</script>
	</body>
</html> -->
<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
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
            <div Class="col-6" style="margin-top:150px">
                <form onsubmit="return validate()" action="login.php" method="POST">
                    <div class="mt-1">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mt-1">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass">
                    </div>
                    <div class="mt-1">
                        
                        <button class="btn btn-success" name="submit" >Login</button>
                    </div>
                </form>
                <script>
	  function validate()
	  {
		 var username=document.getElementById('email');
		 var password=document.getElementById('pass');
		 if(username.value=="" || password.value=="")
		 {
			 alert('Username or password cannot be empty');
			 return false;
		 }
		 else

			 return true;
	  }
	</script>
                <h5>Create your account! <a href="user.php">Register</a></h5>

            </di>
            <div Class="col-6">
            </di>

            
            </div> 
        </div>       

</div>
    
</body>
</html>