
<?php
    session_start();
            
    $particularStudentID =  $_GET['id'];
    $teachId = $_SESSION['teacherid'];
     
     $_SESSION['particularStudentID']=$particularStudentID;
     

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "userreg";

    // echo $particularStudentID;
    // echo $teachID;
     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
     }
    //  $particularStudentID= $_SESSION['particularStudentID'];
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
                height:100%;
                

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
                        <li class="active"><a href="teachHome.php">Home</a></li>
                        <li><a href="studentAccept.php">Accept</a></li>
                        
                        <li ><a href="about.html">About</a></li>
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                     <a href="studentRequest.php"><i class="fa fa-bell" style="font-size:20px;color:white; margin-right:10px;margin-top:15px"></i></a>
                         
                        <div class="dropdown">
                           <img src="assets/img/avatar.png" alt="Avatar" class="avatar" style="font-size:20px;margin-right:20px;margin-bottom:10px">
                            
                            <div class="dropdown-content">

                                <li style="size: 250px;"><a href="teaherProfile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                                <li style="size: 250px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                                
                                
                                
                               
                            </div>
                        
                        
                        </div>

                        </ul> 
                </div>
            </div>
        </nav>
        


        <!-- MY Profile Heading -->


        <div class="container" style="background-color: white; ">
            <div class="row">
                <h1 style="font-family: 'Times New Roman', Times, serif; color: rgb(0, 0, 0); margin-left:20px ;">Student Profile</h1>
            </div>
        </div>

        <div class="container" style = "background-color:white; margin-top: 20px;">
                
            <!-- Profile Pic -->
            <div class= "row">
                <img src="assets/img/avatar.png" style="height:200px; width: 250px; margin-left: 35%;margin-top:50px">
            </div>

            
            


            <!-- php code -->
            <div class="row" id="detail">
                <?php         
                            
                    $query = "SELECT * FROM student where studentId =  $particularStudentID";
                    $data =mysqli_query($conn, $query);
                    $result = mysqli_fetch_assoc($data);
                    echo "<div style='margin-left: 330px;'>"  ;
                    echo "<b style='font-size:15px'>Student ID  :  </b>".  $result['studentId'] ."<br><br>";
                    echo "<b style='font-size:15px'>Name :  </b>". $result['sfname'] . $result['slname']."<br><br>";
                    echo "<b style='font-size:15px'>Gender :  </b>". $result['gender'] ."<br><br>";
                    echo "<b style='font-size:15px'>EmailID :  </b>". $result['semailid'] ."<br><br>";
                    echo "<b style='font-size:15px'>Phone Number :  </b>". $result['sphone'] ."<br><br>";
                    echo "<b style='font-size:15px'>Address :  </b>". $result['saddress']."<br><br>";
                    echo "<b style='font-size:15px'>location :  </b>". $result['location'] ."<br><br>";
                    echo "<b style='font-size:15px'>Class :  </b>". $result['class']."<br><br>";
                    echo "<b style='font-size:15px'>University :  </b>". $result['university']."<br><br>";
                    echo "<b style='font-size:15px'>Language :  </b>". $result['language']."<br><br>";                
                    echo "</div>";     

                ?>
            </div>

            <div class="row"  style='margin-left: 330px;'>
                <form action = "" method ="post">
                    <input type="submit" value = "Accept" name="accept" class="btn btn-primary btn-lg" id="buttonStyle" />
                    <input type="submit" value = "Reject" name="reject" class="btn btn-primary btn-lg" id="buttonStyle" />
                </form>
            </div>



            <!-- on press button -->
            <!-- on press button -->
            <?php 

                if (isset($_POST["accept"]))
                {
                    // echo '<script>alert('.$teachId.')</script>'; 
                // echo $particularStudentID;


                    $sql = "UPDATE  connectTeacher SET  response='accept' where studentId  = '$particularStudentID' and teacherId= '$teachId' ";
                   
                    // $sql = "UPDATE  connectTeacher SET  response='accept' where studentId = '$particularStudentID' , teacherId= '$teachId' ";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script>alert("Record updated successfully")</script>'; 
                    
                        // echo "Record updated successfully";
                    } 
                    else {
                        echo '<script>alert("Error updating record:")</script>'; 
                        // echo "Error updating record: " . $conn->error;
                    }
                    
                    $conn->close();

                    
                }
                if (isset($_POST["reject"]))
                {
                    
                    $sql = "UPDATE  connectTeacher SET  response='reject' where studentId  = '$particularStudentID' and teacherId= '$teachId' ";
                   
                    if ($conn->query($sql) === TRUE) {
                        echo '<script>alert("Record updated successfully")</script>'; 
                    
                        // echo "Record updated successfully";
                    } 
                    else {
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
