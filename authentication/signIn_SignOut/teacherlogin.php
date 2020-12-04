<?php

session_start();
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'userreg');
// $mail=$_POST['tmail'];
// $pass=$_POST['tpwd'];
// if(isset($_POST['tmail'])){
    
//     $mail=$_POST['tmail'];
//     $pass=$_POST['tpwd'];
    
//     $sql="select * from teacher where user='".$mail."'AND Pass='".$pass."' limit 1";
    
//     $result=mysql_query($sql);
    
//     if(mysql_num_rows($result)==true){
//         echo " You Have Successfully Logged in";
//         exit();
//     }
//     else{
//         echo " You Have Entered Incorrect Password";
//         exit();
//     }
        
// }

if(isset($_POST['tmail']))
{
$email=$_POST['tmail'];
$password=$_POST['tpwd'];


    $result=mysqli_query($con,"SELECT * FROM teacher WHERE tmail='$email' AND  tpass='$password'");
	$row=mysqli_num_rows($result);
	if($row>0)
	{
	$_SESSION['tmail']=$email;
	
    //header("location:admin.php");
    header("refresh:1; url=home.html");
    exit();
    }
    else{
		
        echo "Invalid Email or Password";
    }
}
?>