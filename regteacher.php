<?php

session_start();
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'userreg');

$fname=$_POST['tusername1'];
$lname=$_POST['tusername2'];
$mail=$_POST['tmail'];
$phone=$_POST['tphone'];
$address=$_POST['taddress'];
$pass=$_POST['tpwd'];

$s="insert into  teacher (tfname,tlname,tmail,tphone,taddress,tpass) values ('$fname','$lname','$mail','$phone','$address','$pass')";

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