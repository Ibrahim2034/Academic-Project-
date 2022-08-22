<?php
$flag = 1;
$currentpassErr = $passErr = $confirmpassErr = "";
if (isset($_POST['Change'])) {

	$pass = $_POST['password'];
	$newpass = $_POST['newpassword'];
	$confirm = $_POST['repassword'];

	if (empty($pass)) {
		$currentpassErr = "Current Password required";
		$flag = 0;
	}

	if (empty($newpass)) {
		$passErr = "New Password is required";
		$flag = 0;
	} else {
		if (strlen($newpass) < 8) {
			$passErr = "New Password must be 8 charecters";
			$newpass = "";
			$flag = 0;
		} else if (!preg_match("/[@,#,$,%]/", $newpass)) {
			$passErr = "New Password must contain at least one of the special characters (@, #, $,%)";
			$newpass = "";
			$flag = 0;
		}
	}
	if (empty($confirm)) {
		$confirmpassErr = "Retype The New Password";
		$flag = 0;
	} else {
		if (strcmp($newpass, $confirm) == 1) {
			$confirmpassErr = "New Password & Retyped New Password Dosen't Match";
			$confirm = "";
			$flag = 0;
		}
	}



	if ($flag == 0) {
		$args = array(
			'currentpassErr' => $currentpassErr,
			'passErr' => $passErr,
			'confirmpassErr' => $confirmpassErr
		);
		header("location:../View/ChangePass.php?" . http_build_query($args));
	}

	if ($flag == 1) {
		$filePath = '../Model/data.json';
		if (file_exists($filePath)) {
			$current_data = file_get_contents($filePath);
			$array_data = json_decode($current_data, true);

			foreach ($array_data as $key => $value) {
				if ($value['ID'] == $_SESSION["id"]) {
					$array_data[$key]['password'] = $confirm;
				}
			}
			$final_data = json_encode($array_data);
			if (file_put_contents($filePath, $final_data)) {
				// return true;
				header('location: ../View/ViewProfile.php');
			} else {
				echo "error";
			}
		}
	}
}
?>