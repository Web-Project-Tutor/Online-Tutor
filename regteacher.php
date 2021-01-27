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

// $s="insert into  teacher(tfname,tlname,tmail,tphone,taddress,tpass, profile) values ('$fname','$lname','$mail','$phone','$address','$pass','Teacher')";

// if(!mysqli_query($con,$s))
//     {
//         echo 'not inserted';
//     }
//     else
//     {

//         // echo 'inserted';
//         header("Location: teachHome.php");
//         exit();
//     }
// header("refresh:2; url=register.html");



$s="insert into  teacher(tfname,tlname,tmail,tphone,taddress,tpass, profile) values ('$fname','$lname','$mail','$phone','$address','$pass','Teacher')";


if(!mysqli_query($con,$s))
    {
        echo 'not inserted';
    }
    else
    {




        if(isset($mail)){
            $email = $_POST['tmail'];
            $password=$_POST['tpwd'];
            $query=mysqli_query($con,"SELECT * FROM student WHERE semailid='$email' AND  spass='$password'");
            $num_rows=mysqli_num_rows($query);
            $row=mysqli_fetch_array($query);
            $_SESSION["teacherid"]=$row['teacherId'];
        
        
            
            if ($num_rows>0)
        
            {
              
                ?>
                <script>
        
                  alert('Successfully Log In');
                  document.location='teachHome.php';
                </script>
                <?php
            }
            else{
              ?>
                <script>
        
                  alert('Unable to Log In');
                  document.location='index.html';
                </script>
                <?php
            }
        
          
        }

        header("Location: teachHome.php");
        exit();
        // echo 'inserted';
        // header("refresh:1; url=http://localhost/tutor/Online-Tutor/index.html");
    }
header("refresh:2; url=register.html");

?>




