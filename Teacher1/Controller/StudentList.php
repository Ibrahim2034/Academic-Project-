<?php

	$data = file_get_contents("../Model/studentList.json");
    $mydata = json_decode($data);
    $StudentList = $mydata;
?>