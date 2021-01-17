

 <html>
    <head>


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
            .row{
                margin:25px;
            }            

        </style>
        
        
        <link rel="stylesheet" href="assets/css/navBarStyle.css">
        <link rel="stylesheet" href="assets/css/tableDesign.css">
        <!-- <link rel="stylesheet" href="assets/css/navBarStyle.css"> -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <link rel="stylesheet" href="assets/css/footer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    <!-- <nav class="navbar navbar-inverse">
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
                        <li ><a href="home.php">Home</a></li>
                        <li class="active"><a href="connectTeach.php">Faculty</a></li>
                        <li ><a href="about.html">About</a></li>
                    </ul>
                    
                </div>
            </div>
    </nav> -->
        <table border="2" id = "tableId">
            <tr>
                <th> Sl.no </th>
                <th>First Name</th>
                <th>last Name </th>
                <th>Email</th>
            </tr>

                <?php
                    session_start();
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
                    $sid = $_SESSION['id'];
                    
                    $sql = "SELECT * FROM teacher ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    $i=0;

                    while($row = $result->fetch_assoc()) {
                        $i=$i+1;
                        $_SESSION["particularTeacher"]=$row['teacherId'];

                        echo "
                        
                        <tr  onclick=\"window.location='particularTeachPro.php?id=".$row["teacherId"]."'\">           
                        <td>".$i."</td>
                        <td>".$row['tfname']."</td>
                        <td>".$row['tlname']."</td>
                        <td>".$row['tmail']."</td></a></tr>
                        
                        
                        ";
                    }
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
                ?>




        </table>



<!-- Footer -->
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