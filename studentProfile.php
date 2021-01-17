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








                <div class="form-group">
                    <label>Location</label>

                    <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your First Name" value="<?php echo $row['sfname']; ?>" required />
                </div>

                <div class="form-group">
                    <label>	gender: </label>
                    <label><?php echo $row['gender']; ?><label>
                    <br><label>Female<label>
                    <input type="radio" class="form-control" name="gender" value="Female" required />
                    <br><label>Male<label>
                    <input type="radio" class="form-control" name="gender" style="width:20em;" value="Male" required />
             
                
                
                </div>

               

                <div class="form-group">
                    <label>university: </label>
                    <input type="text" class="form-control" name="university" style="width:20em;" placeholder="Enter your university Name" value="<?php echo $row['university']; ?>" required />
                </div>

                <div class="form-group">
                    <label>language: </label>
                    <label><?php echo $row['language']; ?><label>
                    <br><label>English<label>
                    <input type="checkbox" name="English" value="English"> 
                    <br><label>Kannada<label>                   
                    <input type="checkbox" name="Kannada" value="Kannada">
                    <br><label>Hindi<label>                    
                    <input type="checkbox" name="Hindi" value="Hindi">
                    

                </div>

                <div class="form-group">
                    <label>	class</label>
                    <label><?php echo $row['class']; ?></label>


                    <br><label>1-7<label>
                    <input type="checkbox" name="1-7" value="1-7">  

                    <br><label>8-10<label>                  
                    <input type="checkbox" name="8-10" value="8-10">

                    <br><label>11-12<label>                    
                    <input type="checkbox" name="11-12" value="11-12">

                    <br><label>BE-CSE<label>
                    <input type="checkbox" name="BE-CSE" value="BE-CSE"> 

                    <br><label>BE-Civil<label>                   
                    <input type="checkbox" name="BE-Civil" value="BE-Civil"> 

                    <br><label>BE-Mech<label>                   
                    <input type="checkbox" name="BE-Mech" value="BE-Mech">

                    <br><label>BE-IS<label>
                    <input type="checkbox" name="BE-IS" value="BE-IS"> 

                    <br><label>BE-Ec<label>                   
                    <input type="checkbox" name="BE-Ec" value="BE-Ec"> 

                    <br><label>BCA<label>                   
                    <input type="checkbox" name="BCA" value="BCA">

                
                
                
                </div>



                <div class="form-group">
                    <label>medium : </label>
                    <label><?php echo $row['medium']; ?></label>

                    <br><label>English<label>
                    <input type="checkbox" name="English" value="English">

                    <br><label>Kannada<label>                    
                    <input type="checkbox" name="Kannada" value="Kannada">

                    <br><label>Hindi<label>                    
                    <input type="checkbox" name="Hindi" value="Hindi">
                
                
                </div>

                <div class="form-group">
                    <label>subject : </label>
                    <label><?php echo $row['saddress']; ?></label>

                    <br><label>Computer Science<label>
                    <input type="checkbox" name="Computer Science" value="Computer Science">  

                    <br><label>Maths<label>                  
                    <input type="checkbox" name="Maths" value="Maths">  

                    <br><label>Physics<label>                  
                    <input type="checkbox" name="Physics" value="Physics">

                    <br><label>Chemistry<label>
                    <input type="checkbox" name="Chemistry" value="Chemistry"> 

                    <br><label>Biology<label>                   
                    <input type="checkbox" name="Biology" value="Biology">   

                    <br><label>Arts<label>                 
                    <input type="checkbox" name="Arts" value="Arts">

                    <br><label>Commers<label>
                    <input type="checkbox" name="Commers" value="Commers">

                    <br><label>Science<label>                    
                    <input type="checkbox" name="Science" value="Science"> 

                    <br><label>Statics<label>                   
                    <input type="checkbox" name="Statics" value="Statics">

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


            <!-- <div id ="foot" >
            <p class="footer__title">Online Tutor<br>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved</p> -->
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
            };
            ?>
    </body>
</html>
            










 <!-- footer -->

