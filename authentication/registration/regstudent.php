<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');

if(!$con){
    echo 'Not connected to server';
}

if(!mysqli_select_db($con,'userreg')){
    echo 'Database not selected';
}

// echo $con;


$fname=$_POST['susername1'];
$lname=$_POST['susername2'];
$mail=$_POST['smail'];
$phone=$_POST['sphone'];
$address=$_POST['saddress'];
$pass=$_POST['spwd'];

// $s="select * from student where sfname='$fname' && slname='$lname' && semailid='$mail' sphone='$phone'&& saddress='$address' && spass='$pass'";

$s="insert into  student (sfname,slname,semailid,sphone,saddress,spass, profile) values ('$fname','$lname','$mail','$phone','$address','$pass','Student')";
// $result=mysqli_query($con,$s);
// $num=mysqli_num_rows($result);

// if($num==1){
//     echo "username already taken";
// }
// else{
//     $reg="insert insto student(studentid,sfname,slanme,semailid,sphone,saddress,spass)values('$fname','$lname','$mail','$phone','$address','$pass')";
//     mysqli_query($con,$reg);
//     echo "Registration successful";
// }

// echo $s ;
if(!mysqli_query($con,$s))
    {
        echo 'not inserted';
    }
    else
    {
        echo 'inserted';
    }
header("refresh:2; url=register.html");

?>