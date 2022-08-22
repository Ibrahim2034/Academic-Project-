<?php
	session_start();
  require_once('../Controller/Profile.php');
	if(isset($_COOKIE['flag']))
	{
?>


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
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Teacher.jpg" alt=""></td>
            <td align="Center">
            <b>
              Profile Infromation Change
            </b>
            </td>
          </tr>
        <td height="150px" weight="150px">
                <ul>
                    <li><a href="TeacherDashboard.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="StudentList.php">View Student's Profile</a></li>
                    <!-- <li><a href="Schedule.php">Class Schedule</a></li>
                    <li><a href="NoticeBoard.php">Notice Board</a></li>
                    <li><a href="ViewSchoolNotice.php">School Notice</a></li>
                    <li><a href="UploadNotes.php">Upload Notes</a></li>
                    <li><a href="ViewUploadedNotes(Student).php">See Student Notes</a></li>
                    <li><a href="StudentListMarks.php">Student Marks</a></li>
                    <li><a href="LeaveRequest.php">Student Leave Request</a></li>
                    <li><a href="BookHistory.php">Book History</a></li> -->
                    <li><a href="ChangePass.php">Reset Password</a></li>
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>EDIT PROFILE</legend>
            <form id="EditProfile" action="../Controller/EditCheck.php" method="post">

            <table>
					<tr>
						<td>ID</td>
						<td>: <input type="text" id="id" name="ID" disabled value="<?php echo $_SESSION['id']; ?>"></td>
					</tr>
					<tr>
						<td>Name</td>
						<td>: <input type="text" id="uname" name="uname" value="<?php echo $_SESSION['Name']; ?>">
            <span class="error" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>: <input type="email" id="email" name="email" value="<?php echo $User['email']; ?>">
            <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span></td>
					</tr>
                    <tr>
						<td>Mobile No.</td>
						<td>: <input type="text" id="mobile" name="mobile" value="<?php echo $User['mobile']; ?>">
            <span class="error" id="mobileErr"><?php if(!empty($_GET['mobileErr'])){echo $_GET['mobileErr'];}?></span></td>
					</tr>
                    <tr>
						<td>Gender</td>
						<td>:<input type="radio" name="gender" value="Male" <?php  if($User['gender']=="Male"){ echo 'checked';} ?>>Male
                          <input type="radio" id="gender" name="gender" value="Female" <?php if($User['gender']=="Female"){ echo 'checked';} ?>>Female
                          <input type="radio" id="gender" name="gender"  value="Other" <?php if($User['gender']=="Other"){ echo 'checked';} ?>>Other<br>
                          <span class="error" id="genderErr"><?php  if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];}?></td>
					</tr>
                    <tr>
						<td>Date of Birth</td>
						<td>: <input type="date" id="dob" name="dob" value="<?php echo $User['dob']; ?>">
            <span class="error" id="birthdayErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span></td>
					</tr>

				</table>
				<hr>
				<input type="submit" name="submit" value="Edit">
          <center>
          <div id="error_messege">
          </div>
          </center>
               
               
            </form>
            </fieldset>
        </td>
      </tr>
      <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: LoginPage.php');
	}

?>
