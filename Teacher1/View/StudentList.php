<?php
	session_start();
  require_once('../Controller/StudentList.php');
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Student.jpg" alt=""></td>
            <td align="Center">
            <b>
              Student List
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
                <legend>STUDENT LIST</legend>
            <form class="" action="" method="post">

					<div id="myh1" class="">
									<br>

            <?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Name</td>
								    <td>Email</td>
								    <td>Mobile</td>
										<td>Gender</td>
                    <td>Section</td>
										<td>Date of Birth</td>
                    <td>Present Address</td>
								</tr>";
								for($i = 0; $i<count($StudentList); $i++){
								    echo "<tr align = 'center'>
								    <td>{$StudentList[$i]->id}</td>
								    <td>{$StudentList[$i]->name}</td>
								    <td>{$StudentList[$i]->email}</td>
								    <td>{$StudentList[$i]->mobile}</td>
										<td>{$StudentList[$i]->gender}</td>
										<td>{$StudentList[$i]->dob}</td>
                    <td>{$StudentList[$i]->section}</td>
                    <td>{$StudentList[$i]->address}</td>
								</tr>";
								}
								echo "</table>";
								?>

          </div>
               
               
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
