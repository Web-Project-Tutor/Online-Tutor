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


$fname=$_POST['tusername1'];
$lname=$_POST['tusername2'];
$mail=$_POST['tmail'];
$phone=$_POST['tphone'];
$address=$_POST['taddress'];
$pass=$_POST['tpwd'];

$s="insert into  teacher(tfname,tlname,tmail,tphone,taddress,tpass, profile) values ('$fname','$lname','$mail','$phone','$address','$pass','Teacher')";

if(!mysqli_query($con,$s))
    {
        echo 'not inserted';
    }
    else
    {
        // echo 'inserted';
        header("Location: http://localhost/tutor/Online-Tutor/home.html");
        exit();
    }
header("refresh:2; url=register.html");

?>