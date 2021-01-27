<html>
    <head>
        
        
        
        

        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            h5, h3, th{
                text-align:center;
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

        </style>


        <link rel="stylesheet" href="assets/css/navBarStyle.css">
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
                            <li ><a href="index.html">Home</a></li>
                            <li><a href="studentList.php">Student</a></li>
                            <li  class="active"><a href="teacherList.php">Faculty</a></li>
                            <li ><a href="about.html">About</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                            <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

   













        <!-- <p> List Of All The Student</p> -->

        <form action="" method="post">
            <h3>Sort By:
                <select name = "field" style="font-size: 15px;">
                    <option value="" disabled selected>Choose Field</option>
                    <option value="tfname"> First Name </option>
                    <option value="tlname"> Last Name </option>
                    <option value="tmail"> Emailid </option>
                </select>
            </h3>
            <h3>
                <input type="submit" name="submit" value="Submit" style="font-size: 15px;">
                <input type="reset" name="submit" value="Reset" style="font-size: 15px;">
             </h3>
        </form>

        <?php 
            function selection_sort($data, $keys)
            {
                for($i=0; $i<count($data)-1; $i++)
                {
                    $min = $i;
                    for($j=$i+1; $j<count($data); $j++)
                    {
                        if($data[$j]<$data[$min])
                        {
                            $min = $j;
                        }
                    }
                    $data = swap_positions($data, $i, $min);
                    $keys = swap_positions($keys, $i, $min);
                }
                return $keys;
            }


            function swap_positions($data1, $left, $right)
            {
                $temp = $data1[$right];
                $data1[$right] = $data1[$left];
                $data1[$left] = $temp;
                return $data1;
            }



            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "userreg";

            $sql=mysqli_connect("localhost","root","","userreg");    
            // Create connection
            // $conn = new mysqli($servername, $username, $password, $dbname);
            //         // Check connection
            // if ($conn->connect_error) {
            //     die("Connection failed: " . $conn->connect_error);
            // }
            // $sid = $_SESSION['id'];
                    
            $str = "SELECT * FROM teacher";
            
            $res = mysqli_query($sql, $str);
            
            $field = "none";
            $myarr = [];
            $original = [];
            $i = 1;

            while($arr = mysqli_fetch_assoc($res))
            {
                $myarr[] = $arr;
            }

            if(isset($_POST['submit']) && isset($_POST['field']))
            {
                $field = $_POST['field'];
                
                $original = array_column($myarr, $field, 'teacherId');
                // Create Associate array with (key,value)=('id',$feild)
				$orginalKey=array_keys($original);
				$originalVal=array_values($original);
				$sortedkeys=selection_sort($originalVal,$orginalKey);
                $myarr=[];
                
                foreach($sortedkeys as $key)
                {
                    $str ="select * from teacher WHERE teacherId= '$key' ";
                    $res = mysqli_query($sql, $str);
                    $myarr[] = mysqli_fetch_assoc($res);
                    // echo $myarr;
                }
            }
        ?>

        <h3>Student Details [Sorted by: <?php echo $field;?>]</h3>
        <!-- <table border="1" width = "80%" align="center" > -->
        <table border="2" id = "tableId">
            
            
            <tr>
                <h3>
                <th><h3>Sl.No </h3></th> 
                <th><h3>First Name</h3></th> 
                <th><h3>last Name </h3></th> 
                <th><h3>Email</h3></th> 
       
            </tr>

            <?php foreach ($myarr as $arr): ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $arr['tfname']; ?></td>
                <td><?php echo $arr['tlname']; ?></td>
                <td><?php echo $arr['tmail']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>




















    </body>
</html>







       