<!-- 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');
$particularTeacher =$_SESSION['particularTeacher'];
$query=mysqli_query($con,"SELECT * FROM teacher where teacherid='$particularTeacher'")or die(mysqli_error());
$row=mysqli_fetch_array($query); -->

<?php
     session_start();
            
     $particularTeacherID =  $_GET['id'];
     $_SESSION['particularTeacherID']=$particularTeacherID;
     

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "userreg";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
     }
     $particularTeacher= $_SESSION['particularTeacherID'];
     $studId = $_SESSION['id'];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Tutor</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            #buttonStyle{
                align:center;
                width:35%;


            }
            #detail{
                margin-left:85px;
                

            }
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
            .row{
                margin:25px;
            }            

        </style>
        <link rel="stylesheet" href="assets/css/navBarStyle.css">
        <!-- <link rel="stylesheet" href="assets/css/footer.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/profile.css"> -->
         <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body style="background-color: rgb(189, 189, 189);">
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
                        <li><a href="home.php">Home</a></li>
                        
                        <li><a href="connectTeach.php">Faculty</a></li>
                        <li ><a href="about.html">About</a></li>
                    </ul>
                     
                </div>
            </div>
        </nav>


        <!-- MY Profile Heading -->


        <div class="container" style="background-color: white; ">
            <div class="row">
                <h1 style="font-family: 'Times New Roman', Times, serif; color: rgb(0, 0, 0); margin-left:20px ;">Teacher Profile</h1>
            </div>
        </div>

        <div class="container" style = "background-color:white; margin-top: 20px; height: 100%; ">
                
            <!-- Profile Pic -->
            <div class= "row">
                <img src="assets/img/avatar.png" style="height:200px; width: 250px; margin-left: 35%;margin-top:50px">
            </div>

            
            


            <!-- php code -->
            <div class="row" id="detail">
                <?php         
                                
                    $query = "SELECT * FROM teacher where teacherId = $particularTeacherID ";
                    $data =mysqli_query($conn, $query);
                    $result = mysqli_fetch_assoc($data);
                    echo "<h4>Teacher ID:</h4>".  $result['teacherId'] ;
                    echo "<h4>Name : </h4>". $result['tfname'] . $result['tlname'];
                    echo "<h4>Gender:</h4>". $result['gender'];
                    echo "<h4>EmailID:</h4>". $result['tmail'];
                    echo "<h4>Phone Number:</h4>". $result['tphone'];
                    echo "<h4>Address:</h4>". $result['taddress'];
                    echo "<h4>location</h4>". $result['location'];
                    echo "<h4>Class</h4>". $result['class'];
                    echo "<h4>University</h4>". $result['university'];
                    echo "<h4>Medium</h4>". $result['medium'];
                    echo "<h4>Language:</h4>". $result['language'];
                    echo "<h4>Exprience</h4>". $result['exprience'];                   
                            

                ?>
            </div>

            <div class="row" >
                <form action = "" method ="post">
                    <input type="submit" value = "request" name="request" class="btn btn-primary btn-lg" id="buttonStyle" />
                </form>
            </div>



            <!-- on press button -->
            <?php 

                if (isset($_POST["request"]))
                {
                    
                    // echo '<script>alert("Sent a request")</script>'; 
                    // $query = "UPDATE  connectTeacher SET teacherId = '$particularTeacher' , studentId = '$studId' , response ='request'";
                    $sql = "INSERT INTO connectTeacher (studentId, teacherId, response) VALUES ('$studId', '$particularTeacher', 'request')";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script>alert("Record updated successfully")</script>'; 
                    
                        // echo "Record updated successfully";
                    } else {
                        echo '<script>alert("Error updating record:")</script>'; 
                        // echo "Error updating record: " . $conn->error;
                    }
                    
                    $conn->close();
    
                    
                }         
            ?>


        </div>
        <!-- footer -->
        <div id ="foot" >
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
