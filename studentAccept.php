<?php
    session_start();                      
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Tutor</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/tableDesign.css">
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
        
    </head>
    <body>
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
                        <li><a href="studentRequest.php">Request</a></li>
                        <li class="active"><a href="studentAccept.php">Accept</a></li>
                        <li ><a href="about.html">About</a></li>
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                        <div class="dropdown">
                            <img src="assets/img/avatar.png" alt="Avatar" class="avatar">
                            
                            <div class="dropdown-content">

                                <li style="size: 250px;"><a href="teacherProfile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                                <li style="size: 250px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                                
                                
                                
                               
                            </div>
                        
                        
                        </div>

                        </ul> 
                </div>
            </div>
        </nav>
       

        <table border="2" id = "tableId">
            <tr>
                <th> Sl.no </th>
                <th>Student Id</th>
                <th>Student Name </th>
                <th>Location</th>
                <th>Class</th>
                
            </tr>

            <?php
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
                    // $sid = $_SESSION['id'];
                    $teachID=$_SESSION["teacherid"];
                    
                    
                    // $sql = "SELECT * FROM connectTeacher where teacherId = $teachID";


                    $sql = "SELECT * FROM student s, connectTeacher c where s.studentId = c.studentId and  c.teacherId = $teachID and response = 'accept' ";
                    
                    
                    $result = $conn->query($sql);

                    echo $_SESSION['teacherid'];
                    if ($result->num_rows > 0) {
                    // output data of each row
                        $i=0;

                        while($row = $result->fetch_assoc()) {
                            $i=$i+1;

                            echo "


                            <tr>  
                            
                            <td onclick=\"window.location='particularStudPro.php?id=".$row["studentId"]."'\">".$i."</td>
                            <td onclick=\"window.location='particularStudPro.php?id=".$row["studentId"]."'\">".$row['studentId']."</td>
                            <td onclick=\"window.location='particularStudPro.php?id=".$row["studentId"]."'\">".$row['sfname']."</td>
                            <td onclick=\"window.location='particularStudPro.php?id=".$row["studentId"]."'\">".$row['location']."</td>
                            <td onclick=\"window.location='particularStudPro.php?id=".$row["studentId"]."'\">".$row['class']."</td>
        
                            </tr>";
                            
                            
                        }
                    } 
                    else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>




        </table>
        





        <!-- footer -->
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

























