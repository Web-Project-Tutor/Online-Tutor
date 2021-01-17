<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');

if(isset($_POST['tmail'])){
    $email = $_POST['tmail'];
    $password=$_POST['tpwd'];
    $query=mysqli_query($con,"SELECT * FROM teacher WHERE tmail='$email' AND  tpass='$password'");
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

?>
