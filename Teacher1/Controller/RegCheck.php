<?php
session_start();

function JsonInsert($data)
{
    $filePath = '../Model/data.json';
    if (file_exists($filePath)) {
        $current_data = file_get_contents($filePath);
        $array_data = json_decode($current_data, true);
        $array_data[] = $data;
        $final_data = json_encode($array_data);
        if (file_put_contents($filePath, $final_data)) {
            return true;
        }
    } else {
        return false;
    }
}

function CleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


if (isset($_POST['submit'])) {

    $name = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $ID = $_POST['ID'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $gender = $_POST['gender'];
    $dd = $_POST['dob'];
    $Validation = false;




    $flag=1;
    $nameErr = $emailErr = $genderErr = $dobErr = $mobileErr = "";
    $idError = $passErr = $confirmpassErr = "";
    $message = '';  
    $error = ''; 
    
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($name)) {
        $nameErr = "Name is required";
        $flag=0;
      } else {
        $name = CleanInput($name);
        if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
          $nameErr = "Only letters white space, period & dash allowed";
          $flag=0;
        }
        else if (str_word_count($name)<2) {
          $nameErr = "At least two words needed";
          $flag=0;
        }
      }
      
      if (empty($email)) {
        $emailErr = "Email is required";
        $flag=0;
      } else {
        $email = CleanInput($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
          $email = "";
          $flag=0;
        }
      }
    
      if (empty($ID)) {
        $idError = "Id is required";
        $flag=0;
      } else {
        $ID = CleanInput($ID);
        if (strlen($ID)<4) {
          $idError = "ID should be 4 charecters";
          $ID ="";
          $flag=0;
        }
      }

      if (empty($mobile)) {
        $mobileErr = "Mobile is required";
        $flag=0;
      } else {
        $mobile = CleanInput($mobile);
        if (strlen($mobile)<11) {
          $mobileErr = "Mobile should be 11 charecters";
          $mobile ="";
          $flag=0;
        }
      }
      
      if (empty($password)) {
        $passErr = "Password is required";
        $flag=0;
      } else {
        $password = CleanInput($password);
        if (strlen($password)<8) {
          $passErr = "Password must be 8 charecters";
          $password ="";
          $flag=0;
        }
        else if (!preg_match("/[@,#,$,%]/",$password)) {
          $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
          $password ="";
          $flag=0;
        }
      }
      if (empty($confirm)) {
        $confirmpassErr = "Retype The Current Password";
        $flag=0;
      } else {
        $confirmpass = CleanInput($confirm);
        if (strcmp($password, $confirm)==1) {
          $confirmpassErr = "Password & Retyped Password Dosen't Match";
          $confirm ="";
          $flag=0;
        }
      }
    
       if (empty($gender)) {
        $genderErr = "Gender is required";
        $gender = "";
        $flag=0;
      } else {
        $gender = CleanInput($gender);
      }
    
      if (empty($dd)) {
        $dobErr = "DOB is required";
        $flag=0;
      } else {
        $dd = CleanInput($dd);
      }
    
    
       if($flag==0){
        $args = array(
        'nameErr' => $nameErr,
        'emailErr' => $emailErr,
        'idError' => $idError,
        'mobileErr' => $mobileErr,
        'passErr' => $passErr,
        'confirmpassErr' => $confirmpassErr,
        'genderErr' => $genderErr,
        'dobErr' => $dobErr
    );
          header("location:../View/Registration.php?" . http_build_query($args));
       }

    else
    {
        $user = array(
            'uname' => $name,
            'mobile' => $mobile,
            'ID' => $ID,
            'gender' => $gender,
            'password' => $password,
            'email' => $email,
            'dob' => $dd
        );

        $status = JsonInsert($user);

        if ($status) {
            header('location: ../View/LoginPage.php');
        } else {
            echo "error";
        }
    }
}
}
?>