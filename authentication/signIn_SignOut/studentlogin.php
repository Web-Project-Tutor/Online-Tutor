<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');

if(isset($_POST['smail']))
{
$email=$_POST['smail'];
$password=$_POST['spwd'];


    $result=mysqli_query($con,"SELECT * FROM student WHERE semailid='$email' AND  spass='$password'");
	$row=mysqli_num_rows($result);
	if($row>0)
	{
	$_SESSION['smail']=$email;
	
    //header("location:admin.php");
    header("refresh:1; url=home.html");
    exit();
    }
    else{
		
        echo "Invalid Email or Password";
    }
}



?>