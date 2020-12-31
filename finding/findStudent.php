<?php
session_start();
mysql_connect("127.0.0.1", "root", "") or die("Could not connect");
mysql_select_db("userreg") or die("could not find databse");
$output='';


if(isset($_POST['search']))
{
    $searchq=$_POST['search'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);

    $query=mysql_query("select * from student where sfname like '%$searchq%' or slname like '%$searchq%' or saddress like'%$searchq%'") or die("could not seach");
    $count=mysql_num_rows($query);
    if($count==0){
        $output='there was no search result';

    }
    else{
        while($row=mysql_fetch_array($query)){
            
            $fname=$row['sfname'];
            $lname=$row['slname'];
            $mail=$row['semailid'];
            $phone=$row['sphone'];
            $address=$row['saddress'];
            

            $output .='<div> '.$fname.' '.$lname.' '.$mail.' '.$phone.' '.$address.'</div>';
        }
    }
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>



        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>

            .imgCenter{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 800px;
                height: 400px;
            }

            #conDetail{
                margin-top: 50px;                
                background-color:rgb(232,232,232)  ; 
            

            }

            #foot{
                width: 100%;
                margin-top: 50px;                
                background-color:rgb(0, 0, 0)  ; 
                color: #fff;
                text-align: center;
                font-weight: var(--font-semi);
                height: 100px;
                bottom: 0px;
                position: absolute;

            

            }
            #photoDetail{
                margin-top: 50px;  

            }

            .avatar {
                vertical-align: middle;
                width: 35px;
                height: 35px;
                border-radius: 50%;
                margin-top: 8px;
            }

            .dropdown{
                position: relative;
                display: inline-block;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                margin-right: 10px;
                min-width: 180px;
                /* height: 100px; */
                
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                }

                .dropdown:hover .dropdown-content {
                display: block;
                }

                .desc {
                padding: 15px;
                text-align: center;
                }

        </style>
        <link rel="stylesheet" href="assets/css/navBarStyle.css">
        <link rel="stylesheet" href="assets/css/footer.css">
         <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img style="max-width:50px; margin-top: 1px;" class="img-circle" src="assets/img/logo2.jpg">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavBar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home.html">Home</a></li>
                        <li><a href="findStudent.php">Student</a></li>
                        <li><a href="findTeacher.php">Faculty</a></li>
                        <li ><a href="about.html">About</a></li>
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                        <div class="dropdown">
                            <img src="assets/img/avatar.png" alt="Avatar" class="avatar">
                            
                            <div class="dropdown-content">

                                <li style="size: 250px;"><a href="studentProfile.php"><span class="glyphicon glyphicon-user"></span> Student Profile</a></li>
                                <li style="size: 250px;"><a href="teacherProfile.php"><span class="glyphicon glyphicon-user"></span> Teacher Profile</a></li>
                                
                                <!-- <li style="size: 250px;"><a href="authentication/registration/register.html"><span class="glyphicon glyphicon-user"></span> Register</a></li> -->
                                <li style="size: 250px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                                
                                
                                
                                <!-- <li style="size: 250px;"><a href="authentication/signIn_SignOut/login.html"><span class="glyphicon glyphicon-log-out"></span> Login</a></li> 
                                 -->
                     

                            </div>
                        
                        
                        </div>
                        <!-- <img src="assets/img/avatar.png" alt="Avatar" class="avatar"> -->
                        <!-- <li><a href="authentication/registration/register.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                        <li><a href="authentication/signIn_SignOut/login.html"><span class="glyphicon glyphicon-log-out"></span> Login</a></li> --> -->
                     </ul> 
                </div>
            </div>
        </nav>




        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="#findstudent.php" method="post">
           
            <a href="findstudent.php">refresh</a>
            <input type="text" name="search" placeholder="Searching elements"/>
            <input type="submit"  value=">>"/>
            


            <table border="1">
    <tr>
        <th>FirstName</th>
        <th>SecondName</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
    </tr>
<?php

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
        </form>
        <?php print("$output");
       
   
        ?>

<div id ="foot">
            <p class="footer__title">Online Tutor<br>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved</p>
        </div>
        
    </body>
</html>
