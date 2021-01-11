



<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');

// if(isset($_POST['smail']))
// {
// $email=$_POST['smail'];
// $password=$_POST['spwd'];


//     $result=mysqli_query($con,"SELECT * FROM student WHERE semailid='$email' AND  spass='$password'");
// 	$row=mysqli_num_rows($result);
// 	if($row>0)
// 	{
// 	$_SESSION['smail']=$email;
	
//     header("refresh:1; url=home.html");
//     // header("refresh:1; url=index.html");
//     exit();
//     }
//     else{
		
//         echo "Invalid Email or Password";
//     }
// }


if(isset($_POST['smail'])){
    $email = $_POST['smail'];
    $password=$_POST['spwd'];
    $query=mysqli_query($con,"SELECT * FROM student WHERE semailid='$email' AND  spass='$password'");
    $num_rows=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);
    $_SESSION["id"]=$row['studentId'];


    
  if ($num_rows>0)

  {
    // header("refresh:1; url=home.php");
    // $_SESSION["id"]=$row['studentid'];
      ?>
      <script>

        alert('Successfully Log In');
        document.location='home.php';
      </script>
      <?php
  }
  }


 ?>
