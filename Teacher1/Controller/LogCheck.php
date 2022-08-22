<?php
session_start();

function validateUser($ID, $password){
	$data = file_get_contents("../Model/data.json");
    $mydata = json_decode($data);

    for($i=0;$i<count($mydata);$i++)
    {
        if($mydata[$i]->ID==$ID && $mydata[$i]->password==$password) 
        {
            $_SESSION["Name"]=$mydata[$i]->uname;
			$_SESSION["id"]=$mydata[$i]->ID;
            return true;
        }
    }
}

if (isset($_POST['submit'])) {

	$ID = $_POST['ID'];
	$password = $_POST['password'];

	if ($ID == "" || $password == "") {
		$msg = 'Username and Password Field Can Not Be Empty';
		header("location: ../View/LoginPage.php?errmsg=".$msg);
	} else {

		$status = validateUser($ID, $password);
		if ($status) {

			$_SESSION['flag'] = true;
			//$_SESSION['id'] = $Id;
			setcookie('flag', $ID, time() + 3600, '/');

			header('location: ../View/TeacherDashboard.php');
		} else {
			$msg = 'Username and Password Not Matched';
			header("location: ../View/LoginPage.php?errmsg=".$msg);
		}
	}
}
?>