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
                    <form method="post" id="RegistrationForm" action="../Controller/RegCheck.php"> 
                        <fieldset width="5px">
                            <legend>REGISTRATION</legend>
                          <table width="100.7%" height="100px" align="center">
                          <span class="error"><?php if(!empty($_GET['errmsg'])){echo $_GET['errmsg'];} ?></span>
                              <tr>
                                  <td width="30%" height="30px">Name</td>
                                  <td width="60%" height="30px">:<input type="text" id= "uname" name="uname" value="">
                                  <span class="error" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
                                </td>
                              </tr>
                             
                              <tr>
                                <td width="30%" height="30px">Email</td>
                                <td width="60%" height="30px">:<input type="email" id= "email" name="email" value="">
                                <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
                              </td>
                            </tr>

                             <tr>
                                  <td width="30%" height="30px">Mobile No.</td>
                                  <td width="60%" height="30px">:<input type="text" id= "mobile" name="mobile" value="">
                                  <span class="error" id="mobileErr"><?php if(!empty($_GET['mobileErr'])){echo $_GET['mobileErr'];}?></span>
                                </td>
                              </tr>

                              <tr>
                                  <td width="30%" height="30px">ID</td>
                                  <td width="60%" height="30px">:<input type="text" id= "id" name="ID" value="">
                                  <span class="error" id="idError"><?php if(!empty($_GET['idError'])){echo $_GET['idError'];}?></span>
                                </td>
                              </tr>

                              <tr>
                                <td width="30%" height="30px">Password</td>
                                <td width="60%" height="30px">:<input type="password" id= "password" name="password">
                                <span class="error" id="PasswordErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
                              </td>
                             </tr>
                    
                            <tr>
                                <td width="30%" height="30px">Confirm Password</td>
                                <td width="60%" height="30px">:<input type="password" id= "repass" name="confirm">
                                <span class="error" id="confirmpassErr"><?php if(!empty($_GET['confirmpassErr'])){echo $_GET['confirmpassErr'];}?></span>
                              </td>
                            </tr>
                           
                              <tr>
                                <td colspan="2">
                                <fieldset>
                                <legend>Gender</legend>
                                <input type="radio" name="gender" id="gender" value="Female">Female
                                <input type="radio" name="gender" id="gender" value="Male">Male
                                <input type="radio" name="gender" id="gender" value="Other">Other<br>
                                <span class="error" id="genderErr"><?php  if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];}?></span>
                                </fieldset>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                <fieldset>
                                <legend>Date of Birth</legend>
                                <input type="date" id= "dob" name="dob" value=""><br>
                                <span class="error" id="birthdayErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span>
                                </fieldset>
                                </td>
                            </tr>
                             
                            <tr>
                                <td height="30px" align="center" colspan="3"><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"></td>
                            </tr>

                            <tr>
                            <td colspan="2">
                             <center>
                             <div id="error_messege">
                             </div>
                             </center>
                             </td>
                             </tr> 

                          </table>
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