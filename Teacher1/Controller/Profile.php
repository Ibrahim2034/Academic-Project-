<?php

	$data = file_get_contents("../Model/data.json");
    $mydata = json_decode($data);
    $User['mobile']="";
	$User['gender']="";
    $User['email']="";
    $User['dob']="";
    for($i=0;$i<count($mydata);$i++)
    {
        if($mydata[$i]->ID==$_SESSION["id"] && $mydata[$i]->uname==$_SESSION["Name"]) 
        {
            $User['mobile']=$mydata[$i]->mobile;
			$User['gender']=$mydata[$i]->gender;
            $User['email']=$mydata[$i]->email;
            $User['dob']=$mydata[$i]->dob;
            
        }
    }
?>