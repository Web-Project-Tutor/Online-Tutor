<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');
$id=$_SESSION['teacherid'];
$query=mysqli_query($con,"SELECT * FROM teacher where teacherId='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
?>
<!-- <!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>teacher profile </title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Tutor</title>
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
                        <li ><a href="teahHome.php">Home</a></li>
                        <li><a href="studentAccept.php">Accept</a></li>
                        <li><a href="studentRequest.php">Request</a></li>
                        <li ><a href="about.html">About</a></li>
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                        <div class="dropdown">
                            <img src="assets/img/avatar.png" alt="Avatar" class="avatar">
                            
                            <div class="dropdown-content">

                                <!-- <li style="size: 250px;"><a href="studentProfile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li> -->
                                <li style="size: 250px;"><a href="teacherProfile.php"><span class="glyphicon glyphicon-user"></span>My Profile</a></li>
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
                <h1 style="font-family: 'Times New Roman', Times, serif; color: rgb(0, 0, 0); margin-left:20px ;">My Profile</h1>
            </div>
        </div>

        

        <div class="container" style="background-color: white; margin-top: 20px;  ">
            <!-- Profile Pic -->
            <div id = "studentPic">
                <img src="assets/img/avatar.png" style="height:200px; width: 250px; margin-left: 35%;margin-top:50px">
            </div>


            <div class="container">
                <div class="row">
                    <div style="margin-left: 35%;">
                        <h3>Account:</h3>
                        <h4>Personal Info</h4>
                    </div>
                </div>
            </div>

            <h1>User Profile</h1>
            <div class="profile-input-field">
                <h3>Please Fill-out All Fields</h3>
                <form method="post" action="#" >

          <div class="form-group">
            <label>Firstname</label>
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your First Name" value="<?php echo $row['tfname']; ?>" required />
          </div>

          <div class="form-group">
            <label>Surname</label>
            <input type="text" class="form-control" name="sname" style="width:20em;" placeholder="Enter your Surname" value="<?php echo $row['tlname']; ?>" required />
          </div>



          <div class="form-group">
            <label>Mail</label>
            <input type="text" class="form-control" name="mail" style="width:20em;" placeholder="Enter your mail" value="<?php echo $row['tmail']; ?>" required />
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone" style="width:20em;" placeholder="Enter your Phone Number" value="<?php echo $row['tphone']; ?>" required />
          </div>

          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['taddress']; ?>"></textarea>
          </div>





          <div class="form-group">
            <label>University</label>
            <input type="text" class="form-control" name="uni" style="width:20em;" required placeholder="Enter your University" value="<?php echo $row['university']; ?>"></textarea>
          </div>

          <div class="form-group">
            <label>Class</label>
            <input type="text" class="form-control" name="cla" style="width:20em;" required placeholder="Enter your class which you take" value="<?php echo $row['class']; ?>"></textarea>
          </div>

          <div class="form-group">
            <label>Language</label>
            <input type="text" class="form-control" name="lan" style="width:20em;" required placeholder="Enter language" value="<?php echo $row['language']; ?>"></textarea>
          </div>

         

          <div class="form-group">
            <label>Experience</label>
            <input type="text" class="form-control" name="exp" style="width:20em;" required placeholder="Enter your Experience" value="<?php echo $row['exprience']; ?>"></textarea>
          </div>

          <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gen" style="width:20em;" required placeholder="Enter your gender" value="<?php echo $row['gender']; ?>"></textarea>
          </div>

          
          <div class="form-group">
            <label>Subject Name</label>
            <input type="text" class="form-control" name="sub" style="width:20em;" required placeholder="Enter your Subject Name" value="<?php echo $row['tsubject']; ?>"></textarea>
          </div>





          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
            <center>
             <a href="logout.php">Log out</a>
           </center>
          </div>

        </form>

        
















        
      </div>
      </html>
      <?php
      if(isset($_POST['submit']))
      {
        $firstname = $_POST['fname'];
        $surname = $_POST['sname'];
        
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
        $university=$_POST['uni'];
        $class=$_POST['cla'];
        $language=$_POST['lan'];
        $experience=$_POST['exp'];
        $gender=$_POST['gen'];
        $subject=$_POST['sub'];




        $query = "UPDATE teacher SET tfname = '$firstname',
                  tlname = '$surname', tmail ='$mail', tphone = $phone,taddress = '$address',
                  university='$university',class='$class',language='$language',exprience='$experience', gender='$gender',tsubject='$subject'                  
                  WHERE teacherId = '$id'";

      // $query = "UPDATE teacher SET tfname = '$firstname',
      //                 tlname = '$surname', tmail ='$mail', tphone = $phone,taddress = '$address',tsubname='$subject'
      //                 WHERE teacherId = '$id'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    
                    
      ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "teaherProfile.php";
        </script>
        <?php
      }              
?>


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
