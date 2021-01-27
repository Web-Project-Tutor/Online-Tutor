<?php
            session_start();    
                  
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Tutor</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".notification_icon .fa-bell").click(function(){
                    $(".dropdown").toggleClass("active");
                })
            });
        </script>
        
        
        
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
                margin-top: 50px;                
                background-color:rgb(0, 0, 0)  ; 
                color: #fff;
                text-align: center;
                font-weight: var(--font-semi);
                height: 100px;

            

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
                /* min-width: 180px;
                /* height: 100px; */
                min-width: 160px; */
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                /* padding: 12px 16px;
                z-index: 1;
                
                /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1; */ */
                }

                .dropdown:hover .dropdown-content {
                display: block;
                }

                .desc {
                padding: 15px;
                text-align: center;
                }
                .design{
                    margin:15px;
                    text-align: center;
                }





        </style>
        <link rel="stylesheet" href="assets/css/navBarStyle.css">
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
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="connectTeach.php">Faculty</a></li>
                        <li ><a href="about.html">About</a></li>
                    </ul>




                    <ul class="nav navbar-nav navbar-right">
                    <a href="teacherAccepted.php"><i class="fa fa-bell" style="font-size:20px;color:white; margin-right:10px;margin-top:15px"></i></a>
                        
                        <div class="dropdown">

                            <span><img src="assets/img/avatar.png" alt="Avatar" class="avatar" style="font-size:20px;margin-right:20px;margin-bottom:10px">                            
                            </span>
                            <div class="dropdown-content">
                                <li style="size: 250px;"><a href="studentProfile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                                <li style="size: 250px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                            </div>
                        </div>
                    </ul> 
                    
                </div>
            </div>
        </nav>
            
        <FONT COLOR="#660000" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif" SIZE="5"><MARQUEE>AS YOU KNOW MORE YOU LEARN MORE</MARQUEE></FONT>
            
        <br><br><br><br><br><br><br><br>


                




        <div id="slideshow">
            <div>
              <img src="assets/img/slider/img01.jpeg" width="600" height="400">
            </div>

            <div>
              <img src="assets/img/slider/img02.jpeg" width="600" height="400">
            </div>

            <div>
                <img src="assets/img/slider/img03.jpeg" width="600" height="400">
            </div>

            <div>
                <img src="assets/img/slider/img04.png" width="600" height="400">
            </div>

            <div>
                <img src="assets/img/OnlineTeach.jpg" width="600" height="400">
            </div>

            <div>
                <img src="assets/img/OnlineTeach1.jpg" width="600" height="400">
            </div>

        </div>




        <div class="container" id="aboutContainer">
                <div class="row">
                    <div class="col-sm-6"> 
                        <h3>Education is not a privilege,It is your Right !</h3>
                        <ul>
                            <li>Home Tuitions</li>
                            <li>Online Tuitions</li>
                            <li>Exam Preparation / Mock Tests</li>
                        </ul> 
                    </div>
                    <div clsss ="col-sm-6">
                        <img src="assets/img/OnlineTeach1.jpg" alt="About Picture" width="425px" height="250px">
    
                    </div>
                </div>
            </div>

        <div class="design">
            <div class="container">

                <div class="row" style="padding:25px;"> 
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <centrr><h1>Find Tutors From Your State</h1></centre>
                            
                        <br><br>
                    </div>
                </div>
                <div class="row" style="padding-left:25px;">
                    <div class="col-md-1">

                    </div>
                        <div class="col-md-8">
                            <h4>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Looking for a Tutor from your own state?
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;Just click on the name of your state from the list below and meet all them at one place.
                            
                            </h4>
                             
                            <br><br>
                        </div>
                    </div>
               </div>


               <br><br><br>
                <div class="container">
                    <div class="row">
                        

                        <div class="col-md-3">
                            <ul>
                                <li>Uttar Pradesh</li>
                                <li>Delhi</li>
                                <li>West Bengal</li>
                                <li>Maharashtra</li>
                                <li>Karnataka</li>
                                <li>Tamil Nadu</li>
                                <li>Telangana</li>
                                <li>Rajasthan</li>                                
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <ul>
                                <li>Uttar Pradesh</li>
                                <li>Delhi</li>
                                <li>West Bengal</li>
                                <li>Maharashtra</li>
                                <li>Karnataka</li>
                                <li>Tamil Nadu</li>
                                <li>Telangana</li>
                                <li>Rajasthan</li>                                
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <ul>
                                <li>Uttar Pradesh</li>
                                <li>Delhi</li>
                                <li>West Bengal</li>
                                <li>Maharashtra</li>
                                <li>Karnataka</li>
                                <li>Tamil Nadu</li>
                                <li>Telangana</li>
                                <li>Rajasthan</li>                                
                            </ul>
                        </div>



                        
                    </div>

                </div>
            </div>
        </div>


     
         
        
        <style>
            #slideshow {
                margin: 60px auto;
                margin-right: 30%;
                position: relative;
                width: 240px;
                height: 240px;
                padding: 10px;
                /* box-shadow: 0 0 20px rgba(0, 0, 0, 0.4); */
            }

            #slideshow > div {
                        position: absolute;
                        /* top: 1px; */
                        /* left: 10px; */
                        right: 10px;
                        bottom: 10px;
            }
        </style>

        <script>
            $("#slideshow > div:gt(0)").hide();

            setInterval(function() {
            $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
            }, 3000);
        </script> 













       
            <!-- echo $_SESSION['id']; -->
        


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

























