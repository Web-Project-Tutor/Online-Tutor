<html>
    <head>
        <link rel="stylesheet" href="assets/css/tableDesign.css">
        
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
                        <li><a href="#">Home</a></li>
                        <li  class="active"><a href="studentListIndex.php">Request</a></li>
                        <li><a href="teacherAccept.php">Accept</a></li>
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


        <p> List Of All The Student</p>
        <table border="2" id = "tableId">
            <tr>
                <th> Sl.no </th>
                <th>First Name</th>
                <th>last Name </th>
                <th>Email</th>
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
                    $sid = $_SESSION['id'];
                    
                    $sql = "SELECT * FROM student ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    $i=0;

                    while($row = $result->fetch_assoc()) {
                        $i=$i+1;

                        echo "
                        <tr>
                        <td>".$i."</td>
                        <td>".$row['sfname']."</td>
                        <td>".$row['slname']."</td>
                        <td>".$row['semailid']."</td>
                        
                        
                        ";
                    }
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
                ?>




        </table>


    </body>
</html>