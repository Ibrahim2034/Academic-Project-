<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
    <style>
.error{
        color: red;
      }
    </style>
  </head>
  <body>
    <table border="1" cellspacing="0" width="90%" >
      <tr>
        <td>
            <table width="100%">
                <tr>
                  <td><img height="40px" weight="40px" src="../Resources/school_logo.png" alt=""></td>
                  <td align = "right">
                      <a href="HomePage.php">Home</a>|
                      <a href="LoginPage.php">Login</a>|
                      <a href="Registration.php">Registration</a>
                      <!-- <a href="../index.html">Back</a> -->
                  </td>
                </tr>
            </table>
          </td>
      </tr>
      <tr>
        <td height="150px" weight="150px" colspan="2">
    <body>
         <table align="center">
             <tr>
                <td></td>
                <td>
                    <form method="post" id="LoginForm" action="../Controller/LogCheck.php"> 
                        <fieldset width="5px">
                            <legend>LOGIN</legend>
                            <span class="error"><?php if(!empty($_GET['errmsg'])){echo $_GET['errmsg'];} ?></span>
           <table>
           <tr>
            <td>ID:</td> 
            <td><input type="text" id="id" name="ID" value=""></td>
           </tr>
           <tr>
            <td>Password:</td> 
            <td><input type="password" id="password" name="password" value=""></td>
           </tr>
           </table>
            <hr>
            <div align="center"><input type="submit" name="submit" value="Submit"> <a href="Registration.php"><input type="button" name="Sign Up" value="Sign Up"></a></div>
            <center>
              <div id="error_messege">
              </div>
            </center>
                        </fieldset>
                        </form>
                </td>
                <td></td>
             </tr>
         </table>
        </td>
      </tr>
      <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>