<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webtechlabtask";
$name="Ibrahim";
$department="CSE";
//$apple=new Fruit();
//$apple->x;
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//$q="CREATE TABLE Student(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30) NOT NULL, Email VARCHAR(30) NOT NULL)";
	//$q="INSERT INTO Student(Name,Email) VALUES('Eva','eva@gmail.com')";
	//$q="INSERT INTO Student(Name,Email) VALUES('".$name."','".$email."')";
	//$q="DELETE FROM Student where ID=1003";
	$q="UPDATE student
    SET Name = 'Ibrahim'
    WHERE ID=2";
	$result=$conn->query($q);
	if($result)
		echo "data ubdated successfully";
	else
		echo "data not inserted";
}
	//echo "successful connection";
?>