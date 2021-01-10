<?php
session_start();
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'userreg');
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT * FROM student where studentid='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

// $sujectquery=mysqli_query($con,"SELECT * FROM suject where studentid='$id'")or die(mysqli_error());
 ?>
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
                        <li class="active"><a href="home.html">Home</a></li>
                        <li><a href="findStudent.php">Student</a></li>
                        <li><a href="findTeacher.php">Faculty</a></li>
                        <li ><a href="about.html">About</a></li>
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                        <div class="dropdown">
                            <img src="assets/img/avatar.png" alt="Avatar" class="avatar">
                            
                            <div class="dropdown-content">

                                <li style="size: 250px;"><a href="studentProfile.php"><span class="glyphicon glyphicon-user"></span>My Profile</a></li>
                                
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
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your First Name" value="<?php echo $row['sfname']; ?>" required />
          </div>

          <div class="form-group">
            <label>Surname</label>
            <input type="text" class="form-control" name="sname" style="width:20em;" placeholder="Enter your Surname" value="<?php echo $row['slname']; ?>" required />
          </div>

          <!-- <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gender" style="width:20em;" placeholder="Enter your Gender" required value="<?php echo $row['gender']; ?>" />
          </div> -->

          <!-- <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age" style="width:20em;" placeholder="Enter your Age" value="<?php echo $row['age']; ?>">
          </div> -->

          <div class="form-group">
            <label>Mail</label>
            <input type="text" class="form-control" name="mail" style="width:20em;" placeholder="Enter your mail" value="<?php echo $row['semailid']; ?>" required />
          </div>

          <div class="form-group">
            <label>Surname</label>
            <input type="text" class="form-control" name="phone" style="width:20em;" placeholder="Enter your Phone Number" value="<?php echo $row['sphone']; ?>" required />
          </div>

          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['saddress']; ?>"></textarea>
          </div>

          <!-- <div class="form-group">
            <label>Subject Name</label>
            <input type="text" class="form-control" name="sub" style="width:20em;" required placeholder="Enter your Subject Name" value="<?php echo $row['subname']; ?>"></textarea>
          </div> -->

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
      if(isset($_POST['submit'])){
        $firstname = $_POST['fname'];
        $surname = $_POST['sname'];
        // $gender = $_POST['gender'];
        // $age = $_POST['age'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
      $query = "UPDATE student SET sfname = '$firstname',
                      slname = '$surname', semailid ='$mail', sphone = $phone,saddress = '$address'
                      WHERE studentid = '$id'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "studentProfile.php";
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
