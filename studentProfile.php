<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT * FROM student where studentId='$id'")or die(mysqli_error());
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
            form, #centerAlign{
                text-align: center;
            }
            input[type="text"] {
             position: relative;
             display: block;
             margin : 0 auto;
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
                        <li class="active"><a href="home.php">Home</a></li>
                        <!-- <li><a href="findStudent.php">Student</a></li> -->
                        <li><a href="connectTeach.php">Faculty</a></li>
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


        <div class="container" style="background-color: white; width:900px ">
            <div class="row">
                <h1 style="font-family: 'Times New Roman', Times, serif; color: rgb(0, 0, 0); margin-left:20px ;">My Profile</h1>
            </div>
        </div>

        

        <div class="container" style="background-color: white; margin-top: 20px;  width:900px ">
            <!-- Profile Pic -->
            <div id = "studentPic">
                <img src="assets/img/avatar.png" style="height:200px; width: 250px; margin-left: 35%;margin-top:50px">
            </div>

            <!-- detail of acccount n info -->
            <div class="container">
                <div class="row">
                    <div style="margin-left: 35%;">
                        <h3>Account:</h3>
                        <h4>Personal Info</h4>
                    </div>
                </div>
            </div>


           
            <h1 id='centerAlign'>User Profile</h1>
            <div id='centerAlign' class="profile-input-field">
                <h3 id='centerAlign'>Please Fill-out All Fields</h3>
            

            </div>






































        <form method="post" action="#" >

            <div class="form-group">
                <label>Firstname</label>
                <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your First Name" value="<?php echo $row['sfname']; ?>" required />
            </div>

            <div class="form-group">
                <label>Surname</label>
                <input type="text" class="form-control" name="sname" style="width:20em;" placeholder="Enter your Surname" value="<?php echo $row['slname']; ?>" required />
            </div>



            <div class="form-group">
                <label>Mail</label>
                <input type="text" class="form-control" name="mail" style="width:20em;" placeholder="Enter your mail" value="<?php echo $row['semailid']; ?>" required />
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phone" style="width:20em;" placeholder="Enter your Phone Number" value="<?php echo $row['sphone']; ?>" required />
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['saddress']; ?>"></textarea>
            </div>








         

            <div class="radioLeft">
                <label>Please select your gender:</label><br>
                <input type="radio" id="male" name="gender" value="male" >
                <label for="male">Male</label><br>
                
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label><br>

                <!-- <?php if ($row['gender'] != "Female") echo 'checked=checked' ?>  -->

                <!-- <script type="text/javascript">
                    $(document).ready(function () {
                    if(window.location.href.indexOf("#community") > -1) { // check if URL contains #community in it
                    document.getElementById("myCustomCheckBox").checked; // set your checkbox checked
                        }
                    });
                    </script> -->
                
            </div>



            <div class="form-group">
                <label>University: </label>
                
                <input type="text" class="form-control" name="uni" style="width:20em;" placeholder="Enter your university Name" value="<?php echo $row['university']; ?>" required />
            </div>



            <div class="form-group">
            <label>Please select Language:</label><br>
                <input type="checkbox" name="lan" value="English" >
                <label for="english">English</label><br>
                <input type="checkbox"  name="lan" value="Kannada">
                <label for="kannada">Kannada</label><br>
                <input type="checkbox" name="lan" value="Hindi">
                <label for="hindi">Hindi</label><br>
                
            </div>

            <div class="form-group">
                <label>Choose Class:</label><br>

                <input type="checkbox" name="cla" value="1-7"> 
                <label for="class">Class 1-7</label><br>

                <input type="checkbox" name="cla" value="8-10"> 
                <label for="class">Class 8-10</label><br>

                <input type="checkbox" name="cla" value="11-12"> 
                <label for="class">Class 11-12</label><br>

                <input type="checkbox" name="cla" value="BE-CSE"> 
                <label for="class">BE-CSE</label><br>

                <input type="checkbox" name="cla" value="BE-Civil"> 
                <label for="class">BE-Civil</label><br>

                <input type="checkbox" name="cla" value="BE-Mech"> 
                <label for="class">BE-Mech</label><br>

                <input type="checkbox" name="cla" value="BE-ISE"> 
                <label for="class">BE-ISE</label><br>

                <input type="checkbox" name="cla" value="BE-ECE"> 
                <label for="class">BE-ECE</label><br>

                <input type="checkbox" name="cla" value="BCA"> 
                <label for="class">BCA</label><br>


            </div>



            <div class="form-group">


                <label>Choose Subject:</label><br>

                <input type="checkbox" name="sub" value="CS"> 
                <label for="class">Computer Science</label><br>

                <input type="checkbox" name="sub" value="Maths"> 
                <label for="class">Maths</label><br>

                <input type="checkbox" name="sub" value="Physics"> 
                <label for="class">Physics</label><br>

                <input type="checkbox" name="sub" value="chem"> 
                <label for="class">Chemistry</label><br>

                <input type="checkbox" name="sub" value="bio"> 
                <label for="class">Biology</label><br>

                <input type="checkbox" name="sub" value="arts"> 
                <label for="class">Arts</label><br>

                <input type="checkbox" name="sub" value="commerce"> 
                <label for="class">Commerce</label><br>
            
                <input type="checkbox" name="sub" value="science"> 
                <label for="class">Science</label><br>

                <input type="checkbox" name="sub" value="stats"> 
                <label for="class">Statics</label><br>

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

        <?php
            if(isset($_POST['submit'])){
                $firstname = $_POST['fname'];
                $surname = $_POST['sname'];
                // $gender = $_POST['gender'];
                // $age = $_POST['age'];
                $mail = $_POST['mail'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];


                $gender=$_POST['gender'];
                $university=$_POST['uni'];
                $language=$_POST['lan'];
                $class=$_POST['cla'];
                $subject=$_POST['sub'];


                $query = "UPDATE student SET sfname = '$firstname',
                slname = '$surname', semailid ='$mail', sphone = $phone,saddress = '$address',
                gender='$gender',university='$university',language='$language',class='$class',
                subject='$subject'
                WHERE studentId = '$id'";
                // $query = "UPDATE student SET sfname = '$firstname',
                //             slname = '$surname', semailid ='$mail', sphone = $phone,saddress = '$address'
                //             WHERE studentid = '$id'";
                            $result = mysqli_query($con, $query) or die(mysqli_error($con));
                            
                ?>
                            <script type="text/javascript">
                    alert("Update Successfull.");
                    window.location = "studentProfile.php";
                </script>
                <?php
            };
            ?>
    </body>
</html>
            










 <!-- footer -->

