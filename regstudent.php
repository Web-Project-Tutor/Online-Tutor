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



$s="insert into  student (sfname,slname,semailid,sphone,saddress,spass) values ('$fname','$lname','$mail','$phone','$address','$pass')";


if(!mysqli_query($con,$s))
    {
        echo 'not inserted';
    }
    else
    {




        if(isset($mail)){
            $email = $_POST['smail'];
            $password=$_POST['spwd'];
            $query=mysqli_query($con,"SELECT * FROM student WHERE semailid='$email' AND  spass='$password'");
            $num_rows=mysqli_num_rows($query);
            $row=mysqli_fetch_array($query);
            $_SESSION["id"]=$row['studentId'];
        
        
            
            if ($num_rows>0)
        
            {
              
                ?>
                <script>
        
                  alert('Successfully Log In');
                  document.location='home.php';
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

        header("Location: home.php");
        exit();
        // echo 'inserted';
        // header("refresh:1; url=http://localhost/tutor/Online-Tutor/index.html");
    }
header("refresh:2; url=register.html");

?>