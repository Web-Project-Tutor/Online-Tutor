<?php

session_start();
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'userreg');

$fname=$_POST['susername1'];
$lname=$_POST['susername2'];
$mail=$_POST['smail'];
$phone=$_POST['sphone'];
$address=$_POST['saddress'];
$pass=$_POST['spwd'];

// $s="select * from student where sfname='$fname' && slname='$lname' && semailid='$mail' sphone='$phone'&& saddress='$address' && spass='$pass'";

$s="insert into  student (sfname,slname,semailid,sphone,saddress,spass) values ('$fname','$lname','$mail','$phone','$address','$pass')";
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