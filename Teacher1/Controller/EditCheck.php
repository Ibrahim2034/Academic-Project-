<?php
session_start();

// function JsonUpdate($data)
// {
//   $filePath = '../Model/data.json';
//   if (file_exists($filePath)) {
//     $current_data = file_get_contents($filePath);
//     $array_data = json_decode($current_data, true);

//     foreach ($array_data as $key => $value) {
//       if ($value['ID'] == $_SESSION["id"]) {
//         $array_data[$key]['uname'] = $data['uname'];
//         $array_data[$key]['email'] = $data['email'];
//         $array_data[$key]['mobile'] = $data['mobile'];
//         $array_data[$key]['gender'] = $data['gender'];
//         $array_data[$key]['dob'] = $data['dob'];
//         // $_SESSION["Name"] = $data['uname'];
//       }
//     }
//     $final_data = json_encode($array_data);
//     if (file_put_contents($filePath, $final_data)) {
//       return true;
//     }
//   } else {
//     return false;
//   }
// }

function CleanInput($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if (isset($_POST['submit'])) {

  $name = $_POST['uname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $gender = $_POST['gender'];
  $dd = $_POST['dob'];
  $Validation = false;




  $flag = 1;
  $nameErr = $emailErr = $genderErr = $dobErr = $mobileErr = "";
  $idError = $passErr = $confirmpassErr = "";
  $message = '';
  $error = '';



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($name)) {
      $nameErr = "Name is required";
      $flag = 0;
    } else {
      $name = CleanInput($name);
      if (!preg_match("/^[a-zA-Z-.' ]*$/", $name)) {
        $nameErr = "Only letters white space, period & dash allowed";
        $flag = 0;
      } else if (str_word_count($name) < 2) {
        $nameErr = "At least two words needed";
        $flag = 0;
      }
    }

    if (empty($email)) {
      $emailErr = "Email is required";
      $flag = 0;
    } else {
      $email = CleanInput($email);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $email = "";
        $flag = 0;
      }
    }

    if (empty($mobile)) {
      $mobileErr = "Mobile is required";
      $flag = 0;
    } else {
      $mobile = CleanInput($mobile);
      if (strlen($mobile) < 11) {
        $mobileErr = "Mobile should be 11 charecters";
        $mobile = "";
        $flag = 0;
      }
    }

    if (empty($gender)) {
      $genderErr = "Gender is required";
      $gender = "";
      $flag = 0;
    } else {
      $gender = CleanInput($gender);
    }

    if (empty($dd)) {
      $dobErr = "DOB is required";
      $flag = 0;
    } else {
      $dd = CleanInput($dd);
    }


    if ($flag == 0) {
      $args = array(
        'nameErr' => $nameErr,
        'emailErr' => $emailErr,
        'mobileErr' => $mobileErr,
        'genderErr' => $genderErr,
        'dobErr' => $dobErr
      );
      header("location:../View/EditProfile.php?" . http_build_query($args));
    } else {
      $user = array(
        'uname' => $name,
        'mobile' => $mobile,
        'ID' => $ID,
        'gender' => $gender,
        'password' => $password,
        'email' => $email,
        'dob' => $dd
      );

      // $status = JsonUpdate($user);

      $filePath = '../Model/data.json';
      if (file_exists($filePath)) {
        $current_data = file_get_contents($filePath);
        $array_data = json_decode($current_data, true);

        foreach ($array_data as $key => $value) {
          if ($value['ID'] == $_SESSION["id"]) {
            $array_data[$key]['uname'] = $name;
            $array_data[$key]['email'] = $email;
            $array_data[$key]['mobile'] = $mobile;
            $array_data[$key]['gender'] = $gender;
            $array_data[$key]['dob'] = $dd;
            $_SESSION["Name"] = $name;
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
}
?>