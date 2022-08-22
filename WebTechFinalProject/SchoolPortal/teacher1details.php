<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1 style="color:rgb(85, 3, 3); background-color: white;  text-align: center;">Kamal Uddin</h1><br>
    <h2 style="background-color: pawderblue; color:rgb(10, 123, 138); text-align: center;">Math1</h2>
    <div style="color:rgb(9, 121, 136); text-align: center; border-color: rgb(85, 7, 7);">
    <a style="color:blue;" href="teacher1cv.php">Kamal Uddin's Resume</a></div>
    <h3><p><a href="teacher1cv.php">Teacher1cv details</a></p></h3>
    <h1>Show File-select Fields</h1>

<h3>Show a file-select field which allows only one file to be chosen:</h3>
<form action="/action_page.php">
  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile"><br><br>
  <input type="submit">
</form>

<h3>Show a file-select field which allows multiple files:</h3>
<form action="/action_page.php">
  <label for="myfile">Select files:</label>
  <input type="file" id="myfile" name="myfile" multiple><br><br>
  <input type="submit">
</form>

    <!-- <div id="videos" class="uploadVideos" >
  <form name="uploadForm" action=".../videoApp/services/upload.php"   
  id="uploadForm" onsubmit="return validateForm()" method="POST" data-transition="pop"
  data-direction="reverse" data-ajax="false" data-push-state="false" target="_self"  
  enctype="multipart/form-data" >

    <input type="hidden" name="familyID"  />
    <input type="hidden" name="name" />

     <label for="file"><b>Add Videos: </b></label>
     <input type="file" name="file" id="file" required />
    <input type="submit" value="Upload" id="videoUpload" data-icon="check" data-role="button"  
      data-theme="e" />
      </form>
     </div> -->

    <!-- <h1>Math1 notes</h1>

<h3>Show a file-select field which allows only one file to be chosen:</h3>
<form action="/action_page.php">
  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile"><br><br>
  <input type="submit">
</form>

<h3>Show a file-select field which allows multiple files:</h3>
<form action="/action_page.php">
  <label for="myfile">Select files:</label>
  <input type="file" id="myfile" name="myfile" multiple><br><br>
  <input type="submit">
</form> -->

</body>
</html>
<?php

  session_start();
  if(!empty($_SESSION['login'])){
    echo $_SESSION['login'];
  }else{

    header('location:login.php');
  }
  

?>