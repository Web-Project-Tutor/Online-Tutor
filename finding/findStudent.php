<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tutor</title>
    <link rel="stylesheet" href="assets/css/startcs.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

</head>
  <body>
        <header><h1><center><i> Online Tutuor</i> </center></h1></header>
        <div class="topnav">
            <ul>
                <li><a href="index.html" class='active'>Home</a></li>
                <li><a href="register.html" >Registration</a></li>
                <li><a href="login.html">Log In</a></li>
                <li><a href="logout.php">Log out</a></li>
                <li><a href="findStudent.html" class="active">Find Student</a></li>
                <li><a href="findTeacher.html">Find Tutor</a></li>
                <li><a href="notification.html">Notification</a></li>
                <li><a href="about.html" >About</a></li>
            </ul>
        </div>
        <!-- <button class="FindStudent">Find Student</button>
        <button class="FindTeacher">Find Teacher</button> -->
       
        <!-- footer -->
      
      <table border="1">
    <tr>
        <th>FirstName</th>
        <th>SecondName</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
    </tr>
<?php
session_start();
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'userreg');

$selectquery="select * from student";
$query=mysqli_query($con,$selectquery);
$num=mysqli_num_rows($query);



while($res=mysqli_fetch_array($query)){
    echo "<tr>";
    echo  "<td>";
    echo $res['sfname'];
    echo "</td>";

    echo  "<td>";
    echo $res['slname'];
    echo "</td>";

    echo  "<td>";
    echo $res['semailid'];
    echo  "</td>";

    echo  "<td>";
    echo $res['sphone'];
    echo  "</td>";

    echo  "<td>";
    echo $res['saddress'];
    echo  "</td>";

    echo  "</tr>";
    echo "<br>";
}
?>
</table>
        <footer class ="footer">
            <p class="footer__title">Online Tutor<br>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved</p>
          </footer>
     </body>

</html>
