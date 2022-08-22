
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
// define variables and set to empty values
$nameErr = "";
$passwordErr = "";
$genderErr = "";
$dateOfBarthErr = "";

$name = "";
$password = "";
$gender = "";
$dateOfBarth = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = $_POST["password"];
    // check if e-mail address is well-formed
    if (!filter_var($password, FILTER_VALIDATE_EMAIL)) {
      $passwordErr = "Invalid password format";
    }
  }

  if (empty($_POST["dateOfBarth"])) {
    $dateOfBarthErr = "At least one of them must be selected";
  } else {
    $dateOfBarth = $_POST["dateOfBarth"];
  }
  if (empty($_POST["gender"])) {
    $genderErr = "At least one of them must be selected";
  } else {
    $gender = $_POST["gender"];
  }

}
?>

<h2>PHP Form Validation Example</h2>
<table>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<tr><td>Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span> <br><br></td></tr>

  <tr><td>password: <input type="password" name="pass" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span><br><br></td></tr>
  
  <tr><td>Date Of Birth:
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
  <span class="error">* <?php echo $dateOfBarthErr;?></span><br><br></td></tr>
  
  <tr><td>Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
   
  <span class="error">* <?php echo $genderErr;?></span><br><br> </td></tr> 
  
<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
</form>
</table>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $dateOfBarth;
echo "<br>";
echo $gender;
echo "<br>";

?>

</body>
</html>